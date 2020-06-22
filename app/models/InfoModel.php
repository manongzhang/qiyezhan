<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class InfoModel extends Model
{
	protected $table = 'info';
	public $timestamps = false;
	//添加
    public function tt($data){
    	$id = $this->insertGetId($data);
    	var_dump($id);
    }
    //修改
    public function up($data,$id){
    	$this->where('id',$id)->update($data);
    }

    //查询
    public function sel($id){
    	$query=$this->where("id",$id)->first()->toArray();
    	return $query;
    }
    //有条件查询
    public function sel_name($age){
    	$query = $this->where("age",$age)->get()->toArray();
    }

    public function del($id){
    	$bol = $this->where("id",$id)->delete();
    	return $bol;
    }
}
