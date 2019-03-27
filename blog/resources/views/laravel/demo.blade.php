<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>
        {{--标题内容区域--}}
        @yield('title')
    </title>
    <link rel="stylesheet" href="../../../public/js/bootstrap.js">
    <link rel="stylesheet" href="../../../public/js/jquery.min.js">
    <style>
        a{
            text-decoration: none;
        }
        .heads{
            width: 100%;
            height: 77px;
            background-color: #41a5e1;
        }
        #a1{
            font-size: 25px;
            color: white;
            line-height: 300%;
            margin-left: 10px;
            width: 10%;
            float: left;
        }
        #a2{
            float: left;
            margin-top: 28px;
        }
        #a3{
            float: left;
            color: #f90;
            font-size: 13px;
            margin-top: 30px;
            margin-left: 20px;
        }
        #a4{
            float: right;
            color: white;
            font-size: 13px;
            margin-top: 30px;
            margin-right: 10px;
        }
        #a4 a{
            color: white;
        }
        #a44{
            margin-left: 5px;
        }
        .nav{
            width: 100%;
            height: 47px;
            background-color: #f5f5f5;
        }
        .nav a{
            color: black;
        }
        .sidebar{
            width: 15%;
            height: 600px;
            float: left;
            background-color: #656565;
            color: white;
            font-size: 12px;
        }
        .sidebar a{
            color: white;
        }
        .titles{
            width: 83%;
            height: 47px;
            float: right;
            background-color: #fbfbfb;
            margin-top: 10px;
            padding: 5px;
            border: 1px solid #e9e9e9;
        }
        #b1{
            font-size: 13px;
            margin-left: 50px;
            line-height: 45px;
            float: left;
            color: #16181b;
        }
        #b2{
            margin-left: 50px;
            margin-top: 5px;
        }
        li{
            list-style: none;
            margin-top: 3px;
            margin-left: 12px;
        }
    </style>

</head>
<body>

<div class="heads">
    <div id="a1"><strong>ECSHOP</strong></div>
    <div id="a2">
        <img src="../../../public/images/noauthorize.png" alt="">
    </div>
    <a id="a3" href="">[未授权用户]</a>
    <div id="a4">
        <span id="a44"><a href="">开店向导</a></span>
        <span id="a44">|</span>
        <span id="a44"><a href="">记事本</a></span>
        <span id="a44">|</span>
        <span id="a44"><a href="">刷新</a></span>
        <span id="a44">|</span>
        <span id="a44"><a href="">个人设置</a></span>
        <span id="a44">|</span>
        <span id="a44"><a href="">管理员留言</a></span>
        <span id="a44">|</span>
        <span id="a44"><a href="">查看网店</a></span>
        <span id="a44">|</span>
        <span id="a44"><a href="">帮助</a></span>
        <span id="a44">|</span>
        <span id="a44"><a href="">关于ECSHOP</a></span>
    </div>
</div>
<div class="nav">
    <div id="b1"><strong><a href="">起始页</a></strong></div>
    <div id="b1"><strong><a href="">设置导航栏</a></strong></div>
    <div id="b1"><strong><a href="">商品列表</a></strong></div>
    <div id="b1"><strong><a href="">订单列表</a></strong></div>
    <div id="b1"><strong><a href="">用户评论</a></strong></div>
    <div id="b1"><strong><a href="">会员列表</a></strong></div>
    <div id="b1"><strong><a href="">商店设置</a></strong></div>
    <div id="b1"><strong><a href="">移动版</a></strong></div>
    <div id="b1"><strong><a href="">服务市场</a></strong></div>
    <img id="b2" src="../../../public/images/btn-bind.gif" alt="">
</div>
<div class="sidebar">
    <dl style="margin-left: 20px"><strong><a href="">菜单</a></strong></dl>
    <div class="mune_list">
        <ul>
            <strong><a href="">云服务中心</a></strong>
            <li><a href="">授权绑定</a></li>
            <li><a href="">云起物流</a></li>
            <li><a href="">服务市场</a></li>
            <li><a href="">短信平台</a></li>
        </ul>
        <ul>
            <strong><a href="">商品管理</a></strong>
            <li><a href="goods_list">商品列表</a></li>
            <li><a href="goods_add">商品添加</a></li>
            <li><a href="">商品分类</a></li>
            <li><a href="">商品品牌</a></li>
            <li><a href="">商品类型</a></li>
            <li><a href="">用户评论</a></li>
            <li><a href="">商品回收</a></li>
        </ul>
        <ul>
            <strong><a href="">订单管理</a></strong>
            <li><a href="">订单列表</a></li>
            <li><a href="">订单查询</a></li>
            <li><a href="">合并订单</a></li>
            <li><a href="">添加订单</a></li>
        </ul>
    </div>
</div>
<div class="titles">
    <div><strong><a href="">ECSHOP 管理中心</a></strong></div>
</div>
<!--占位符-->
@yield('content')

</body>
</html>