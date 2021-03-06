<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>老师主页</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/teacher/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/teacher/css/index.css">
    <script src="/FS/Public/front/teacher/js/jquery.js"></script>
    <script src="/FS/Public/front/teacher/js/bootstrap.min.js"></script>
</head>

<body>
<!--导航-->
<div class="row clearfix" id="header">
    <div class="col-md-4 column" id="logo">
        <img alt="35x35" src="/FS/Public/front/teacher/images/logo.png" />
    </div>
    <div class="col-md-4 column">
    </div>
    <div class="col-md-4 column">
        <ul id="nav">
            <li><a href="guestbook.html"><img src="/FS/Public/front/teacher/images/email.png" /></a></li>
            <li id="new"><a href="guestbook.html">消息</a></li>
            <li id="circle"><img src="/FS/Public/front/teacher/images/circle.png" class="img-circle" /></li>
            <li id="drop">
            <li class="dropdown" >
                <a href="#" id="navbarDrop1" class="dropdown-toggle" data-toggle="dropdown"><span id="navbarDrop2">1</span><span class="caret" style=""></span></a>
                <ul class="dropdown-menu" id="navbarDrop3">
                    <li><a href="personCenter.html" >个人资料</a></li>
                    <li><a href="update.html" >修改资料</a></li>
                    <li><a href="#" >退出</a></li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
</div>

<!--内容-->
 <div class="row clearfix" id="content">
    <!--内容导航-->
    <div class="col-md-3 column" id="content_left1">
        <div class="row clearfix" id="left1">
            <div class="col-md-6 column" id="pic">
                <img src="/FS/Public/front/teacher/images/1-2.png" class="img-rounded" />
            </div>
            <div class="col-md-6 column" id="left2">
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <p id="tec"><a href="personCenter.html">孙老师</a></p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                    <span class="sr-only">50%</span>
                                </div>
                            </div>
                            <p id="lvo">LVO</p>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <a href="#"><p id="flower">鲜花:0</p></a>
                    </div>
                </div>
                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <input type="button" id="zheng" value="证">
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-md-12 column" id="list">
                <div class="panel-group" id="panel-493390">
                    <ul class="list-group">
                        <li>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="index.html">首页</a></a>
                                </div>
                            </div>
                        </li>
                        <li >
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title collapsed" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-749900">英语作业<span class="glyphicon glyphicon-chevron-down" id="test"></span></a>
                                </div>
                                <div id="panel-element-749900" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <ul class="homeworkList_e">
                                            <li class="list-group-item"><a href="assignment.html">布置作业</a></li>
                                            <li class="list-group-item"><a href="workpaper.html">作业情况</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="myClass.html">我的班级</a></a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="resource.html">资源箱</a></a>
                                </div>
                            </div></li><li>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <a class="panel-title" data-toggle="collapse" data-parent="#panel-493390" href="#panel-element-682792"><a href="guestbook.html">留言板</a></a>
                            </div>
                        </div>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <!--今日任务-->
        <div class="col-md-6 column" id="right1">
            <h4 id="task">今日任务</h4>
            <div class="row clearfix">
                <div class="col-md-12 column" id="task1">
                    <h4 class="task_t">
                       任务一 &nbsp;&nbsp;给学生布置作业
                    </h4>
                    <div class="col-md-4 column">
                        <ul id="task1_n">
                            <li><p>李小明</p></li>
                        </ul>
                    </div>
                    <div class="col-md-4 column">
                        <ul class="task1_s">
                            <li><p id="task1_s">数学1</p></li>
                        </ul>
                    </div>
                    <div class="col-md-4 column">
                      <a href="/FS/index.php/Home/Teacher/workpaper.html"><input type="button" id="task1_b" value="查看" ></a>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12 column" id="task2">
                    <h4 class="task_t">
                       任务二 &nbsp;&nbsp;让小朋友来到这里吧
                    </h4>
                    <img id="task2_p" alt="160x100" src="/FS/Public/front/teacher/images/1-4.png" />
                </div>
            </div>
            <div class="row clearfix">
                <h4 id="task_t3">我的动态</h4>
                <div class="col-md-12 column" id="dynamic">
                    <a href="guestbook.html">
                    <div class="bs-example bs-example-popover">
                    <div class="popover right">
                        <div class="arrow"></div>
                        <div class="popover-content">
                            <p>快告诉你的学生你的手机号</p>
                            <p>吧，让他们来加入班级中</p>
                        </div>
                    </div>
                    </div>
                    <img id="task3_p" alt="70x70" src="/FS/Public/front/teacher/images/1-3.png" />
                    </a>
                </div>
            </div>
            <div class="row clearfix">
                <h4 id="task4_t">认证</h4>
                <div class="col-md-12 column" id="task4">
                    <h4 class="task4_t">请上传你的相关证件经工作人员审核即可通过认证</h4>
                    <a href="/FS/index.php/Home/Teacher/upload.html"><button type="button" class="btn btn-lg" id="task4_b">点击上传</button></a>
                    <ol>
                        <li id="te">教师证</li>
                        <li id="zy">职业证</li>
                    </ol>
                </div>
            </div>
        </div>
        <!--完成作业-->
        <div class="col-md-3 column" id="homework">
            <p id="acc_h">完成作业</p>
            <div class="row clearfix">
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
                <div class="col-md-6 column">
                    <a href="#"><img alt="45x45" src="/FS/Public/front/teacher/images/1-1.png" /></a>
                    <a href="#"><p>名字</p></a>
                </div>
            </div>
        </div>
</div>

<!--尾部-->
<div class="row clearfix" id="footer">
    <div class="col-md-12 column" id="footer1">
        <p>Copyright @ 2011-2016 futurestar Corporation. All Rights Reserved.</p>
    </div>
    <div class="col-md-12 column">
        <div class="col-md-3 column">
        </div>
        <div class="col-md-5 column">
            <ul class="footer_nav">
                <li id="footer2">后台管理</li>
                <li>关于我们</li>
                <li>各界声音</li>
                <li>加入我们</li>
            </ul>
        </div>
        <div class="col-md-4 column">
        </div>
    </div>
</div>
</body>
</html>