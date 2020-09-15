<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;


    public function index(){
    	$users = \App\User::orderBy('coordinate_x')->orderBy('coordinate_y')->get();
    	return view('welcome', compact('users'));
    }

    public function updateuserorder(Request $request){
    	$inputs = $request->all();
    	foreach ($inputs['tile_pos'] as $key => $input) {
    		if(is_array($input)){
    			$user = \App\User::where('id', $key)->first();
    			if (!empty($user)) {
    				$user->coordinate_x = $input['top'];
    				$user->coordinate_y = $input['left'];
    				$user->save();
    			}
    		}
    	}
    	
    	return response()->json(['success'=>true, 'message'=>'Order updated']);
    }

}
