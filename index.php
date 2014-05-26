<?php
/**
 * wa-dopuresu micro
 *
 * とにかく最小限のテーマです。機能はナビゲーションとウィジェットのみ
 * Bootstrap3使用
 * @link http://wa-dopuresu.com
 *
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
<title><?php bloginfo('name');?></title>
<?php wp_head(); //テーマやプラグインが使うので必要 ?>  
</head>
<body>
<!-- navbar http://getbootstrap.com/getting-started/  -->
<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <!-- スマホなどのときに表示されるボタン -->
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
      <!-- スクリーンリーダーの記述 -->
      <span class="sr-only">Toggle navigation</span>
      <!-- ボタンの横棒の線（3本） -->
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
<!-- ブログ名 -->    
    <a class="navbar-brand" href="<?PHP bloginfo('url');?>"><i class="icon-home"></i><?PHP bloginfo('name');?></a>
  </div>
  <div class="collapse navbar-collapse navbar-ex1-collapse">
<!-- ナビゲーション　外観→メニュー→位置の管理でメニューを選択 -->    
  <?php wp_nav_menu(array('theme_location' => 'navbar','container' => 'ul','menu_class' =>'nav navbar-nav')); ?>   
  </div>
</nav>
    <div class="container">
      <div class="row">
      <!-- メインのスペース 数字はsidebarと合わせて12になるように調整 -->
        <div id="primary" class="col-md-9">
<?php
	if ( have_posts() ) :
	// Start the Loop.
		while ( have_posts() ) : the_post();
?>			
	<div class="entry-content">
<?php the_content(); //コンテンツ表示 ?>
	</div><!-- .entry-content -->

<?PHP
		endwhile;				
	else :
		echo 'コンテンツなし';
	endif;
?>
        </div>
        <!-- サイドバー メインコンテンツのスペースと合わせて12になるように数字を調整 -->
        <div id="secondary" class="col-md-3">
          <?php dynamic_sidebar(); ?>
        </div>
      </div>
<!-- フッタ -->
      <hr>
      <footer>
        <p>&copy; wa-dopuresu.com <?PHP echo date("Y");?></p>
      </footer>
    </div> <!-- /container -->
<?php wp_footer(); //テーマやプラグインが使うので必要 ?>
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</body>
</html>
