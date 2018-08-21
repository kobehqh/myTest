<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/19
 * Time: 22:20
 */

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>报修评价</title>
    <!--WEUI CSS-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_799435_3akbys0kmjo.css">
    <link rel="stylesheet" href="css/userEvaluate.css">

    <!--JS-->
    <script type="text/javascript" src="js/responsive.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <!--WEUI JS-->
    <script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
    <style>

    </style>
</head>
<body class="bg">
<div class="container">
    <div class="star">
        <div>评价星级</div>
        <div class="star_container">
            <div><i class="iconfont icon-xing11 star-normal" data-code="0"></i></div>
            <div><i class="iconfont icon-xing11 star-normal" data-code="1"></i></div>
            <div><i class="iconfont icon-xing11 star-normal" data-code="2"></i></div>
            <div><i class="iconfont icon-xing11 star-normal" data-code="3"></i></div>
            <div><i class="iconfont icon-xing11 star-normal" data-code="4"></i></div>
        </div>
    </div>
    <div class="item">
        <div class="selectProblem">
            <div class="selectProblem-detail">
                <textarea  placeholder="留下您的意见，我们下次会做的更好..." name="problem"></textarea>
            </div>
        </div>
    </div>
</div>
<footer>
    <a href="javascript:;" class="goBack">提交评价</a>
</footer>
</body>
<script>
    $(function(){
        var h = document.documentElement.clientHeight || document.body.clientHeight;
        var judgeStar="";
        $(".bg").css("min-height", h);

        $(".star_container i").click(function(){
            var test=$(this).attr("data-code");
            console.log(test);
            $(".star_container i").removeClass('star-active');
            judgeStar=test;
            for(var a=0;a<5;a++){
                if(a<=test){
                    console.log(a);
                    $(".star_container i[data-code="+a+"]").addClass('star-active');
                }
            }
        })
    });
</script>
</html>