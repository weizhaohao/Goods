@extends('laravel.demo')
@section('content')
<center>
    <table border="1" cellpadding="10" cellspacing="0" width="1565px">
        <tr>
            <td>商品类型名称</td>
            <td>属性分组</td>
            <td>属性数</td>
            <td>属性状态</td>
            <td>操作</td>
        </tr>
        @foreach($res as $key => $val)
            <tr>
                <td>{{$val->cat_id}}</td>
                <td>{{$val->cat_name}}</td>
                <td>{{$val->enabled}}</td>
                <td>{{$val->attr_group}}</td>
                <td>
                    <a href="">属性列表|</a>
                    <a href="">编辑|</a>
                    <a href="goods_delete?id=<?php echo $val->cat_id?>">移除</a>
                </td>
            </tr>
        @endforeach
    </table>
</center>
@endsection