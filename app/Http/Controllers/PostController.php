<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class PostController extends Controller{

    public function salvarPost(Request $request) {
        
        return view('welcome');
    }
}