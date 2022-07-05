<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\{Doctor, Patient};
use Auth;

class PublicController extends Controller
{
    public function index(){
        return view("index");
    }
    public function doctorLogin(Request $req){
        if($req->isMethod("post")){
            $auth = $req->only("email",'password');

            if(Auth::guard("doctor")->attempt($auth)){
                return redirect()->route('doctor.index');
            }
            else{
                return redirect()->back();
            }
        }
        return view("doctorLogin");
        
    }

    public function patientLogin(Request $req){
        if($req->isMethod("post")){
            $data = $req->only("email","password");
            if(Auth::guard('patient')->attempt($data)){
                return redirect()->route('patient.index');
            }
            else{
                return redirect()->back();
            }
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
            Doctor::create($data);
            return redirect()->back();

            
        }

        return view("doctorSignup");
    }


    public function doctorDashboard(){
        return view("secureForDoctor");
    }
    public function patientDashboard(){
        return view("secureForPatient");
    }

    public function doctorLogout(){
        Auth::guard("doctor")->logout();
        return redirect()->route('doctorLogin');
    }
    public function patientLogout(){
        Auth::guard("Patient")->logout();
        return redirect()->route('patientLogin');
    }
}