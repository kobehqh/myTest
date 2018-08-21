<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/8/17
 * Time: 17:37
 */

?>
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
    <title>报修成功</title>
    <!--WEUI CSS-->
    <link rel="stylesheet" href="https://cdn.bootcss.com/weui/1.1.2/style/weui.min.css">
    <link rel="stylesheet" href="https://cdn.bootcss.com/jquery-weui/1.2.0/css/jquery-weui.min.css">
    <!--CSS-->
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <!--JS-->
    <script type="text/javascript" src="js/responsive.js"></script>
    <script type="text/javascript" src="https://cdn.bootcss.com/jquery/3.2.1/jquery.js"></script>
    <!--WEUI JS-->
    <script src="https://cdn.bootcss.com/jquery-weui/1.2.0/js/jquery-weui.min.js"></script>
    <style>
        body{
            box-sizing: border-box;
            background-color: #f3f3f3;
        }
        body img{
            display: block;
            width: 100%;
        }
        .icon{
            width: 32%;
            margin:4rem auto 0;

        }
        .tip , .success{
            text-align: center;
        }
        .tip{
            color: #888;
            font-size: 1rem;
            margin-top: 1.6rem;
            line-height: 2rem;
        }
        .success{
            margin-top: 1.2rem;
            color: #111;
            font-size: 1.3rem;
        }
        .submit-btn input{
            display: block;
            outline: none;
            -moz-appearance: none;
            -ms-progress-appearance: none;
            -webkit-appearance: none;
            appearance: none;
            border: 0;
            width: 60%;
            background-color: #568ffe;
            height:3rem;
            border-radius: 1.5rem;
            line-height: 3rem;
            margin: 6.6rem auto;
            color: white;
            font-size: 1.2rem;;
        }
    </style>
</head>
<body>
<div class="icon">
    <div>
        <img src="images/success.png" alt="图片未正常显示" width="100%">
    </div>
</div>
<div class="success">
    <p>提交成功</p>
</div>
<div class="tip">
    <p>请耐心等待，物业工作人员会尽快联系您</p>
</div>
<a href="process.php">
    <div class="submit-btn">
        <input type="button" value="查看我的报修进度">
    </div>
</a>
</body>
</html>