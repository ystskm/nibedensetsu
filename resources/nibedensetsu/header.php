<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>二部電設株式会社</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.4/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="js/script.js" type="text/javascript" charset="UTF-8"></script>
    <!-- タブレット対応 -->
    <script
    src="https://cdn.jsdelivr.net/npm/viewport-extra@2.0.1/dist/iife/viewport-extra.min.js"
    defer ></script>
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // タブレット端末かどうかを判定
        var ua = navigator.userAgent
        var isSmartPhone = ua.indexOf('iPhone') > -1 ||
            (ua.indexOf('Android') > -1 && ua.indexOf('Mobile') > -1)
        var isTablet = !isSmartPhone && (
            ua.indexOf('iPad') > -1 ||
            (ua.indexOf('Macintosh') > -1 && 'ontouchend' in document) ||
            ua.indexOf('Android') > -1
        )
        // タブレット端末でのみ最小幅を設定
        if (isTablet) ViewportExtra.setContent({ minWidth: 1350 })
    })
    </script>
    <!-- //タブレット対応 -->
</head>
<body class="body">
<!--header-->
<?php $file=basename($_SERVER['REQUEST_URI']); ?>
<header class="header <?php if($file=="thanks.php"){ ?>under-header<?php }else{ ?>front-header<?php } ?>">
    <div class="header-inner">
        <div class="header-left">
            <h1 class="header-logo">
                <div class="header-logo-img">
                    <img src="img/logo.svg" alt="">
                </div>
                <a class="header-logo-link" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>index.php">
                    <p>二部電設株式会社<p>
                    <img src="img/logo-black.svg" alt="">
                </a>
            </h1>
        </div>
        <div class="header-right">
            <div class="header-menu">
                <ul class="header-menu-list">
                    <li class="header-menu-list-item">
                        <a class="header-menu-list-item__link" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>#company"><span>会社案内</span></a>
                    </li>
                    <li class="header-menu-list-item">
                        <a class="header-menu-list-item__link" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>#business"><span>事業内容</span></a>
                    </li>
                    <li class="header-menu-list-item">
                        <a class="header-menu-list-item__link" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>#recruit"><span>採用情報</span></a>
                    </li>
                </ul>
            </div>
            <div class="header-contact">
                <a class="header-contact-link" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>#contact">お問い合わせ</a>
            </div>
        </div>
    </div>
    <div class="header-sp">
        <div class="header-sp-inner">
            <h1 class="header-sp-logo">
                <a class="header-sp-logo-img" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>index.php"><img src="img/logo-black.svg" alt=""></a>
            </h1>
            <div class="header-sp-btn">
                <div class="header-sp-btn-inner">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
        <div class="header-sp-nav">
            <div class="header-sp-nav-inner">
                    <ul class="header-sp-nav-menu">
                        <li class="header-sp-nav-menu-item">
                            <a class="header-sp-nav-menu-item__link" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>#company">会社案内</a>
                        </li>
                        <li class="header-sp-nav-menu-item">
                            <a class="header-sp-nav-menu-item__link" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>#business">事業内容</a>
                        </li>
                        <li class="header-sp-nav-menu-item">
                            <a class="header-sp-nav-menu-item__link" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>#recruit">採用情報</a>
                        </li>
                    </ul>
                    <div class="header-sp-nav-contact">
                        <a class="header-sp-nav-contact__link" href="<?php if($file=="thanks.php"){ ?>./<?php } ?>#contact">お問い合わせ</a>
                    </div>
            </div>
        </div>
    </div>
    <div class="nav-overlay" class=""></div>
</header>
<!--/header-->