<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20
 * Time: 10:43
 */

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>我的评价</title>
    <!--WEUI CSS-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_799435_3akbys0kmjo.css">
    <!--JS-->
    <script type="text/javascript" src="js/responsive.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <!--WEUI JS-->
    <script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
    <style>
        *{
            box-sizing: border-box;
        }
        body{
            background-color: #f3f3f3;
        }
        body img{
            display: block;
            width: 100%;
        }
        .bg{
            min-height: 43rem;
            width: 26.6666666rem;
            margin: auto;
        }
        .goBack{
            height:3rem;
            text-align: center;
            line-height: 3rem;
            background-color: #568ffe;
            position: fixed;
            bottom: 0;
            display: block;
            width: 100%;
            color: white;
            font-size: 1.1rem;
        }
        .container .item{
            width: 92%;
            background-color: white;
            margin: 0 auto;
            padding-bottom: 1.5rem;
        }
        .container .item-next{
            margin: 1rem auto 0;
            display: flex;
            justify-content: space-between;
            height:6rem;
            padding:0 1rem;
        }
        .item-second{
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 1rem;
            color: #8e8e8e;
            font-size: 1rem;
        }
        .container .item-next div:nth-child(1){
            width: 18%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container .item-next div:nth-child(1) img{
            display: block;
            height: 4rem;
            width: 4rem;
            border-radius: 2rem;
        }
        .container .item-next div:nth-child(2){
            width: 36%;
            height: 100%;
            font-size: 1rem;
            color: #4a4a4a;
            display: flex;
            align-items: center;
            justify-content: flex-start;
            text-indent: 0.4rem;
            padding-left: 0.5rem;
        }
        .container .item-next div:nth-child(3){
            width: 56%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: flex-end;
            padding-right: 0.4rem;
        }
        .container .item-next div:nth-child(3) input{
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            width: 100%;
            height: 100%;
            text-align: right;
            font-size: 1.1rem;
            border: none;
        }
        .star-normal{
            color: #c7c7c7;
        }
        .star-active{
            color:#f4c81d;
        }
        .star_container i{
            font-size: 1.5rem;
        }
        .star_container span{
            display: block;
        }
        .selectProblem{
            width: 100%;
            height: 4rem;
            background-color: white;
            padding-top: 0.5rem;
        }
        .selectProblem-detail textarea{
            display: block;
            text-indent:1rem;
            outline: none;
            color: #4a4a4a;
            border: 0;
            font-size:1.1rem;
            height: 3rem;
            line-height:3rem;
            width:100%;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-progress-appearance: none;
            appearance: none;
            background-color: transparent;
        }
        .selectProblem-detail textarea{
            height: 4rem;
            line-height: 1.5rem;
            text-indent: 0;
            font-size:1.1rem;
            padding:0 1rem;
            overflow: scroll;
            margin-left: -0.15rem;
        }
    </style>
</head>
<body class="bg">
<div class="container">
    <div class="item">
        <div class="item-next">
            <div><img src="images/head.png" alt=""></div>
            <div>科比</div>
            <div class="star_container" style="display:flex;justify-content:space-around">
                <span><i class="iconfont icon-xing11 star-normal" data-code="0"></i></span>
                <span><i class="iconfont icon-xing11 star-normal" data-code="1"></i></span>
                <span><i class="iconfont icon-xing11 star-normal" data-code="2"></i></span>
                <span><i class="iconfont icon-xing11 star-normal" data-code="3"></i></span>
                <span><i class="iconfont icon-xing11 star-normal" data-code="4"></i></span>
            </div>
        </div>
        <div class="item-second">
            <div class="item-second-cont">门锁维修</div>
            <div class="item-second-time">2018-08-13 14：28</div>
        </div>
        <div class="selectProblem">
            <div class="selectProblem-detail">
                <textarea name="problem" readonly>问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述</textarea>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="item-next">
            <div><img src="images/head.png" alt=""></div>
            <div>科比</div>
            <div class="star_container" style="display:flex;justify-content:space-around">
                <span><i class="iconfont icon-xing11 star-normal" data-code="0"></i></span>
                <span><i class="iconfont icon-xing11 star-normal" data-code="1"></i></span>
                <span><i class="iconfont icon-xing11 star-normal" data-code="2"></i></span>
                <span><i class="iconfont icon-xing11 star-normal" data-code="3"></i></span>
                <span><i class="iconfont icon-xing11 star-normal" data-code="4"></i></span>
            </div>
        </div>
        <div class="item-second">
            <div class="item-second-cont">门锁维修</div>
            <div class="item-second-time">2018-08-13 14：28</div>
        </div>
        <div class="selectProblem">
            <div class="selectProblem-detail">
                <textarea name="problem" readonly>问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述</textarea>
            </div>
        </div>
    </div>

</div>
<footer>
    <a href="javascript:window.history.go(-1);" class="goBack">返回</a>
</footer>
</body>
<script>
    $(function(){
        var h = document.documentElement.clientHeight || document.body.clientHeight;
        $(".bg").css("min-height", h);
        var containH=$(window).height()-$(".goBack").height()-$(".tab_bar").height();
        $(".container").height(containH);

        //        评价等级 “3”四星级
        var test=3;
        console.log(test);
        $(".star_container i").removeClass('star-active');
        judgeStar=test;
        for(var a=0;a<5;a++){
            if(a<=test){
                console.log(a);
                $(".star_container i[data-code="+a+"]").addClass('star-active');
            }
        }
    });
</script>
</html>