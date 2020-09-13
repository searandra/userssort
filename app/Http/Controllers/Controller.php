<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Request;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


    public function index(){
    	$users = \App\User::orderBy('order')->orderBy('updated_at', 'desc')->get();
    	return view('welcome', compact('users'));
    }

    public function updateuserorder(Request $request){
    	$index = $_POST['index'];
    	$user_id = $_POST['user_id'];

    	$user = \App\User::where('id', $user_id)->first();
    	if(!empty($user)){
    		$user->order = ++$index;
    		$user->save();
    	}

    	$otherUsers = \App\User::where('order', '>=', $index)->where('id', '!=', $user_id)->get();
    	foreach ($otherUsers as $user) {
    		$user->order = ++$index ;
    		$user->save();
    	}

    	return response()->json(['success'=>true, 'message'=>'Order updated']);
    }

}
