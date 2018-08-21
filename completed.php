<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/20
 * Time: 10:04
 */

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>已完成-详情</title>
    <!--WEUI CSS-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_799435_3akbys0kmjo.css">
    <link rel="stylesheet" href="css/declareDetail.css?x=6">
    <!--JS-->
    <script type="text/javascript" src="js/responsive.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <!--WEUI JS-->
    <script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
    <style>
        .star-normal{
            color: #c7c7c7;
        }
        .star-active{
            color:#f4c81d;
        }
        .star_container i{
            font-size: 1.8rem;
        }
        .star_container span{
            display: block;
        }
    </style>
</head>
<body class="bg">
<div class="container">
    <div class="item">
        <div><img src="images/icon-people.png" alt=""></div>
        <div>报修人</div>
        <div><input type="text"  name="declarePeople" value="科比" readonly/></div>
    </div>
    <div class="item">
        <div style="width:5%"><img src="images/icon-phone.png" alt=""></div>
        <div>手机号</div>
        <div><input type="tel"  name="declarePeople" value="18359198928" readonly/></div>
    </div>
    <div class="item">
        <div><img src="images/icon-village.png" alt=""></div>
        <div>小区</div>
        <div><input type="text"  name="declarePeople" value="奥园雅居" readonly/></div>
    </div>

    <div class="item item-next">
        <div><img src="images/icon-style.png" alt=""></div>
        <div>报修类型</div>
        <div><input type="text"  name="declarePeople" value="门锁" readonly/></div>
    </div>
    <div class="item">
        <div><img src="images/iocn-time.png" alt=""></div>
        <div>维修时间</div>
        <div><input type="text"  name="declarePeople" value="2018/08/17" readonly/></div>
    </div>
    <div class="item-content">
        <div class="item" style="border: none">
            <div><img src="images/icon-content.png" alt=""></div>
            <div>报修内容</div>
            <div style="visibility:hidden"><input type="text"  name="declarePeople" value="2018/08/17" readonly/></div>
        </div>
        <div class="selectProblem">
            <div class="selectProblem-detail">
                <textarea name="problem" readonly>问题描述问题描述问题描述问题描述问题描述问题描述问题描述问题描述</textarea>
            </div>
        </div>
    </div>
    <div class="item-content" style="margin-bottom: 2rem;">
        <div class="item" style="border: none">
            <div><img src="images/icon-pic.png" alt=""></div>
            <div>报修附件</div>
            <div style="visibility:hidden"><input type="text"  name="declarePeople" value="2018/08/17" readonly/></div>
        </div>
        <div class="picDetail">
            <div class="" style="width:30%">
                <img src="images/pic-detail.png" alt="">
            </div>
        </div>
    </div>

    <div class="item">
        <div><img src="images/icon-code.png" alt=""></div>
        <div>单号</div>
        <div><input type="text"  name="declarePeople" value="BX2649849879845" readonly/></div>
    </div>
    <div class="item">
        <div><img src="images/icon-people.png" alt=""></div>
        <div>维修人</div>
        <div><input type="text"  name="declarePeople" value="科比" readonly/></div>
    </div>
    <div class="item">
        <div style="width:5%"><img src="images/icon-phone.png" alt=""></div>
        <div>手机号</div>
        <div><input type="tel"  name="declarePeople" value="18359198928" readonly/></div>
    </div>
    <div class="item">
        <div><img src="images/iocn-time.png" alt=""></div>
        <div>维修时间</div>
        <div><input type="text"  name="declarePeople" value="2018年8月15日 14：28" readonly/></div>
    </div>
    <div class="item" style="margin-bottom: 3rem">
        <div><img src="images/icon-evaluate.png" alt=""></div>
        <div>评价</div>
        <div class="star_container" style="display:flex;justify-content:space-around">
            <span><i class="iconfont icon-xing11 star-normal" data-code="0"></i></span>
            <span><i class="iconfont icon-xing11 star-normal" data-code="1"></i></span>
            <span><i class="iconfont icon-xing11 star-normal" data-code="2"></i></span>
            <span><i class="iconfont icon-xing11 star-normal" data-code="3"></i></span>
            <span><i class="iconfont icon-xing11 star-normal" data-code="4"></i></span>
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