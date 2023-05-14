<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Http\JsonResponse;
use GuzzleHttp\Exception\RequestException;

class UserController extends Controller
{
    //

    public function index()
    {
        return view('welcome', ['resVal' => 'Waiting Your Text', 'resMsg' => null, 'resScore' => null]);
    }

    public function indexTwo()
    {
        return view('form', ['res' => []]);
    }


    public function storeTwo(Request $request)
    {
        $form_text = $request->input('nameTwo');

        $client = new Client();

        $OPENAI_API_KEY = env('OPENAI_API_KEY');

        try {
            $response = $client->post('https://api.openai.com/v1/images/generations', [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Authorization' => "Bearer $OPENAI_API_KEY"
                ],
                'json' => [
                    'prompt' => $form_text,
                    'n' => 2,
                    'size' => '1024x1024'
                ]
            ]);

            $result = json_decode($response->getBody(), true);

            // dd($result);
            return view('form', ['res' => $result->data]);
            // Do something with $result
        } catch (RequestException $e) {
            // Handle exceptions here
            echo $e->getMessage();
        }
    }

    public function store(Request $request)
    {
        $form_text = $request->input('name');

        $client = new Client();

        // Make a POST request to the external API
        // HTTP
        $response = $client->request('POST', "http://127.0.0.1:9090/sentiment?pos_text=$form_text", [
            'headers' => [
                'Content-Type' => 'application/json',
            ],
        ]);

        // Handle the response
        $statusCode = $response->getStatusCode();
        $body = $response->getBody()->getContents();
        $json = json_decode($body);

        // $resCode = $json->statu

        $resCode = response()->json(['status' => $statusCode]);
        $resMsg = $json->msg;
        $resVal = $json->predict;
        $resScore = $json->score;



        // $resVal = response()->json(['response' => $json->predict]);
        // $resScore = response()->json(['response' => $json->score]);

        // $resVal = json_decode($resVal->content())->response;
        // $resScore = json_decode($resScore->content())->response;

        return view('welcome', compact('resMsg','resVal', 'resScore'));
    }
}
