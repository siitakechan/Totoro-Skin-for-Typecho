<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<!DOCTYPE HTML>
<!--
所以说这个主题只是香菇在半夜偷偷扒了kokoro而已啊～
更多hentai内容，请关注http://siitake.cn/
-->
<html class="Cr">
<head>
    <meta charset="<?php $this->options->charset(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <meta name="renderer" content="webkit">
    <meta name="viewport" content="user-scalable=no,width=720">

    <title><?php $this->archiveTitle(array(
            'category'  =>  _t('分类 %s 下的文章'),
            'search'    =>  _t('包含关键字 %s 的文章'),
            'tag'       =>  _t('标签 %s 下的文章'),
            'author'    =>  _t('%s 发布的文章')
        ), '', ' - '); ?><?php $this->options->title(); ?></title>

    <!-- 使用url函数转换相关路径 -->
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/style.css'); ?>"/>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/link.css'); ?>"/>
	<link rel="stylesheet" href="<?php $this->options->themeUrl('style.css'); ?>"/>
	<link rel="shortcut icon" href="<?php $this->options->themeUrl('img/favicon.ico'); ?>"/>
	<link rel="apple-touch-icon" href="<?php $this->options->themeUrl('img/favicon.png'); ?>"/>

    <!--[if lt IE 9]>
    <script src="http://cdn.staticfile.org/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.staticfile.org/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

    <!-- 通过自有函数输出HTML头部信息 -->
    <?php $this->header(); ?>
</head>
<body class="home">
<!--[if lt IE 8]>
    <div class="browsehappy" role="dialog"><?php _e('当前网页 <strong>不支持</strong> 你正在使用的浏览器. 为了正常的访问, 请 <a href="http://browsehappy.com/">升级你的浏览器</a>'); ?>.</div>
<![endif]-->

  <header>
    <a href="<?php $this->options->siteUrl(); ?>"><h1><?php $this->options->title() ?></h1></a>
    <p><?php $this->options->description() ?></p>
  </header>
  <nav>
    <a href="<?php $this->options->siteUrl(); ?>"  title="可爱的蓝孩纸" <?php if ($this->is('index')) echo 'class="a logo"'; else echo 'class="logo"'; ?>><img src="<?php $this->options->themeUrl('img/favicon.png'); ?>">香菇</a>
	<?php $this->widget('Widget_Metas_Category_List')->to($categorys); ?>
	<?php while($categorys->next()): ?>
	<a href="<?php $categorys->permalink(); ?>" title="<?php $categorys->description(); ?>" <?php if ($this->is('category', $categorys->slug)) echo 'class="a"'; ?>><img src="<?php $this->options->themeUrl('img/'.$categorys->slug.'.png'); ?>"><?php $categorys->name(); ?></a>
	<?php endwhile; ?>
	<?php $this->widget('Widget_Contents_Page_List')->to($pages); ?>
	<?php while($pages->next()): ?>
	<a href="<?php $pages->permalink(); ?>" title="<?php $pages->title(); ?>" <?php if ($this->is('page', $pages->slug)) echo 'class="a"'; ?>><img src="<?php $this->options->themeUrl('img/'.$pages->slug.'.png'); ?>"><?php $pages->title(); ?></a>
	<?php endwhile; ?>
  </nav>
