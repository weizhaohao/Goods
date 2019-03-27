<?php

namespace App\Http\Controllers;

use DB;

use Illuminate\Http\Request;

class GoodsController extends Controller
{
    //加载模板
    public function demo(){
        return view('goods_type');
    }
    public function goods_show(){
        $res = DB::table('ecs_goods_type') -> get();
        //print_r($res);
        return view('goods_type',['res'=>$res]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View|\think\response\View
     */
    public function goods_delete(){
        $id = $_GET['id'];
        //print_r($id);die;
        $res = DB::table('ecs_goods_type') -> where('id',$id)->delete();
        if ($res){
            return view('goods_type');
        }

    }
}
