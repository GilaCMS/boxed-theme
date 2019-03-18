<!DOCTYPE html>
<html lang="<?=gila::config('language')?>">
<?php
view::stylesheet('lib/font-awesome/css/font-awesome.min.css');
view::stylesheet('lib/gila.min.css');
view::head()?>
<style>
<?php $theme_color=gila::option('theme.color','orangered'); ?>
body{font-family:'Arial', sans-serif;}
h1,h2,h3,.widget-title,.header{font-family: Open Sans, Helvetica, Arial;}
.widget{margin-top: 20px; padding: 0}
.widget-title{border-bottom: 4px solid <?=$theme_color?>; display:inline-block;}
.widget-body{border-top: 1px solid #ccc; padding-top: 15px; margin-top: -1px;}
.widget:before{content: ""; width:100%; margin-top: 12px; border-bottom: 1px solid #ccc;}
.widget .g-nav.vertical li{border: 1px solid #ddd}
.widget .g-nav.vertical li a{color: #181818;padding: 4px 12px}
.widget .g-nav.vertical li a:hover{color: <?=$theme_color?>;}
.post-review{border: 1px solid #ccc; margin-bottom: 5px;}
.post-review a{color: #242424;}
.post-review a:hover{color: <?=$theme_color?>;}
.sidebar{padding-left: 16px; min-height:200px}
.header{margin: 0;}
.header h1,.header h3{margin: 0; display:inline-block;}
.header h1 a,.header h1 a:hover{color: #242424;}
.header h3{color: #999;}
.header-img{
<?php
$bgimg = gila::option('theme.header-image');
if($bgimg) {
    $srcset = view::thumb_srcset($bgimg);
    echo "background: url({$srcset[0]});height:300px;";
    echo "background-image: -webkit-image-set(url({$srcset[0]}) 1x, url({$srcset[1]}) 2x);";
}
?>
background-size: cover;
background-position-y: <?=gila::option('theme.header-position','center')?>;
background-position-x: center; margin:0 15px}
footer{background:#464a49;margin-top:10px;color:white}
.footer-text,footer a,footer a:hover{color:#ccc; }
.widget-social-icons {list-style: none;padding:0 }
.widget-social-icons li{margin: 15px 10px 0 0; float: left; text-align: center; opacity: 0.8}
.widget-social-icons li a i:before{
  width: 40px;
  margin: 0;
  color: #fff;
  font-size: 20px;
  line-height: 40px;
  display:inline-block;
  background: #060608;
}
.widget-social-icons li a i:hover:before{background: <?=$theme_color?>;}
.g-navbar li ul li a{color:inherit}
.g-nav li ul{margin-top:-2px}
.g-nav a{color: #666}
.g-nav a.active{color: <?=$theme_color?>;background:inherit}
</style>

<body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.16/vue.min.js"></script>
    <script src="lib/gila.min.js"></script>
    <?php view::widget_area('body'); ?>
    <div style="">
    <div style="max-width:1200px; margin:auto;">

        <div class="header wrapper">
        <div>
            <h1><a href="<?=gila::config('base')?>"><?=gila::config('title')?></a></h1>
            <h3><?=gila::config('slogan')?></h3>
            <!-- Navigation -->
            <nav class="inline-flex" style="float:right">
                <span style=""><?php view::menu('mainmenu'); ?></span>
            </nav>
        </div>
        </div>

        <div class="header-img"></div>

