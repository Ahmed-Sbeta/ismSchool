<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\applicants;
use App\news;
use App\registration;

class DashboardController extends Controller
{
    public function index(){
      $applicants_num = applicants::all()->count();
      $registration = registration::first();
      $news = news::latest()->take(6)->get();

      return view('dashboard.dashboard',compact('applicants_num','registration','news'));
    }

    public function table(){
      $applicants = applicants::where('id', '!=', 1)->latest()->get();
      return view('dashboard.tables',compact('applicants'));
    }

    public function news(){
      $news = news::all();
      return view('dashboard.news',compact('news'));
    }

    public function addNews(){
      return view('dashboard.addNews');
    }
}
