<?php
/**
 * 友情链接
 *
 * @package custom
 * @author 香菇(siitake.cn)
 */
$this->need('header.php');?>

<div id="m">
  <ul class="hp c">
	<?php
		$links = json_decode ($this->text, true);
		foreach($links as $key => $value){
			echo '<li class="hr"><h2>'.$key.'</h2></li>';
			foreach($value as $val1){
				echo '<li><a href="//'.$val1['url'].'" target="_blank"><img src="'.$val1['logo'].'"><h3>'.$val1['title'].'</h3><p>'.$val1['desc'].'</p><span>'.$val1['url'].'</span></a> </li>';
			}
		}
	?>
    </ul>
  <div class="banner">异次元任意门</div>
  <?php include('comments.php'); ?>
</div>

<?php $this->need('footer.php'); ?>