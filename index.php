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
    <!-- CSS 區塊 start -->
        <!-- 此處引用專屬該頁的 CSS 檔案 -->
    <!-- CSS 區塊 end -->
</head>
<body>
    <?php //include("_common/loading.php") ;?>
    <!-- header區塊 -->
    <header>
        <?php include('_common/header.php'); ?>
    </header>
    <!-- header區塊 end -->
    <div class="crumb hidden">
        <?php include('_common/crumb.php');  // 引用麵包屑檔案 ?>
    </div>
    <!-- main區塊 -->
    <main style="height: 100vh; background-color: #ccc">
        aaaa
    </main>
    <!-- main區塊 end -->

    <!-- footer區塊 -->
    <footer>
        <?php include('_common/footer.php'); ?>
    </footer>
    <!-- footer區塊 end -->
    <?php include('_common/js_default.php');  // 引用共用 JS 檔案 ?>
    <!-- JS 區塊 start -->
    <script src="assets/js/index.js" type="text/javascript"></script>
    <!-- JS 區塊 end -->
    <?php include('_common/google_analytics_for_body.php');  // 引用放置在 body 的分析碼 ?>
    <script>
        jQuery(document).ready(function() {});
    </script>
</body>
</html>