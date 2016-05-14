简介
----

这是移植皮肤，请勿作商业用途！！
这是移植皮肤，请勿作商业用途！！
这是移植皮肤，请勿作商业用途！！

是之前扒的[トトロ博客](http://mouto.org/)的皮肤，因为[@蔡锶铎](http://caisiduo.xyz/)想要所以分享粗来，嗯！

 - 单栏皮肤并且没有真正意义上的footer
 - 浏览器标签标题添加可变动画
 - 添加 archives(归档) & links(友链) 页面模板
 - 使用多说评论框

Q&A
----

 - 问：如何设置/更换导航图片？
   答：导航含文章分类和单页，请将图片命名为{分类或单页的别名}.png，然后放到主题目录下的img/里。
   例：关于页面（about）的图片命名为 about.png 即可。
   注：如果不想使用PNG类型的图片请分别修改header.php文件第49行和53行内容。

 - 问：如何使用 archives(归档) 页面模板？
   答：后台创建页面->自定义模板->选择“全部文章归档”，正文留空填好标题发布即可

 - 问：如何使用 links(链接) 页面模板？
   答：后台创建页面->自定义模板->选择“友情链接”，填好标题正文填写以下JSON格式发布即可

```Json
{
	"小伙伴 ( *・ω・)": [
		{
			"title": "菇主页", 
			"url": "siitake.cn", 
			"desc": "可爱的蓝孩纸", 
			"logo": "http://siitake.cn/usr/themes/mouto/img/favicon.png"
		}, 
		{
			"title": "菇微博", 
			"url": "weibo.com/600120933", 
			"desc": "普通的香菇并没有成精", 
			"logo": "http://tp3.sinaimg.cn/3170193090/180/5755928494/1"
		}
	], 
	"Wo o(^▽^)o": [
		{
			"title": "菇游戏", 
			"url": "steamcommunity.com/id/whchina", 
			"desc": "吃土菇并不能买的起", 
			"logo": "http://ww4.sinaimg.cn/thumb180/3ca38969jw1ecauxw4t3sj20500500sl.jpg"
		}
	]
}
```

 - 问：如何启用多说评论框？
   答：主题默认关闭评论，找到主题的`comments.php`文件，按照如下方式将“false”修改为您的多说 shortname 即可
   注：默认使用的 slug 作为 data-thread-key，请根据需要保留或修改为 cid

```Php
$duoshuoId = false; //开启评论请填写多说 shortname，如：$duoshuoId = 'duoshuo';
```

 - 问：我想自定 CSS 或 JS 怎么办？
   答：推荐不要修改css/和js/等文件夹中的内容，香菇为您在主题目录预留了 style.css 和 main.js 文件以便修改。

其他
----

下载地址：https://github.com/siitakechan/Totoro-Skin-for-Typecho
