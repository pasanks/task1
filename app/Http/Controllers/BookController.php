<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    function insert(Request $request){
        $this->validate($request, array(
            'title'=>'required|max:255',
            'author'=>'required',


        ));

        //store in the DB
        $book = new Book();

        $book ->book_title = $request->title;
        $book ->author = $request->author;

        $book->save();

        Session::flash('success','The record successfully uploaded to the DB');//flash message

        return redirect()->back();

    }

   public function showData()
   {

       $data['data'] = DB::table('books')->get();

       if (count($data) > 0) {

           return view('pages.show', $data);
       } else {
           return view('pages.show');
       }

   }

    //
}
