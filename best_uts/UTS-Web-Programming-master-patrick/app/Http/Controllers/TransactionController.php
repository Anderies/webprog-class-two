<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use App\Models\User;

class TransactionController extends Controller
{
    public function transactions($id) {
        $transaction = Transaction::where('user_id', $id)->get();
        $user = User::find($id);

        $hour = date('G');
        if($hour >= 5 && $hour <= 11) {
            $greet = 'Good Morning';
        }
        else if($hour >= 12 && $hour <= 17) {
            $greet = 'Good Afternoon';
        }
        else {
            $greet = 'Good Evening';
        }

        return view('/page/transactionPage', [
            'title' => "Transaction",
            'transactions' => $transaction,
            'greet' => $greet,
            'users' => $user
        ]);
    }

    public function buyCoffee(Request $request) {
        Transaction::insert([
            'user_id' => $request->user_id,
            'coffee_id' => $request->coffee_id
        ]);

        return redirect()->back();
    }
}
