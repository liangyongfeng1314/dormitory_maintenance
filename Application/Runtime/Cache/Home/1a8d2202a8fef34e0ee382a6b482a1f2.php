<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>使用手册</title>
    <link rel="icon" href="/bootstrap/Public/home/images/websiteicon_.ico">
    <link rel="stylesheet" href="/bootstrap/Public/home/css/bootstrap.4.1.min.css">
    <script src="/bootstrap/Public/Home/js/jquery-3.3.1.min.js"></script>
    <script src="/bootstrap/Public/Home/js/popper.min.js"></script>
    <script src="/bootstrap/Public/Home/js/bootstrap.4.1.min.js"></script>
    <style>
        .row div:nth-child(1),.row div:nth-child(2){
            margin-top: 30px;
        }
        .row div:nth-child(1){
            background: #FF8000;
            height: auto;
        }
        .row div:nth-child(2){
            background: rgba(0,255,0,.5);
            height: auto;
        }

    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="order-sm-6 order-md-1 col-sm-12 col-md-6 col-12">
            <h3>学生使用注意事项:</h3>
            <p>1.学生必须登录才能使用此报修系统，否则无法使用</p>
            <p>2.登录时必须正确填写学号，用户名，密码</p>
            <a href=""><img src="/bootstrap/Public/Home/images/No1.png"></a>
            <p>3.成功登录后，请点击马上报修，详细填写存在的问题</p>
            <p>4.提交问题后，可以点击问题清单查看维修的进度，切记，维修处理结果为完工方可点击申请已完成</p>
            <a href=""><img src="/bootstrap/Public/Home/images/No2.png"></a>
            <p>5.若在完工后没有手动点击完申请已完成，倒计时为0自动变换</p></br>

        </div>
        <div class="order-sm-6 order-md-1 col-sm-12 col-md-6 col-12">
            <h3>维修人员使用注意事项:</h3>
            <p>1.维修人员使用工号登录此系统</p>
            <p>2.登录时必须正确填写工号，用户名，密码</p>
            <a href=""><img src="/bootstrap/Public/Home/images/No3.png"></a>
            <p>3.成功登录后，问题清单显示要处理的报修问题</p>
            <p>4.点击问题，显示报修的详细内容，地址。</p>
            <a href=""><img src="/bootstrap/Public/Home/images/No4.png"></a>

            <p>5.点击接受，维修完之后方可点击完成的按钮</p></br>

        </div>
    </div>
</div>
</body>
</html>