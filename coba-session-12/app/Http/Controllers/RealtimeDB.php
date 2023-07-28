<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase\Factory;

class RealtimeDB extends Controller
{
    //
    public function index()
    {
        $serviceAccount = __DIR__ . './serviceAccount.json';

        $factory = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->withDatabaseUri('https://your-project.firebaseio.com');

        $database = $factory->createDatabase();

        @dd($database->getReference( v , ));
        // Example: Writing data to the database
        // $database->getReference('users')->push([
        //     'name' => 'John Doe',
        //     'email' => 'johndoe@example.com'
        // ]);

        // $usersRef = $database->getReference('users');
        // $users = $usersRef->getValue();

        // foreach ($users as $userId => $user) {
        //     echo "User ID: $userId\n";
        //     echo "Name: $user[name]\n";
        //     echo "Email: $user[email]\n\n";
        // }
    }
}
