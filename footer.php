<script src="//cdn.bootcss.com/jquery/3.0.0-beta1/jquery.min.js"></script>
<script src="<?php $this->options->themeUrl('main.js'); ?>"></script>
<?php
$jokings = array(
	array("(⊙o⊙)天啦噜要炸辣！", "(/≧▽≦/)哼！原谅你好了！"),
	array("404 Not Found", "(/≧▽≦/)咦？又好啦！"),
	array("(●—●)喔哟，崩溃啦！", "(/≧▽≦/)哈！又好惹！"),
	array("(●\'◡\'●)躲好了哟！", "(/≧▽≦/)哎？找到惹！"),
	array("(⊙_⊙)怎么办！", "(/≧▽≦/)嘿！没事啦！")
	);
$i=array_rand($jokings);
?>
<script>
//代码来自：http://www.ouch.me/    WTF..(￢︿̫̿￢☆)
var OriginTitile = document.title;
var titleTime;
document.addEventListener('visibilitychange', function () {
    if (document.hidden) {
        $('[rel="shortcut icon"]').attr('href', "<?php $this->options->themeUrl('img/warning.ico'); ?>");
        document.title = '<?php echo $jokings[$i][0]; ?>';
        clearTimeout(titleTime);
    }
    else {
        $('[rel="shortcut icon"]').attr('href', "<?php $this->options->themeUrl('img/favicon.ico'); ?>");
        document.title = '<?php echo $jokings[$i][1]; ?>' + OriginTitile;
        titleTime = setTimeout(function () {
            document.title = OriginTitile;
        }, 2000);
    }
});
</script>

</body>
</html>
