<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use DB;

class PageController extends Controller
{


        public function index(){

            $results = DB::select('select * from movies');
           return view('movies' , ['movies'=> $results]);
    }
}
