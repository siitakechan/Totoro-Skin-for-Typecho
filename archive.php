<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="m">
    <form method="post" id="search" action="./" role="search">
      <div class="I">
        <input type="text" name="s" autocomplete="off" placeholder="搜索 (っ °Д °;)っ">
      </div>
    </form>
    
	<h3 class="archive-title"><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ''); ?></h3>
	<?php if ($this->have()): ?>
	<?php while($this->next()): ?>
    <article class="p">
      <a href="<?php $this->permalink() ?>">
        <h2 class="p-title"><?php $this->title() ?></h2>
        <ul class="p-meta">
          <!--<li><?php $this->category(','); ?></li>-->
          <!--<li><a href="<?php $this->author->permalink(); ?>"><?php $this->author(); ?></a></li>-->
          <li><time><?php $this->date('F j, Y'); ?></time></li>
        </ul>
      </a>
      <div class="p-text">
	    <?php $this->content('- 查看更多 -'); ?>
        <!--p class="more"><a href="#!1">- 查看更多 -</a></p-->
      </div>
    </article>
	<?php endwhile; ?>
	<?php else: ?>
		<ul><li class="banner">没有找到内容！ :(</li></ul>
	<?php endif; ?>
	
    <div id="more"><?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?></div>
  </div>

<?php $this->need('footer.php'); ?>