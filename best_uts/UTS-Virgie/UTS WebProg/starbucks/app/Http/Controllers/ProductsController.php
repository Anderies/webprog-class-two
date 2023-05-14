<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $product = Product::all();

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

        $category = Category::with('product')->get();
        $status_code = 1;
        return view('coffee')->with('user', $user)->with('day', $day)->with('status',$status_code)->with('category',$category);
    
    }
}
