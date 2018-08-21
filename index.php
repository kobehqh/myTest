<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/17
 * Time: 11:55
 */

?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>报修系统</title>
    <!--WEUI CSS-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" href="//at.alicdn.com/t/font_509679_4ipd8rb5qku.css">
    <link rel="stylesheet" href="css/index.css?x=6">
    <!--JS-->
    <script type="text/javascript" src="js/responsive.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <!--WEUI JS-->
    <script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
    <style>
        .weui-mask, .weui-popup-container, .weui-popup-overlay{
            z-index: 9999;
        }
        .weui-dialog, .weui-toast{
            z-index: 10000;
        }
    </style>
</head>
<body class="bg">
<header>
    <div>
        <img src="images/banner.png" alt="" width="100%">
    </div>
</header>
<div class="container">
    <div class="item">
        <div class="selectUsername">
            <div class="selectUsername-detail">
                <input type="text" name="username" id="username" placeholder="请输入您的详细信息" onfocus="this.blur()" readonly >
            </div>
            <div class="pullDown">
                <img src="images/select-car.png" alt="" style="display: block;height:0.8rem">
            </div>
        </div>
    </div>
    <div class="item">
        <div class="selectCar">
            <div class="selectCar-detail">
                <select name="car">
                    <option disabled selected value="">请选择报修类型</option>
                    <option value="0">门锁</option>
                    <option value="1">地漏</option>
                </select>
            </div>
            <div class="pullDown">
                <img src="images/select-car.png" alt="" style="display: block;height:0.8rem">
            </div>
        </div>
    </div>
    <div class="item">
        <div class="selectTime">
            <div class="selectTime-detail">
                <input type="text" name="backTime" id="my-input" data-toggle='date' placeholder="请选择维修时间">
            </div>
            <div class="pullDown">
                <img src="images/iocn-time.png" alt="" style="display: block;height:1.5rem">
            </div>
        </div>
    </div>
    <div class="item">
        <div class="selectProblem">
            <div class="selectProblem-detail">
                <textarea  placeholder="请仔细描述您的问题" name="problem"></textarea>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="uploadImg">
            <div class="upload-text">
                <span>上传图片</span>
            </div>
            <div class="upload">
                <div class="icon">
                    <img src="images/upload.png" alt="" style="height:100%;width: 100%;border-radius2.5rem;margin: 0 auto;display: block">
                </div>
                <input type="file" id="photo" name="file" style="width:100%;height:100%;opacity: 0;" />
                <div class="saveImg">
                    <img id="pic" style="height:100%;width: 100%;brorde-radius2.5rem;margin: 0 auto;display: block" >
                </div>
            </div>
        </div>
    </div>
    <div class="item">
        <div class="bottom-tab">
            <a href="process.php">
                <div class="bottom-left">报修记录</div>
            </a>
            <div class="bottom-center"></div>
            <a href="myEvaluate.php">
                <div class="bottom-right">我的评价</div>
            </a>
        </div>
    </div>
</div>
<footer>
    <a href="javascript:;" class="goBack">提交</a>
<!--    <div class="bottom-btn">-->
<!--        <div class="bottom-btn-return">返回</div>-->
<!--        <div class="bottom-btn-center"></div>-->
<!--        <div class="bottom-btn-submit">提交</div>-->
<!--    </div>-->
</footer>
<aside class="succeed userMsg" style="width:80%;border-radius: 10px;position: relative;">
    <div class="choose">
        <p>请输入您的详细信息</p>
        <div class="item1">
            <div class="left">
                <i class="iconfont icon-xingming"></i>
            </div>
            <div class="middle">
                <div>姓</div>
                <div>名：</div>

            </div>
            <div class="right">
                <input type="text"  placeholder="请输入报修人姓名" name="name"/>
            </div>
        </div>
        <div class="item1">
            <div class="left">
                <i class="iconfont icon-shouji"></i>
            </div>
            <div class="middle">
                <div>手</div>
                <div>机：</div>
            </div>
            <div class="right">
                <input type="tel"  placeholder="请输入手机号" name="phone"/>
            </div>
        </div>

        <div class="item1">
            <div class="left">
                <i class="iconfont icon-shenqing-"></i>
            </div>
            <div class="middle">
                <div>地</div>
                <div>址：</div>
            </div>
            <div class="right">
                <input type="text"  placeholder="请输入详细地址" name="address"/>
            </div>
        </div>

        <div class="sure">
            <input type="submit" value="确定" class="closePopup">
        </div>
    </div>
</aside>
</body>
<script src="js/jquery.bpopup.js"></script>
<script>
    $(function() {
        $('#photo').change(function (e) {
            var files = this.files;
            console.log(files);
            var reader = new FileReader();
            reader.readAsDataURL(files[0]);
            reader.onloadend = function (e) {
                var type = files.type;
                var mb = (e.total / 1024) / 1024;
                if (type == "image/jpg" || type == "image/png" || type == "image/jpeg" || mb <= 5) {

                    $('.upload').css('border', 'none');
                    $('.saveImg').css('display', 'block');
                    $('.icon').css('display', 'none');
                    $('#pic').attr('src', e.target.result);
                } else {
                    $.alert({
                        title: '提示',
                        text: '请选择正确的图片格式（jpg、jpeg、png）及图片大小',
                        onOK: function () {
                        }
                    });
                }

            }
        });
    });
</script>
<script>
    $(function(){
        var h = document.documentElement.clientHeight || document.body.clientHeight;
        var reg1 = /^[\u0391-\uFFE5A-Za-z]+$/;//姓名  只能中文或、英文正则表达式
        var reg2 = /^[1][3,4,5,7,8][0-9]{9}$/; //11位手机号前三位判断格式
        $(".bg").css("min-height", h);
        $("#my-input").calendar();

        $("#username").click(function(){
            $('.succeed').bPopup({
                opacity: 0.8,
                modalClose:false,
                positionStyle: 'fixed'
            });
        });

        $(".sure").click(function(){
            var orderName= $("input[name='name']").val();
            var orderPhone=$("input[name='phone']").val();
            var orderDate =$("input[name = 'address']").val();

            if(orderName==""){
                $.alert("姓名不得为空哦~");
            }else{
                if(reg1.test(orderName)){
                    if(orderPhone==""){
                        $.alert("手机号不得为空哦~");

                    }else{
                        if(reg2.test(orderPhone)){
                            if (orderDate == ""){
                                $.alert("请输入地址哦~");
                            }else {
                                $('.succeed').bPopup().close();
                                $("input[name='username']").val($("input[name='name']").val() + "  " +  $("input[name='phone']").val());
                            }
                        }else{
                            $.alert("请输入正确的手机号哦~");

                        }
                    }
                }else{
                    $.alert("姓名只能是中英文哦~");

                }
            }
        });

    });

</script>
</html>