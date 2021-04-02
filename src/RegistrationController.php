<?php

namespace Devhiren\Registration;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RegistrationController extends Controller
{
    //

    public function index(){
        //echo "Login Works.";
        return view('registration::registration');
    }

    public function registrationSubmit(Request $request){
        dd($request->all());
        //echo "Login submit Works.";
    }
}
