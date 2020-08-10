<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class proyekController extends Controller
{
       public function create(){
   			return view('layouts.create');
   }

}
