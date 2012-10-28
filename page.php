<?php $this->need('header.php'); ?>
<section id="content">
	<article class="post">
		<header>
			<h1><?php $this->title() ?></h1>
		</header>
		<div class="con">
			<?php $this->content(''); ?>
		</div>
	</article>
	<div class="postunder">
		<?php $this->need('comments.php'); ?>
	</div>
</section>
<div class="clear"></div>
</div>
<aside class="sidebar">
	<div class="hdwrap">
	<?php $this->need('sidebar.php'); ?>
	</div>
</aside>
<?php $this->need('footer.php'); ?>