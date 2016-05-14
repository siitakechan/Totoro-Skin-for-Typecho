<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>


<div id="m">
	<article class="p">
		<h2 class="p-title"><?php $this->title() ?></h2>
		<ul class="p-meta">
			<!--<li><?php $this->category(','); ?></li>-->
			<!--<li><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></li>-->
			<li><time><?php $this->date('F j, Y'); ?></time></li>
		</ul>
		<div class="p-text">
			<?php $this->content(); ?>
		</div>
	</article>
	<?php include('comments.php'); ?>
</div>

<?php $this->need('footer.php'); ?>