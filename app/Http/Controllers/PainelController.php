<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class PainelController extends Controller
{

	  public function __construct() {
       $this->middleware('auth');
  }
   public function index(){

    	return view('admin.painel.index');
    }

   
}
	