<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <?php include('_common/google_analytics_for_head.php');  // 引用放置在 head 的分析碼 ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- 上線後將 robots contents 替換為 all，避免開發階段時被搜尋引擎收錄頁面 -->
    <meta name="robots" content="noindex, nofollow, nosnippet, noarchive, noodp, noydir">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <title>ARTIE DEMO PAGE</title>
    <meta name="author" content="">
    <meta name="copyright" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="distribution" content="Taiwan">
    <meta name="geo.region" content="tw">
    <meta property="og:url" content="">
    <meta property="og:title" content="">
    <meta property="og:site_name" content="">
    <meta property="og:image" content="">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
    <link rel="canonical" href="">
    <!-- favicon頁面小圖 -->
    <link rel="shortcut icon" href="assets/images/common_ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/common_ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/common_ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/common_ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/images/common_ico/apple-touch-icon-57-precomposed.png">
    <!-- favicon頁面小圖 end -->
    <?php include('_common/css_default.php');  // 引用共用 css 檔案 ?>

    <link rel="stylesheet" href="assets/css/common/common_h.css">
    <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
    <main>

        <!-- ========================================================
            login-bg
            table   width="1920" height="1123"
            phone   width="768" height="1361"
        ========================================================  -->
        <div class="js-imgLiquidFill login-bg scaleIn_bg">
            <picture class="pc">
                <source srcset="assets/images/login/bg.jpg" media=" (min-width:767px)">
                <source srcset="assets/images/login/bg-xs.jpg" media="(max-width: 768px)">
                <img src="assets/images/login/bg.jpg" alt="bg">
            </picture>
        </div>

        <section class="login-section wow fadeInUp d4 d2s">

            <!-- ========================================================
               回上一頁
            ========================================================  -->
            <a href="Javascript:history.go(-1)"  class="login-close">
                <span class="icon icon-cross-out"></span>
                <span class="text font-calibri-L">close</span>
            </a>

            <div class="row no-gutters">
                <!-- ========================================================
                   aside
                ========================================================  -->
                <div class="aside col-sm-4">
                    <h2 class="c-title wow fadeInLeft d9">
                        <span class="en">
                            member login
                        </span>
                        <span class="tw">
                            會員登入
                        </span>
                    </h2>
                </div>

                <!-- ========================================================
                   login-content
                ========================================================  -->
                <div class="login-content col-sm-8">
                    <h3 class="c-title-sub">
                        <span class="en">member login</span>
                        <span class="tw">請輸入帳號密碼</span>
                    </h3>

                    <form class="form">
                        <div class="form-group">
                            <label>
                                <span class="sr-only">email</span>
                                <span class="icon icon-man-user"></span>
                            </label>
                            <input type="email" class="form-control" placeholder="EMAIL">
                        </div>
                        <div class="form-group">
                            <label>
                                <span class="sr-only">password</span>
                                <span class="icon icon-key"></span>
                            </label>
                            <input type="password" class="form-control" placeholder="PASSWORD">
                        </div>

                        <div class="link-group">
                            <a href="register.php" class="text-link">立即註冊 </a>
                            <a href="forget.php" class="text-link">忘記密碼?</a>

                            <a href="member.php" class="c-btn c-btn-blue">
                                登入
                            </a>
                        </div>

                    </form>
                </div>
            </div>




        </section>
    </main>

    <?php include('_common/js_default.php');  // 引用共用 JS 檔案 ?>
    <!-- JS 區塊 start -->
       <script src="assets/js/plugin/imgLiquid-0.9.944.min.js"></script>
    <!-- JS 區塊 end -->
    <?php include('_common/google_analytics_for_body.php');  // 引用放置在 body 的分析碼 ?>
    <script>
        (function($){
            $(".js-imgLiquidFill").imgLiquid();
        })($)
    </script>
</body>
</html>
