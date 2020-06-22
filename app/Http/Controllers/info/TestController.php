<?php

namespace App\Http\Controllers\info;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    public function insertData(){
    	$data=["name"=>"oo","age"=>40];
    	$bol = DB::table("info")->insert($data);
    	var_dump($bol);
    }

    public function updateData(){
    	$data=[
    		"name"=>"二狗子",
    	];
    	$where=[
    		"id"=>6,
    	];
    	$bol = DB::table("info")->where($where)->update($data);
    	var_dump($bol);
    }

    public function delData(){
    	$where=["id"=>7];
    	$bol = DB::table("info")->where($where)->delete();
    	var_dump($bol);
    }
    public function sel(){
    	$where=["id"=>4];
    	$arr = DB::table("info")->select()->where($where)->first();
    	echo $arr->id;
    }
}
