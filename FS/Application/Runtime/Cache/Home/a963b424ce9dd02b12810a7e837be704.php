<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>学习内容</title>
    <link rel="stylesheet" href="/FS/Public/front/student/css/bootstrap.min.css">
    <link href="/FS/Public/front/student/css/nav.css" rel="stylesheet" type="text/css" />
    <link href="/FS/Public/front/student/css/chinese.css" rel="stylesheet" type="text/css" />
    <link href="/FS/Public/front/student/css/studycontent.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <!--导航栏部分-->
    <div class="col-md-12 col-lg-8" id="nav">
        <ul>
            <li><a href="/FS/index.php/Home/Student/index.html">首页</a></li>
            <li><a href="/FS/index.php/Home/Student/chinese.html">学习中心</a></li>
            <li><a href="/FS/index.php/Home/Student/pk.html">竞技场</a></li>
            <li><a href="/FS/index.php/Home/Student/classspace.html">班级天地</a></li>
            <li><a href="/FS/index.php/Home/Student/parentspace.html">家长空间</a></li>
            <li><a href="/FS/index.php/Home/Student/gift.html">奖品</a></li>
            <li>
                <a href="#"><img src="/FS/Public/front/student/images/email.png" /></a>
            </li>
            <li><img src="/FS/Public/front/student/images/headpic.jpg" class="img-circle" />
                <!-- <ul>
                 <li><a href="#">个人信息</a></li>
                 <li><a href="#">上传</a></li>
                 <li><a href="#">退出</a></li>
             </ul>-->
            </li>
        </ul>
    </div>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="row clearfix">
                    <div class="col-md-2 column">
                    </div>
                </div>
                <!--右侧内容-->
                <div class="row clearfix">
                    <div id="rightcontent">
                        <div id="title">
                            <ul><a href="#">学习内容</a></ul>
                        </div>
                        <div id="studycontent">
                            <div id="video">
                                <object type="application/x-shockwave-flash" data="/FS/Public/front/student/resource/shuxue4.swf" width="100%" height="100%" bgcolor="#000000" id="video-box" name="video-box" class="jwswf swfPrev-beforeswfanchor0 swfNext-afterswfanchor0" tabindex="0" play="false">
                                    <param name="allowfullscreen" value="true">
                                    <param name="allowscriptaccess" value="always">
                                    <param name="seamlesstabbing" value="true">
                                    <param name="wmode" value="opaque">
                                    <param name="play" value="false">
                                    <embed src="/FS/Public/front/student/resource/shuxue4.swf" height="100%" width="100%" play="false" style="border-radius: 5px;" />
                                </object>
                                <!--/*控制播放和暂停*/-->
                            </div>
                            <HR width="100%" color=#fff SIZE=8 />
                            <div id="play">
                                <!-- <img src="/FS/Public/front/student/images/play.png" /> -->
                            </div>
                            <!--推荐内容-->
                            <div id="other">
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/better_content.png" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
                                </div>
                                <div>
                                    <a href="#"><img src="/FS/Public/front/student/images/course.jpg" /></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--页脚-->
    <div class="footer">
        <ul>
            <li>Copyright © 2011-2016 futurestar Corporation. All Rights Reserved.</li>
            <div>
                <li id="footerli">
                    <a href="/FS/index.php/admin">后台管理</a>
                    <a href="#">关于我们</a>
                    <a href="#">各界声音</a>
                    <a href="#">加入我们</a>
                </li>
            </div>
        </ul>
    </div>
</body>

</html>