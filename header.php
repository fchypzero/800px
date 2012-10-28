<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="content-type" content="text/html; charset=<?php $this->options->charset(); ?>" />
<meta name="viewport" content="width=device-width,user-scalable=no">
<?php if ($this->is('index')): ?><title><?php $this->options->title() ?></title>
<?php else: ?>
<title><?php $this->archiveTitle('.', '', ' - '); ?><?php $this->options->title() ?></title>
<?php endif; ?>
<!--[if lt IE 9]>
<script src="http://x.libdd.com/farm1/1484d5/69431f1e/93D6C.js"></script>
<![endif]-->
<link rel="stylesheet" type="text/css" media="all" href="<?php $this->options->themeUrl('style.css'); ?>" />
<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://lib.sinaapp.com/js/jquery/1.2.6/jquery.min.js"></script>
<script src="http://x.libdd.com/farm1/a571d2/fba453c2/base.js"></script>
<?php $this->header("generator=&template=&"); ?>
</head>
<body>

<div id="header">
		<div class="hdwrap">
			<header id="blog_title"> 
			<?php if ($this->is('index')): ?><h1><?php $this->options->title() ?></h1>
			<?php else: ?>
			<div class="h1"><?php $this->options->title() ?></div>
			<?php endif; ?>
        	<div><a href="<?php $this->options->siteUrl(); ?>">Cho's <span class="blue">Blog</span></a></div>
			</header>
			 <nav id="menu">
			<ul class="header-nav">
				<li <?php if($this->is('index')): ?> class="current"<?php endif; ?><?php if ($this->is('post')): ?>class="current"<?php endif; ?>><a href="<?php $this->options->siteUrl(); ?>">博客</a></li>
				<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
				<?php while($pages->next()): ?>
				<li <?php if($this->is('page', $pages->slug)): ?> class="current"<?php endif; ?>><a href="<?php $pages->permalink(); ?>"><?php $pages->title(); ?></a></li>
				<?php endwhile; ?>
				<li><a rel="nofollow" href="<?php $this->options->siteUrl(); ?>feed" target="_blank">订阅</a></li>
			</ul>
			</nav>
			<form action="/search" class="head-search" method="get">
			<input id="search-input" type="text" name="s" class="inputbox" placeholder="搜索..." x-webkit-speech lang="zh-CN" />
			</form>
			
		</div>
		
 </div>

<div id="wrap">
	