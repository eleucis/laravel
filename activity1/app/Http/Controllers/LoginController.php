<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class LoginController extends Controller
{
    //
    public function index(){
        
        $blogs = [
            [
                'title' => 'Title one',
                'body' => 'body one',
                'status' => 1
            ],
            [
                'title' => 'Title two',
                'body' => 'body two',
                'status' => 0
            ]
            ,
            [
                'title' => 'Title three',
                'body' => 'body three',
                'status' => 1
            ]
            ,
            [
                'title' => 'Title four',
                'body' => 'body four',
                'status' => 0
            ]
            ,
            [
                'title' => 'Title five',
                'body' => 'body five',
                'status' => 1
            ]
            ,
            [
                'title' => 'Title six',
                'body' => 'body six',
                'status' => 1
            ]
        ];
        return view('dashboard', compact('blogs'));

    }

    public function handleLogin(LoginRequest $request){

        //echo "Hello";
        //dd($request->all());
        
        //echo $_POST['email'];

        //echo $request->input('email');

        // $request->validate([
        //     'username' =>['required', 'email', 'ends_with:@adamson.edu.ph'],
        //     'password' =>['required']
        // ],[

        //     'username.required' => "fasfasfas",
        //     'password.required' => "gfhfghgfh",
        //     'email.ends_with' => "zxcxzcx",

        // ]);

    }
}
