<?php


namespace App\Http\Controllers;

class MyController extends Controller
{
    function __construct()
    {
    }

    function index(){

        $getPost= file_get_contents('https://jsonplaceholder.typicode.com/posts');
        $getPostDetail= json_decode($getPost);

        return view('welcome',['postDataSet'=>$getPostDetail]);

    }

    function user(){
        $getUser= file_get_contents('https://jsonplaceholder.typicode.com/users');
        $getUserDetail= json_decode($getUser);

        return view('user',['userList'=>$getUserDetail]);
    }



}