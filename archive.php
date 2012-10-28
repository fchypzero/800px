<?php $this->need('header.php'); ?>
	<section id="content" class="archive-page">
		<?php if ($this->have()): ?>
		<header><h2 class="archivetitle"><?php $this->archiveTitle('-', '', ''); ?></h2></header>
        <?php while($this->next()): ?>
		<article class="post">
			<div class="date">
				<span class="day"><?php $this->date('d'); ?></span>
				<span class="time"><?php $this->date('M'); ?></span>
			</div>
			<header>
				<h2><a href="<?php $this->permalink() ?>"><?php $this->title() ?></a></h2>
			</header>
			<p class="entry_data">
				<span><?php _e('分类：'); ?><?php $this->category(','); ?></span>
				<span><a href="<?php $this->permalink() ?>#comments"><?php $this->commentsNum('暂无评论', '一个评论', '%d 个评论'); ?></a></span>
			</p>
			<div class="con">
				<?php $this->content('继续阅读'); ?>
			</div>
		</article>
		<?php endwhile; ?>
		<?php else: ?>
			 <header><h2 class="archivetitle">“<?php $this->archiveTitle('-', '', ''); ?>” 该时间下没有可以显示的文章</h2></header>
			 <div class="post">
				<div class="con">
					尝试看看其他时间下的文章归档吧。
				</div>
			</div>
		<?php endif; ?>
		<div class="post"><?php $this->pageNav('PRE','NEX',10,'...');?></div>
	</section>
	<div class="clear"></div>
	</div>
<aside class="sidebar">
	<div class="hdwrap">
	<?php $this->need('sidebar.php'); ?>
	</div>
</aside>
	<div class="clear"></div>
<?php $this->need('footer.php'); ?>

