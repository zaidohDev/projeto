<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

class MensagensController extends Controller
{
       public function __construct() {
       $this->middleware('auth');
  }

     public function index(){

    	return view('admin.mensagens.index');
    }

}
