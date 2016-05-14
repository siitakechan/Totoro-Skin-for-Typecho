<?php
/**
 * 这是仿自トトロ博客的一套皮肤
 * 
 * @package Totoro Skin for Typecho
 * @author 香菇
 * @version 1.0
 * @link http://siitake.cn
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
 $this->need('header.php');
 ?>
  <div id="m">
    <form method="post" id="search" action="./" role="search">
      <div class="I">
        <input type="text" name="s" autocomplete="off" placeholder="搜索 (っ °Д °;)っ">
      </div>
    </form>
    
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
    
    <div id="more"><?php $this->pageNav('&laquo; 前一页', '后一页 &raquo;'); ?></div>
  </div>

<?php $this->need('footer.php'); ?>