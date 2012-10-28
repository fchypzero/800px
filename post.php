<?php $this->need('header.php'); ?>
<section id="content">
	<article class="post">
		<div class="date">
				<span class="day"><?php $this->date('d'); ?></span>
				<span class="time"><?php $this->date('M'); ?></span>
		</div>
		<header>
			<h1><?php $this->title() ?></h1>
		</header>
		<p class="entry_data">
				<span><?php _e('分类：'); ?><?php $this->category(','); ?></span>
				<span><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '一个评论', '%d 个评论'); ?></a></span>
			</p>
		<div class="con post-con">
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