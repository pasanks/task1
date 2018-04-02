<?php

namespace App\Http\Controllers;
use App\Book;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DatatablesController extends Controller
{
    public function datatable()
    {
        return view('datatables.index');
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function getPosts()
    {

        $book = DB::table('books')->select('*');
        return Datatables::of($book)
            ->make(true);
    }
}
