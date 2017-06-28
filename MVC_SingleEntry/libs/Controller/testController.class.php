<?php 
	// 控制器获取模型和视图,模型是用来获取数据,视图是来输出数据
	class testController{
		function show(){
			$testModel = M('test');
			$data = $testModel -> get();
			$testView = V('test');
			$testView -> display($data);
		}
	}
?>