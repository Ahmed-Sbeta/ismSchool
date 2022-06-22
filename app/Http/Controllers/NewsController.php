<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\registration;

use Auth;


class NewsController extends Controller
{
    public function addNews(){
      $News = new news;
      $News->title = request('title');
      $News->creator = Auth::user()->name;
      $News->date = request('date');
      $News->text = request('text');
      $News->image = request()->file('image') ? request()->file('image')->store('public') : null;
      $News->save();

      return redirect()->back()->with('success','Published successfully');
    }

    public function editNews($id){
      $News = news::find($id);
      return view('dashboard.editNews',compact('News'));
    }

    public function updateNews($id){
      $News = news::find($id);
      $News->title= request('title');
      $News->date= request('date');
      $News->text = request('text');
      if (request()->file('image')) {

          $News->image = request()->file('image')->store('public');
      }
      $News->save();
      return redirect()->back()->with('success','edited successfully !');
    }

    public function deleteNews($id){
      $News = news::find($id);
      // dd($image);
      \Storage::delete($News->image);
      $News->delete();

      return redirect()->back()->with('success','Post deleted successfuly');
    }

    public function view($id){
      $news = news::find($id);
      $registration = registration::first();
      return view('news-details', compact('news','registration'));
    }
}
