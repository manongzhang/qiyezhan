<?php
namespace App\Http\Controllers\Index;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;

class IndexController extends Controller
{
    public function index(Request $request){
    	return view("index/index");
    }
    public function show(){
      
    }
}
