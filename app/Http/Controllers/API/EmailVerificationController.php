<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class EmailVerificationController extends Controller
{
    public function sendVerificationEmail(Request $request){
     if($request->user()->hasVerifidEmail()){
        return[
            'message' =>'Email Already Verified',
        ];
     }

     $request->user()->sendEmailVerifiactionMessage;
    }
}
