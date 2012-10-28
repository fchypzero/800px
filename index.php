<?php
/**
 * 800px的一款清爽单栏响应式主题！
 * 
 * @package 800px
 * @author cho
 * @version 1.0.0
 * @link http://pagecho.com
 */
 
 $this->need('header.php');
 ?>
<section id="content">
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
		<div class="post">
			<?php $this->pageNav('PRE','NEX',10,'...');?>
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