<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\applicants;
use App\registration;
use App\news;
use App\gallery;

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
      return view('news',compact('registration','news'));
    }

    public function gallery(){
      $images = gallery::all();
      $registration = registration::first();

      return view('gallery',compact('registration','images'));
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
      $registration = registration::first();
      $first_reg = applicants::first();
      if($first_reg->seen > $registration->number){
        return redirect('/Registration')->with('success','Thank you for your interest in ISM international School ,Unfortunately we reached the maximum number of requests.');
      }else{
      $first_reg->seen = $first_reg->seen+1;
      $first_reg->save();
      $applicant = new applicants;
      $applicant->name = request('name');
      $applicant->phoneNumber = request('phoneNumber');
      $applicant->dob = request('dob');
      $applicant->file = request()->file('file') ? request()->file('file')->store('public') : null;
      $applicant->save();
      return redirect('/Registration')->with('success','Thank you for your interest in ISM international School , your details have been logged ,Please note that we will be in contact with you to organise an interview and placement assessment if we have availability. Registering does not guarantee placement with ISM international School.');
      }
    }

    public function checkRegistration(){
      $number = request('number');
      $registration = registration::first();
      $registration->status = request('registration');
      $registration->number = $registration->number+$number;
      $registration->save();
      return redirect()->back()->with('success','registration status changed');

    }
}
