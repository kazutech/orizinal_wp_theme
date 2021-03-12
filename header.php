<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <script
  src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
  integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="
  crossorigin="anonymous"></script>
  <!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<!-- Add the slick-theme.css if you want default styling -->
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<?php wp_head(); ?>
<script>
    $(function(){
        $('#corp_msgs').slick({
            autoplay: true,
            accessibility: true,
            slidesToShow: 1,
            slidesToScroll:1
        });
    });
    $(function(){
        $('#voice').slick({
            autoplay: true,
            accessibility: true,
            slidesToShow: 1,
            slidesToScroll:1
        });
    });
</script>
</head>
<body <?php body_class(); ?>>
    <header>
        <div class="container">
            <div id="header-contents">
                <div id="header-left">
                    <h1>○○○○××××</h1>
                </div>
                <div id="header-right">
                    <ul>
                        <li><a href="#work">制作実績</a></li>
                        <li><a href="#menu">メニュー表</a></li>
                        <li><a href="#about">私たちについて</a></li>
                        <li><a href="#news">最新情報</a></li>
                        <li><a href="#voice">お客様の声</a></li>
                        <li>お問い合わせ</li>
                    </ul>
                </div>
            </div>
        </div>
    </header>