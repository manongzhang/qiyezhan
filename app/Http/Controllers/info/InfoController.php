<?php

namespace App\Http\Controllers\info;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\InfoModel;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\DB;
class InfoController extends Controller
{
    //注册
    public function register(Request $request){

      return view("info/register");
    }

    public function doregister(Request $request){
        $arrSuccess=[];
        $arr = $request->all();
        $name = $arr['username'];
        $pwd = md5($arr['userpwd']);
        $data=[
          "username"=>$name,
          "password"=>$pwd,
        ];

        $obj = DB::table("user")->where(['username'=>$name])->first();
        if($obj){
          $arrSuccess['success']=false;
          $arrSuccess['code']=101001;
          $arrSuccess['msg']="数据有重复";
          echo json_encode($arrSuccess);
          exit;
        }
        $bol= DB::table("user")->insert($data);//true
        if($bol){
          $arrSuccess['success']=true;
          $arrSuccess['code']=0;
          $arrSuccess['url']="/addcard";
          $arrSuccess['msg']="添加成功";
        }else{
          $arrSuccess['success']=false;
          $arrSuccess['code']=100000;
          $arrSuccess['msg']="服务器错误";
          $arrSuccess['url']="";
        }
        //强制登录===session===
        session(["username"=>$name]);
        echo json_encode($arrSuccess);
    }

    public function addcard(Request $request){
      return view("info/addcard");
    }

    public function getuserid(Request $request){
      $name = session("username");
      $arrinfo = DB::table("user")->select("id")->where(["username"=>$name])->first();
      $id = $arrinfo->id;
      echo $id;

    }

    public function douserinfo(Request $request){
      $return=[];
      $all = $request->all();
      $data['u_id']= $all['uid'];
      $data['address'] = $all['address'];
      $data['age'] = $all['age'];
      $data['desc'] = $all['desc'];
      $bol =DB::table("user_info")->insert($data);
      if($bol){
        $return['success'] = true;
        $return['code']=0;
        $return['msg']="";
        $return['url']="/goodsadd";
      }else{
        $return['success'] = false;
        $return['code']=0;
        $return['msg']="入库失败";
        $return['url']="/douserinfo";
      }
      echo json_encode($return);
    }


    public function goodsadd(Request $request){
      return view("info/goodsinfo");
    }

    public function addgoods(Request $request){
      $arr = $request->all();
      $goods_name = $arr['goods_name'];
      $goods_price = $arr['goods_price'];
      $goods_desc = $arr['goods_desc'];
      $data=[
        "goods_name"=>$goods_name,
        "goods_price"=> $goods_price,
        "goods_desc"=> $goods_desc,
      ];
      $bol =DB::table("goods")->insert($data);
      if($bol){
        $return['success'] = true;
        $return['code']=0;
        $return['msg']="";
        $return['url']="/goodslist";
      }else{
        $return['success'] = false;
        $return['code']=0;
        $return['msg']="添加商品失败";
        $return['url']="/addgoods";
      }
      echo json_encode($return);
    }

    public function showgoods(){

      return view("info/showgoods");
    }

    public function goodslist(){
      $arr =[];
      $arrinfo = DB::table("goods")->select()->get()->toArray();
      foreach($arrinfo as $key => $val){
        $tmp=[];
        $tmp['id']=$val->id;
        $tmp['goods_name']=$val->goods_name;
        $tmp['goods_price']=$val->goods_price;
        $tmp['goods_desc']=$val->goods_desc;
        array_push($arr,$tmp);
      }
      echo json_encode($arr);
    }

}
