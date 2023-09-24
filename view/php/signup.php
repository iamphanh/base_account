<?php
session_start();
?>
<!DOCTYPE html>
<html class="mdl-js">

<head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="shortcut icon" href="https://static-gcdn.basecdn.net/account/image/fav.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
        href="https://account.base.vn/css/zJiU_tPJLoaUpYoFc22eCFD1Mk6Jt-28ILBpjl89n2j6t_Hat4ey1mIBVuLg_g2a?v=hy49zuLTrpHVvCl4&amp;var=1">
    <link rel="stylesheet" type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:500,400,300,400italic,700,700italic,400italic,300italic&amp;subset=vietnamese,latin">
    <link rel="stylesheet" type="text/css"
        href="https://account.base.vn/css/JkocGYfMOXIlOdxJEt76nw?v=hy49zuLTrpHVvCl4&amp;var=1">
    <title>Đăng ký - Base Account</title>
</head>

<body data-new-gr-c-s-check-loaded="14.1125.0" data-gr-ext-installed="" class="">
    <noscript>
        <div class='noscript'>
            <br><br>Javascript must be enabled to process the website.
        </div>
    </noscript>

    <div id="master" class="">
        <div id="page">
            <div id="auth" class="scrollable" data-autoscroll="1" data-autohide="1">
                <div class="box-wrap">
                    <div class="auth-logo">
                        <a href="https://base.vn">
                            <img src="https://share-gcdn.basecdn.net/brand/logo.full.png">
                        </a>
                    </div>
                    <div class="box">
                        <form id="authform" action="?action=signupUser" method="post">
                            <h1>Đăng ký</h1>
                            <div class="auth-sub-title">Chào mừng đến với Base Account. Đăng ký để trải nghiệm.</div>
                            <div class="form">
                                <div class="row">
                                    <div class="label">Họ tên</div>
                                    <div class="input"><input type="text" name="fullname" placeholder="Họ tên của bạn">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="label">Số điện thoại</div>
                                    <div class="input"><input type="tel" name="phone"
                                            placeholder="Số điện thoại của bạn"></div>
                                </div>
                                <div class="row">
                                    <div class="label">Email</div>
                                    <div class="input"><input type="text" name="email" placeholder="Email của bạn">
                                    </div>
                                </div>
                                <div class="row hidden">
                                    <div class="input"><input type="hidden" name="appkey"></div>
                                </div>
                                <div class="row hidden">
                                    <div class="input"><input type="hidden" name="return_path" value=""></div>
                                </div>
                                <div class="row">
                                    <div class="label">Mật khẩu</div>
                                    <div class="input"><input type="password" id="signup-password" name="password"
                                            placeholder="Mật khẩu của bạn" class="__ap_enter_binded"></div>
                                </div>
                                    <div class="msg" id="error-msg-signup" style="color:red" ;></div>
                                <script>
                                    document.getElementById('error-msg-signup').innerText = errorMessage;
                                </script>
                                <div class="row relative xo">
                                    <button class="submit" type="submit"
                                        style="text-align: center; margin: 0 auto; display: flex; border: 2px solid #2bd14e;">Đăng ký</button>
                                </div>
                                <div class="extra xo">
                                    <div class="simple">
                                        Bạn đã có tài khoản?
                                        <a class="a" href="?action=loginUser">Đăng nhập</a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>