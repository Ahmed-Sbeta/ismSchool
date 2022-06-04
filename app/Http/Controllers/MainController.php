<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\applicants;
use App\registration;
use App\news;

class MainController extends Controller
{
    public function index(){
      $registration = registration::first();
      return view('index',compact('registration'));
    }

    public function about(){
      $registration = registration::first();
      return view('about',compact('registration'));
    }

    public function blog(){
      $news = news::latest()->paginate(9);
      $registration = registration::first();
      return view('blog',compact('registration','news'));
    }

    public function contact(){
      $registration = registration::first();
      return view('contact',compact('registration'));
    }

    public function admissions(){
      $registration = registration::first();
      return view('admissions',compact('registration'));
    }

    public function registration(){
      return view('Registration');
    }

    public function login(){
      return view('adminLogin.index');
    }

    public function Apply(){
      $applicant = new applicants;
      $applicant->name = request('name');
      $applicant->phoneNumber = request('phoneNumber');
      $applicant->dob = request('dob');
      $applicant->file = request()->file('file') ? request()->file('file')->store('public') : null;
      $applicant->save();
      return redirect('/Registration')->with('success','Registered successfully , Thank you !');

    }

    public function checkRegistration(){
      $registration = registration::first();
      $registration->status = request('registration');
      $registration->save();
      return redirect()->back()->with('success','registration status changed');

    }
}
