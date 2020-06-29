<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

require_once "libs/scss.inc.php";
use ScssPhp\ScssPhp\Compiler;
$scss = new Compiler();
$sass = file_get_contents("scss/1567.scss");
$style = $scss->compile($sass);
file_put_contents("css/1567.css",$style);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>1567</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/1567.css" rel="stylesheet" type="text/css"/>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
        <link rel="stylesheet" href="./css/swiper.min.css">
        <script src="./js/swiper.min.js"></script>
        <style>
            .nl-swiper-container {
            width: 100%;
            height: 100%;
            }
            .nl-swiper-container .swiper-button-next,
            .nl-swiper-container .swiper-button-prev{
                top: 0;
                bottom: 0;
                margin: auto;
                height: 48px;
                width: 48px;
                background-color: rgba(0,0,0,0.7);
                border-radius: 50%;
            }
            .swiper-button-next:after, .swiper-button-prev:after{
                font-size: 28px;
                margin: auto;
                font-weight: bold;
                color: #fff;
            }
            .nl-swiper-wrapper .swiper-slide {
            width: 12.5% !important;
            height: 100%;
            position: relative;
            text-align: center;
            font-size: 18px;
            background: #fff;
            /* Center slide text vertically */
            display: -webkit-box;
            display: -ms-flexbox;
            display: -webkit-flex;
            display: flex;
            -webkit-box-pack: center;
            -ms-flex-pack: center;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            -webkit-align-items: center;
            align-items: center;
            }
            .nl-swiper-wrapper .swiper-slide:after{
                position: absolute;
                content: "";
                display: block;
                padding-top: 100%;
            }
            @media screen and (max-width: 1028px){
                .nl-swiper-container .swiper-button-next,
                    .nl-swiper-container .swiper-button-prev{
                        height: 36px;
                        width: 36px
                    }
                    .swiper-button-next:after, .swiper-button-prev:after{
                        font-size: 20px;
                    }
                @media screen and (max-width: 768px){
                    .nl-swiper-wrapper .swiper-slide {
                        width: 25% !important;
                        height: 100% !important;
                    }
                    .nl-swiper-container .swiper-button-next,
                    .nl-swiper-container .swiper-button-prev{
                        height: 30px;
                        width: 30px
                    }
                    .swiper-button-next:after, .swiper-button-prev:after{
                        font-size: 16px;
                    }
                    @media screen and (max-width: 360px){
                        .nl-swiper-wrapper .swiper-slide {
                            width: 50% !important;
                            height: 100% !important;
                        }
                    }
                }
            }
        </style>
    </head>
    <body >
        <!-- content -->
        <?php include './1567-content.php'; ?>
        <!-- include js -->
        <script src="./js/scripts.js"></script>
    </body>
</html>