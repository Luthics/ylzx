<!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>榆中录取查询系统</title>

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- 百度统计 https://tongji.baidu.com/ -->
	<script>
	var _hmt = _hmt || [];
	(function() {
	var hm = document.createElement("script");
	hm.src = "https://hm.baidu.com/hm.js?20ba526a0f5189c5b85e8a9565e87dd3";
	var s = document.getElementsByTagName("script")[0]; 
	s.parentNode.insertBefore(hm, s);
	})();
	</script>

  </head>
  <body>
	<div class="container">
		<div class="row clearfix">
			<div class="col-md-12 column">
				<div class="jumbotron">
					<!-- 由 Luthics 开发 -->
					<h1>
						欢迎来到榆中录取查询系统
					</h1>
					<p>
						该系统由 Luthics 开发，所有数据均来自榆中官网，仅供方便查询使用，请勿将数据用于其他用途。
					</p>
					<form action="api.php" method="get">
						<div style="margin: 0px ; padding: 0px">
							<div class="row">
								<div class="col-lg-8">
									<p>
										输入<b>关键词</b>来搜索：  
									</p>
									<div style="color:#808080">
										<b>关键词</b>可以是：中考网报号、准考证号、姓名、性别、初中毕业学校，支持模糊搜索，留空将查询全部
									</div>
									<br>
									<div class="input-group">
										<input type="text" class="form-control" name="res" size=30px>
									</div>
									<br> 
									<input type="submit" value="提交">
									<?php
										//$file="api.php";
										//require $file;
									?>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
    <!-- jQuery (Bootstrap 的所有 JavaScript 插件都依赖 jQuery，所以必须放在前边) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@1.12.4/dist/jquery.min.js"></script>
    <!-- 加载 Bootstrap 的所有 JavaScript 插件。你也可以根据需要只加载单个插件。 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
  </body>
</html>