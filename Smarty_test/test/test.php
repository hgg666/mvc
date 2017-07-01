<?php  
	require ('../smarty/Smarty.class.php');
	$smarty = new Smarty();
	//Smarty的自编口诀"五配置两方法" 
	//五配置的介绍
	$smarty->left_delimiter = "{";//左定界符
	$smarty->right_delimiter = "}";//右定界符
	$smarty->template_dir = "tpl";//html模板的地址
	$smarty->compile_dir = "template_c";//模板编译生成的文件
	$smarty->cache_dir = "cache";//缓存
	//以下是开启缓存的另两个配置
	$smarty->caching = true;//开启缓存
	$smarty->cache_lifetime = 120;//缓存时间
	
	// $smarty->assign('articletitle','文章标题');
	// $smarty->display('test.tpl');//测试模板文件
	// $smarty->display('area.tpl');//计算矩形面积的模板文件

	// $smarty->assign('time',time());
	// $smarty->display('datetime.tpl');//转换当前时间格式
	
	$smarty->assign('str','Hello，my name is HanMeimei。How are you?');
	$smarty->display('content.tpl');//转换中文的逗号和句号为英文的
?>
