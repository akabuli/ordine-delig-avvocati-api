<?php

namespace App\Http\Controllers;
// import User modlel
use Illuminate\Http\Request;
use App\Models\User;

abstract class Controller
{
    public function index()
    {
        $name = 'ayats';
        if (str_contains($name, 'ayat')) {
            echo 'yes';
        }
        // $undefinedVariable = 0;
        // Using undefined variable - will cause error
        $result = $undefinedVariable33 + 5;

        // Wrong type operations - string * number
        $number = 2;
        $calculation = $number * 10;

        // Accessing array key that doesn't exist
        $data = [];
        $value = $data['nonexistent_key'];

        // Potential null pointer - User::find() can return null
        $user = User::find(999);
        $userName = $user->name; // This will fail if user is null

        // Unused variable
        $unusedVariable = "I'm never used";

        // Inconsistent return - sometimes returns, sometimes doesn't
        if ($name === 'test') {
            return ['status' => 'success'];
        }
        // No return statement here
    }
}
