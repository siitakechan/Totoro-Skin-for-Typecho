<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $duoshuoId = false; //开启评论请填写多说 shortname，如：$duoshuoId = 'duoshuo'; ?>
<?php if($duoshuoId && $this->allow('comment')): ?>
<!-- 多说评论框 start -->
<div class="ds-thread" data-thread-key="<?php echo $this->slug;?>" data-title="<?php echo $this->title;?>" data-author-key="<?php echo $this->authorId;?>" data-url="<?php echo $this->permalink();?>"></div>
<!-- 多说评论框 end -->
<!-- 多说公共JS代码 start (一个网页只需插入一次) -->
<script type="text/javascript">
var duoshuoQuery = {short_name:"zhebushiwodeduoshuoid"};
var duoshuoBalabala = "<?php echo $duoshuoId; ?>";
duoshuoQuery = {short_name:duoshuoBalabala};
	(function() {
		var ds = document.createElement('script');
		ds.type = 'text/javascript';ds.async = true;
		ds.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') + '//static.duoshuo.com/embed.js';
		ds.charset = 'UTF-8';
		(document.getElementsByTagName('head')[0] 
		 || document.getElementsByTagName('body')[0]).appendChild(ds);
	})();
</script>
<!-- 多说公共JS代码 end -->

<?php else: ?>
<ul><li class="banner">评论已关闭！ :(</li></ul>
<?php endif; ?>