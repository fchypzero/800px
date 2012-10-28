<div class="sidebar-col1">
<?php if ($this->is('post')): ?>
	<?php $this->related(4)->to($relatedPosts); ?>
		<?php if ($this->related(4)->have()): ?>
			<div class="block">
				<h3><?php _e('相关文章'); ?></h3> 
					<ul>
						<?php while ($relatedPosts->next()): ?>
						<li><a href="<?php $relatedPosts->permalink(); ?>" title="<?php $relatedPosts->title(); ?>"><?php $relatedPosts->title(); ?></a></li>
						<?php endwhile; ?>	
					</ul>
			</div>
		<?php else: ?>
				<div class="block">
					<h3><?php _e('最新文章'); ?></h3> 
					<ul class="postpage-recent">
						<?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
					</ul> 
				</div>
		<?php endif; ?>
<?php else: ?>
	
	<div class="block">
		<h3><?php _e('最新文章'); ?></h3> 
		<ul>
			<?php $this->widget('Widget_Contents_Post_Recent')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
		</ul> 
	</div>
<?php endif; ?>
</div>

<div class="sidebar-col2">
<div class="clear"></div>
	<div class="block bicolumn"><h3><?php _e('文章归档'); ?></h3> 
			<ul> 
				<?php $this->widget('Widget_Contents_Post_Date', 'type=month&format=Y-m')
				->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
			</ul> 
	</div>

<div class="clear"></div>
</div>
<?php if ($this->is('index')): ?>
<div class="sidebar-col4">
<div class="block links bicolumn"><h3><?php _e('有情链接'); ?></h3> 
	<ul> 
	<li><a href="http://perthshire.blogbus.com/">SLEY</a></li>
    <li><a href="http://21du.cn/">21du</a></li>
	<li><a href="http://www.webcoeus.com/">WEBCOEUS</a></li>
	<li><a href="http://yydd.be/">DEEF</a></li>
	</ul>
</div>
</div>
<?php else: ?>
	<style>.sidebar-col2{width: 261px;}</style>
<?php endif; ?>
<div class="sidebar-col3">
			<div class="hdavatar">
				<img src="http://m1.img.libdd.com/farm5/8/F6F5425306A6C88472BA398473043608_180_220.PNG" alt="avator" />
             </div>
</div>
<div class="clear"></div> 