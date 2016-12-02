<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <title>未来之星-我们与你一起成长</title>
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/css/common.css">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/css/modal.css">
    <link rel="stylesheet" type="text/css" href="/FS/Public/front/css/bgstretcher.css">
    <script type="text/javascript" src="/FS/Public/front/js/jquery-1.8.2.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/my.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/bgstretcher.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="/FS/Public/front/js/respond.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#body').bgStretcher({
            images: ['/FS/Public/front/img/banner6.jpg', '/FS/Public/front/img/banner9.jpg', '/FS/Public/front/img/banner11.jpg', '/FS/Public/front/img/banner7.jpg'],
            imageWidth: 1024,
            imageHeight: 500,
            // transitionEffect: 'fade',
            nextSlideDelay:'10000'
        });
    });
    </script>
    <script type="text/html" id="modal-login">
        <div class="loginPop-box loginBg">
            <p>
                <a onclick="overlay()" href="" class="index-close"></a>
            </p>
            <div class="lop-inner">
                <div class="loginPop-logo"><img src="/FS/Public/front/img/logo.png" width="88px" height="88px"></div>
                <h1>登录</h1>
                <form id="FormSubmitInit" class="JS-formSubmit" method="post" action="">
                    <input name="returnURL" type="hidden" value="">
                    <div class="lop-content">
                        <div class="c-text">
                            <span class="login-icon icon-5"></span>
                            <input type="text" value="" name="username" tabindex="1" class="JS-inputEvent" id="index_login_username" placeholder="手机号/学号">
                            <div class="errorTips" style="display: none">请输入学号/手机号</div>
                        </div>
                        <div class="c-text">
                            <span class="login-icon icon-4"></span>
                            <input type="password" id="index_login_password" name="j_password" class="JS-inputEvent" tabindex="2" placeholder="输入密码">
                            <div class="errorTips" style="display: none">请输入密码</div>
                        </div>
                        <div class="c-text">
                            <a href="javascript:void(0);" class="info active JS-rememberMe-btn">
                                <!-- <input name="_spring_security_remember_me" type="checkbox" checked="checked" style="display: none;"> -->
                                <span class="login-icon icon-6"></span>记住我
                            </a>
                            <a href="javascript:void(0)" target="_blank" class="info">忘记密码 ?</a><span class="line"> | </span><a href="javascript:void(0);" class="info JS-register-main">注册</a>
                        </div>
                    </div>
                    <div class="loginPop-footer">
                        <input type="submit" value="登录" class="login-btn" id="_a_loginForm" name="_a_loginForm" tabindex="3">
                    </div>
                </form>
            </div>
            <script type="text/javascript">
            $(document).ready(function() {
                var clicked = false;
                $(".icon-6").on('click', learnOneself);
                $('.JS-register-main').on('click', modalRegister);

                function checkPhone() {}
                // 记住我图片变化
                function learnOneself() {
                    console.log("a");
                    if (clicked == false) {
                        $(this).attr('class', 'login-icon icon-7');
                        clicked = true;
                    } else {
                        $(this).attr('class', 'login-icon icon-6');
                        clicked = false;
                    }
                }

                function modalRegister() {
                    $("#modal-overlay").empty();
                    var _html = document.getElementById("modal-register-student").innerHTML;
                    $("#modal-overlay").append(_html);
                    $("#modal-overlay").css("visibility", 'visible');
                }
            });
            </script>
        </div>
    </script>
    <script type="text/html" id="modal-register-student">
        <div class="loginPop-box loginBg">
            <p>
                <a onclick="overlay()" href="" class="index-close"></a>
            </p>
            <div class="lop-inner">
                <div class="loginPop-logo"><img src="/FS/Public/front/img/logo.png" width="88px" height="88px"></div>
                <h1>注册学生账号</h1>
                <div class="lop-content contentMar">
                    <div class="lop-right">
                        <div class="c-text">
                            <span class="login-icon icon-1"></span>
                            <input type="tel" placeholder="请输入老师手机号或ID号" class="txt1 JS-inputEvent JS-classInput">
                            <div class="errorTips"></div>
                        </div>
                        <a href="javascript:void(0);" class="login-btn login-orange JS-getClassLIst">注册学生账号</a>
                    </div>
                    <div class="lop-tab tabLeft">
                        <ul>
                            <li class="JS-selectStudent-main stu active">
                                <div class="image"></div>
                                <div class="side">我是学生</div>
                            </li>
                            <li class="JS-selectTeacher-main">
                                <div class="image image-tea"></div>
                                <div class="side">我是老师</div>
                            </li>
                        </ul>
                        <script type="text/javascript">
                        $(document).ready(function() {
                            $(".JS-selectTeacher-main").on('click', modalTea)
                            $(".JS-getClassLIst").on('click', function() {
                                if (checkPhone() == false) {
                                    $(".errorTips").text("手机号码有误，请重填");
                                } else {
                                    modalResStuPwd();
                                }
                            })

                            function modalTea() {
                                $("#modal-overlay").empty();
                                var _html = document.getElementById("modal-register-teacher").innerHTML;
                                $("#modal-overlay").append(_html);
                                $("#modal-overlay").css("visibility", 'visible');
                            }

                            function modalResStuPwd() {
                                $("#modal-overlay").empty();
                                var _html = document.getElementById("modal-reg-pwd-stu").innerHTML;
                                $("#modal-overlay").append(_html);
                                $("#modal-overlay").css("visibility", 'visible');
                            }

                            function checkPhone() {
                                var phone = $('.JS-classInput').val();
                                if (!(/^1[34578]\d{9}$/.test(phone))) {
                                    return false;
                                }
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type="text/html" id="modal-register-teacher">
        <div class="loginPop-box loginBg">
            <p>
                <a onclick="overlay()" href="" class="index-close"></a>
            </p>
            <div class="lop-inner">
                <div class="loginPop-logo"><img src="/FS/Public/front/img/logo.png" width="88px" height="88px"></div>
                <h1>注册老师账号</h1>
                <div class="lop-content">
                    <div class="clearfloat"></div>
                    <div class="JS-defaultMode">
                        <div class="c-text">
                            <span class="login-icon icon-1"></span>
                            <input type="text" placeholder="请输入您的手机号" class="txt1 JS-teacherMobile JS-inputEvent">
                            <div class="errorTips"></div>
                        </div>
                        <div class="c-text">
                            <span class="login-icon icon-3"></span>
                            <input type="text" placeholder="请输入短信验证码" class="txt2 JS-teacherSmsCode JS-inputEvent">
                            <span class="code codeBg login-blue JS-getCheckCode" style="cursor: pointer;">获取验证码</span>
                            <div class="errorTips"></div>
                        </div>
                        <div class="c-text">
                            <span class="login-icon icon-2"></span>
                            <input type="text" placeholder="请输入右侧数字" class="txt2 JS-teacherCaptcha JS-inputEvent" id="captchaInputLogin">
                            <span id="captchaImageLogin" class="code" style="cursor: pointer;">1234</span>
                            <div class="errorTips"></div>
                        </div>
                        <a href="javascript:void(0);" class="login-btn login-blue JS-teacherVerMobile">注册老师账号</a>
                    </div>
                    <div class="lop-tab tabLeft">
                        <ul>
                            <li class="JS-selectStudent-main">
                                <div class="image"></div>
                                <div class="side">我是学生</div>
                            </li>
                            <li class="JS-selectTeacher-main tea active">
                                <div class="image image-tea"></div>
                                <div class="side">我是老师</div>
                            </li>
                        </ul>
                        <script type="text/javascript">
                        $(document).ready(function() {
                            $(".JS-selectStudent-main").on('click', modalStu);
                            $(".JS-teacherVerMobile").on('click', modalResTeaPwd);

                            function modalStu() {
                                $("#modal-overlay").empty();
                                var _html = document.getElementById("modal-register-student").innerHTML;
                                $("#modal-overlay").append(_html);
                                $("#modal-overlay").css("visibility", 'visible');
                            }

                            function modalResTeaPwd() {
                                $("#modal-overlay").empty();
                                var _html = document.getElementById("modal-reg-pwd-tea").innerHTML;
                                $("#modal-overlay").append(_html);
                                $("#modal-overlay").css("visibility", 'visible');
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type="text/html" id="modal-reg-pwd-stu">
        <div class="pr-main pr-main-child js-registerTemplateType" data-type="student">
            <p class="pwd-stu-p">
                <a onclick="overlay()" href="" class="index-close"></a>
            </p>
            <div class="hd">请设置你的密码！</div>
            <div class="main-box">
                <div class="main-inner">
                    <div class="main-class clearfloat">
                        <div class="main-title">请选择你所在的班级 : </div>
                        <span class="click-select-code select-grade" data-type="clazzList" data-clazzid="1" data-clazzname="一年级20班" title="一年级20班">一年级20班</span>
                        <span class="click-select-code select-grade" data-type="clazzList" data-clazzid="2" data-clazzname="一年级20班" title="一年级20班">一年级20班</span>
                        <div style="clear:both; padding:15px 0 10px;">
                            <p class="select-sex">请选择性别 : </p>
                            <div class="select-sex-item">
                                <span class="click-select-code select-sex-item" data-gender="M">男生</span>
                                <span class="click-select-code select-sex-item" data-gender="F">女生</span>
                            </div>
                        </div>
                    </div>
                    <ul class="main-list">
                        <li class="r-username">
                            <input type="text" value="" maxlength="20" name="username" data-label="真实姓名" class="require" placeholder="请输入真实姓名">
                            <span class="i-error-info"></span>
                        </li>
                        <li class="r-password">
                            <input type="password" value="" maxlength="16" name="password" data-label="密码" class="require" placeholder="请设置密码">
                            <span class="i-error-info"></span>
                        </li>
                        <li>
                            <input type="password" value="" maxlength="16" name="verify_password" data-label="确认密码" class="require" placeholder="请再次输入设置的密码">
                            <span class="i-error-info"></span>
                        </li>
                        <li class="">
                            <input type="text" value="" maxlength="11" name="mobile" class="require" data-label="手机号" placeholder="请输入家长手机号">
                            <span class="info-text"><a href="javascript:void(0);" class="code-btn" id="studentGetCheckCodeBtn"><span>免费获取验证码</span></a>
                            </span>
                            <span class="i-error-info"></span>
                        </li>
                        <li>
                            <input type="text" value="" maxlength="6" class="require" name="ver_code" data-label="验证码" placeholder="请输入手机收到的短信验证码">
                            <span class="i-error-info"></span>
                        </li>
                    </ul>
                    <div class="submit"><a href="javascript:void(0);" class="v-submit-register v-submit-register-student" data-type="student">完成注册</a></div>
                </div>
            </div>
            <script type="text/javascript">
            $(document).ready(function() {
                var oSpan = $(".main-class>span");
                for (var i = 0; i < oSpan.length; i++) {
                    oSpan[i].onclick = function() {
                        $(this).addClass("active");
                    }
                }

                activeOrange();

                function activeOrange() {
                    var oGrade = $(".select-grade");
                    for (var i = 0; i < oGrade.length; i++) {
                        var a;
                        retrun a = function(oGrade) {
                            oGrade[i].click(function() {
                                    $(this).toggleClass("active");
                                }
                            })(i)
                    }
                    var oSex = $(".select-sex-item");
                    for (var i = 0; i < oSex.length; i++) {
                        oSex[i].click(function() {
                            $(this).toggleClass("active");
                        })
                    }
                    // $(".click-select-code").on('click', function() {
                    //     // if ($(".sex-F").hasClass("active")) {
                    //     //     $(".sex-F").removeClass('active')
                    //     // } else {
                    //     //     $(this).toggle("active");
                    //     // }
                    //     $(this).toggleClass("active");
                    //     // $(".sex-M").toggleClass("active");
                    // });
                    // $(".sex-F").on('click', function() {
                    //     // if ($(".sex-M").hasClass("active")) {
                    //     //     $(".sex-M").removeClass('active')
                    //     // } else {
                    //     //     $(this).addClass("active");
                    //     // }
                    //     $(this).toggleClass("active")
                    //     // $(".sex-F").toggleClass("active");
                    // });

                }
            })
            </script>
        </div>
    </script>
    <script type="text/html" id="modal-reg-pwd-tea">
        <div class="js-scrollMainIdBox" id="register_template" style="min-height: 100%;">
            <p class="pwd-tea-p">
                <a onclick="overlay()" href="" class="index-close"></a>
            </p>
            <div class="pr-main pr-main-teacher js-registerTemplateType" data-type="teacher">
                <div class="hd">请设置你的密码！</div>
                <div class="main-box">
                    <div class="main-inner">
                        <ul class="main-list">
                            <li class="r-username">
                                <input type="text" value="" class="require r-tea-username" name="username" data-role="teacher" data-label="真实姓名" placeholder="请输入真实姓名">
                                <span class="i-error-info">真实姓名不可以为空</span>
                            </li>
                            <li class="r-password">
                                <input type="password" value="" name="password" class="require r-tea-password" data-label="密码" placeholder="请设置密码">
                                <span class="i-error-info">密码不可以为空</span>
                            </li>
                            <li class="last">
                                <input type="password" value="" name="verify_password" data-label="确认密码" class="require r-tea-last" placeholder="请再次输入设置的密码">
                                <span class="i-error-info">确认密码不可以为空</span>
                            </li>
                        </ul>
                        <div class="submit"><a href="javascript:void(0);" class="v-submit-register v-submit-register-tea" data-type="teacher">下一步</a></div>
                        <script type="text/javascript">
                        $(document).ready(function() {
                            $(".v-submit-register-tea").on('click', modalRegTeaSelect);
                            $(".r-tea-username").on('blur', judgeNull);
                            $(".r-tea-password").on('blur', judgeNull);
                            $(".r-tea-last").on('blur', judgeConfirmPwd);

                            function modalRegTeaSelect() {
                                $("#modal-overlay").empty();
                                var _html = document.getElementById("modal-reg-tea-select").innerHTML;
                                $("#modal-overlay").append(_html);
                                $("#modal-overlay").css("visibility", 'visible');
                            }

                            function judgeNull() {
                                console.log("aaa");
                                var oText = $(this).val();
                                if (oText == '') {
                                    $(this).next().css('display', 'block');
                                } else {
                                    $(this).next().css('display', 'none');
                                }
                            }

                            function judgeConfirmPwd() {
                                var pwdText = $(".r-tea-password").val();
                                var confirmText = $(".r-tea-last").val();
                                if (confirmText == '') {
                                    $(this).next().css('display', 'block');
                                } else {
                                    $(this).next().css('display', 'none');
                                }
                                if (pwdText != confirmText) {
                                    $(".r-tea-last").next(".i-error-info").html("确认密码与密码不一致！");
                                } else {
                                    $(".r-tea-last").next(".i-error-info").css('display', 'none');
                                }

                            }
                        })
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </script>
    <script type="text/html" id="modal-reg-tea-select">
        <div class="loginPop-box loginBg" style="min-height:100%;">
            <p>
                <a onclick="overlay()" href="" class="index-close"></a>
            </p>
            <div class="register-tea" style=" position: relative;top: 100px; width: 1100px; margin: 0 auto">
                <div class="select-hd">按照下面的步骤来选择你的学校</div>
                <div class="select-group clearfloat">
                    <form enctype="multipart/form-data" class="form-register-tea" role="form">
                        <div class="section-item item">
                            <h2 class="select-title">学段</h2>
                            <select name="section">
                                <option value="">选择学段</option>
                                <option value="小班">小班</option>
                                <option value="中班">中班</option>
                                <option value="大班">大班</option>
                            </select><span class="select-drop"></span>
                        </div>
                        <div class="subject-item item">
                            <h2 class="select-title">学科</h2>
                            <select name="subject">
                                <option value="选择学科">选择学科</option>
                                <option value="语文">语文</option>
                                <option value="英语">英语</option>
                                <option value="数学">数学</option>
                                <option value="科学">科学</option>
                            </select><span class="select-drop"></span>
                        </div>
                        <div class="city-township-item item">
                            <h2 class="select-title">市区</h2>
                            <select name="city" class="city">
                                <option value="选择市">选择市</option>
                                <option value="石家庄">石家庄</option>
                                <option value="唐山">唐山</option>
                                <option value="秦皇岛">秦皇岛</option>
                            </select><span class="select-city-drop"></span>
                            <select name="township" class="township">
                                <option value="选择区">选择区</option>
                                <option value="裕华区">裕华区</option>
                                <option value="桥西区">桥西区</option>
                                <option value="长安区">长安区</option>
                            </select><span class="select-township-drop"></span>
                        </div>
                        <div class="school-item item">
                            <h2 class="select-title">学校</h2>
                            <select name="school">
                                <option value="选择学校">选择学校</option>
                                <option value="双语幼儿园">双语幼儿园</option>
                                <option value="第一幼儿园">第一幼儿园</option>
                                <option value="第二幼儿园">第二幼儿园</option>
                            </select><span class="select-drop"></span>
                        </div>
                        <div class="grade-item item">
                            <h2 class="select-title">班次</h2>
                            <select name="grade">
                                <option value="选择班次">选择班次</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select><span class="select-drop"></span>
                        </div>
                    </form>
                </div>
                <div class="select-result">
                    <span class="section-res item">小班</span>
                    <span class="subject-res item"></span>
                    <span class="city-res item"></span>
                    <span class="township-res item"></span>
                    <span class="school-res item"></span>
                    <span class="grade-res item"></span>
                </div>
            </div>
            <script type="text/javascript">
            $(document).ready(function() {
                addSection();

                function addSection() {
                    $(".section-item>select").on('change', function() {
                        var sectionValue = $(".section-item>select").val();
                        $(".section-res").text(sectionValue);
                        $(".section-res").css('display', "inline-block");
                    });
                    $(".subject-item>select").on('change', function() {
                        var subjectValue = $(".subject-item>select").val();
                        $(".subject-res").text(subjectValue);
                        $(".subject-res").css('display', "inline-block");
                    });
                    $(".city").on('change', function() {
                        var cityValue = $(".city").val();
                        $(".city-res").text(cityValue);
                        $(".city-res").css('display', "inline-block");
                    });
                    $(".township").on('change', function() {
                        var townshipValue = $(".township").val();
                        $(".township-res").text(townshipValue);
                        $(".township-res").css('display', "inline-block");
                    });
                    $(".school-item>select").on('change', function() {
                        var schoolValue = $(".school-item>select").val();
                        $(".school-res").text(schoolValue);
                        $(".school-res").css('display', "inline-block");
                    });
                    $(".grade-item>select").on('change', function() {
                        var gradeValue = $(".grade-item>select").val();
                        $(".grade-res").text(gradeValue);
                        $(".grade-res").css('display', "inline-block");
                    });

                }
            });
            </script>
        </div>
    </script>
</head>

<body>
    <div class="global-nav-inner">
        <div class="global-nav-container clearfloat">
            <ul class="nav js-global-actions" role="navigation" id="global-actions">
                <li id="global-nav-home" class="home" data-global-action="home">
                    <a class="js-nav js-tooltip js-dynamic-tooltip" data-placement="bottom" href="index.html" data-component-context="home_nav" data-nav="home">
                        <span class="img"><img src="/FS/Public/front/img/logo.png" width="25px" height="25px"></span>
                        <span class="text">未来之星</span>
                        <!-- <img src="/FS/Public/front/img/header.png" height="25px"> -->
                    </a>
                </li>
                <li id="global-nav-about" class="about" data-global-action="about">
                    <a class="js-tooltip js-dynamic-tooltip" data-placement="bottom" href="/about" target="_blank" data-component-context="about_nav" data-nav="about">
                        <span class="text">关于我们</span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="body"></div>
    <div id="modal-overlay"></div>
    <div class="webInfo">
        <h1 class="webInfo-title">欢迎使用未来之星<p class="webInfo-title-en">Welcome To FutureStar</p></h1>
        <p class="webInfo-info">为学前儿童打造的在线学习平台</p>
        <p class="webInfo-info">串联老师、学生、家长三方的教与学关系</p>
    </div>
    <div class="login-register">
        <p class="banner1-title">未来之星-教育助你成长</p>
        <p class="login"><a href="javascript:;">登录</a></p>
        <p class="register"><a href="javascript:;">注册</a></p>
    </div>
    <div class="body-footer">
        <ul class="clearfloat">
            <li class="footerli"><a href="#">后台管理</a></li>
            <li class="footerli"><a href="#">关于我们</a></li>
            <li class="footerli"><a href="#">各界声音</a></li>
            <li class="footerli"><a href="#">加入我们</a></li>
        </ul>
        <p>Copyright &copy; 2016 futurestar Corporation. All Rights Reserved.</p>
    </div>
</body>

</html>