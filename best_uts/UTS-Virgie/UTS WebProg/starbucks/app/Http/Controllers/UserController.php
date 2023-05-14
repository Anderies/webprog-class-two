<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request){
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
        $percentage_star = 0;
        $circle_fill_count = 0;
        // $user->star_number = 100;
        if($user->star_number <= 25){
            $percentage_star = $user->star_number / 25 * 20;
            if($user->star_number == 25) $circle_fill_count = 1;
        }else if($user->star_number <= 50){
            $percentage_star = $user->star_number / 50 * 40;
            $circle_fill_count = 1;
            if($user->star_number == 50) $circle_fill_count = 2;
        }else if($user->star_number <= 100){
            $percentage_star = $user->star_number / 100 * 60;
            $circle_fill_count = 2;
            if($user->star_number == 100) $circle_fill_count = 3;
        }else{
            $percentage_star = $user->star_number / 200 * 80;
            $circle_fill_count = 3;
            if($user->star_number >= 200) $circle_fill_count = 4;
        }
        $status_page = 1;
        return view('home')->with('user', $user)->with('status',$status_page)->with('day', $day)->with('percentage', $percentage_star)->with('count', $circle_fill_count);
    }

    public function index1(){
        $user = User::with('membership')->find(1);
        $day = 'Morning';
        $now = Carbon::now()->addHour(7);
        if ($now->between(Carbon::parse('6:00:00'), Carbon::parse('12:00:00'))) {
            $day = 'Morning';
        }else if($now->between(Carbon::parse('12:00:00'), Carbon::parse('18:00:00'))){
            $day = 'Afternoon';
        }else{
            $day ='Evening';
        }
        $percentage_star = 0;
        $circle_fill_count = 0;
        // $user->star_number = 100;
        if($user->star_number <= 25){
            $percentage_star = $user->star_number / 25 * 20;
            if($user->star_number == 25) $circle_fill_count = 1;
        }else if($user->star_number <= 50){
            $percentage_star = $user->star_number / 50 * 40;
            $circle_fill_count = 1;
            if($user->star_number == 50) $circle_fill_count = 2;
        }else if($user->star_number <= 100){
            $percentage_star = $user->star_number / 100 * 60;
            $circle_fill_count = 2;
            if($user->star_number == 100) $circle_fill_count = 3;
        }else{
            $percentage_star = $user->star_number / 200 * 80;
            $circle_fill_count = 3;
            if($user->star_number >= 200) $circle_fill_count = 4;
        }
        $status_page = 1;
        return view('home')->with('user', $user)->with('status',$status_page)->with('day', $day)->with('percentage', $percentage_star)->with('count', $circle_fill_count);
    }
}
