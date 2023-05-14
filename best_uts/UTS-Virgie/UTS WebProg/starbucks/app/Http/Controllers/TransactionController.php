<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index(Request $request){
        $transaction = Transaction::with('user')->with('product')->where('user_id','=',$request->id)->get();
        $user = User::with('membership')->find($request->id);
        $day = 'Morning';
        $now = Carbon::now()->addHour(7);
        if ($now->between(Carbon::parse('6:00:00'), Carbon::parse('12:00:00'))) {
            $day = 'Morning';
        }else if($now->between(Carbon::parse('12:00:00'), Carbon::parse('18:00:00'))){
            $day = 'Afternoon';
        }else{
            $day ='Evening';
        }
        $status_code = 2;

        return view('transaction')->with('status',$status_code)->with('user', $user)->with('day', $day)->with('transaction',$transaction)->with('success','');
    
    }

    public function add(Request $request){
        $success_message = "Success";

        $user = User::find($request->userId);
        $transaction = new Transaction();

        $transaction->user_id = $request->userId;
        $transaction->product_id = $request->productId;
        $user->star_number =  $user->star_number + 1;
        $user->save();
        $transaction->save();

        $transaction = Transaction::with('user')->with('product')->where('user_id','=',$request->id)->get();
        $user = User::with('membership')->find($request->id);
        $day = 'Morning';
        $now = Carbon::now()->addHour(7);
        if ($now->between(Carbon::parse('6:00:00'), Carbon::parse('12:00:00'))) {
            $day = 'Morning';
        }else if($now->between(Carbon::parse('12:00:00'), Carbon::parse('18:00:00'))){
            $day = 'Afternoon';
        }else{
            $day ='Evening';
        }
        $status_code = 2;
        return view('transaction')->with('status',$status_code)->with('user', $user)->with('day', $day)->with('transaction',$transaction)->with('success',$success_message);
    }
}
