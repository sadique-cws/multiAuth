<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Doctor, Patient};

class PublicController extends Controller
{
    public function index(){
        return view("index");
    }
    public function doctorLogin(Request $req){
        if($req->isMethod("post")){

        }
        return view("doctorLogin");
        
    }

    public function patientLogin(Request $req){
        if($req->isMethod("post")){

        }
        return view("patientLogin");
    }

    public function patientSignup(Request $req){

        if($req->isMethod("post")){
            $data = $req->validate([
                'name' => 'required',
                'address' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'password' => 'required',
            ]);

            Patient::create($data);
            return redirect()->back();


        }

        return view("patientSignup");
    }
    public function doctorSignup(Request $req){
        if($req->isMethod("post")){
            $data = $req->validate([
                'name' => 'required',
                'address' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'password' => 'required',
            ]);

            
        }

        return view("doctorSignup");
    }
}