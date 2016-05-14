<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>

<div id="m">
    <form method="post" id="search" action="./" role="search">
      <div class="I">
        <input type="text" name="s" autocomplete="off" placeholder="搜索 (っ °Д °;)っ">
      </div>
    </form>
	<ul><li class="banner">页面没找到！ :(</li></ul>
</div>

<?php $this->need('footer.php'); ?>