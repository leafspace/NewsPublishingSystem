<!doctype html>
<html lang="zh-CN">
	<head>
		<title>新闻发布系统</title>
		<link rel="stylesheet" type="text/css" href="css/froala_editor.min.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.4.6.0.css">
		<style>
			body { text-align: center; }
			section { width: 80%; margin: auto; text-align: left; }
			.button { width: 80px; height: 40px; margin-right: 10px; float: right; color: #ffffff; background-color: #009100; line-height: 40px; text-align: center; }
			.button:hover{ background:#00EC00; }
		</style>
		<meta charset="utf-8">
		<meta name="renderer" content="webkit">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="icon" href="images/logo.ico" type="image/x-icon" />
		<link rel="shortcut icon" href="images/logo.ico" type="image/x-icon" />
		
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/nprogress.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	</head>

	<body>
		<header class="header">
			<nav class="navbar navbar-default" id="navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-navbar" aria-expanded="false"> 
							<span class="sr-only"></span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
							<span class="icon-bar"></span> 
						</button>
						<h1 class="logo hvr-bounce-in"><a href="index.php" title="在线新闻发布系统"><img src="" alt="在线新闻发布系统"></a></h1>
					</div>
					<div class="collapse navbar-collapse" id="header-navbar">
						<form class="navbar-form visible-xs" action="/Search" method="post">
							<div class="input-group">
								<input type="text" name="keyword" class="form-control" placeholder="请输入关键字" maxlength="20" autocomplete="off">
								<span class="input-group-btn">
									<button class="btn btn-default btn-search" name="search" type="submit">搜索</button>
								</span> 
							</div>
						</form>
						<ul class="nav navbar-nav navbar-right">
							<li><a data-cont="在线新闻发布系统" title="在线新闻发布系统" href="index.php">首页</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		
		<section id="editor" style="margin:0 auto;">
			<form id="editForm" action="php/editUpdate.php" method="post">
				<div style="width:100%; height: 30px; margin-top: 10px;">
					<span style="font-size:18px">标题：</span>
					<input type="text" name="title" style="width:95%; height:100%;" />
				</div>
				<div id='edit' style="margin-top: 15px;"></div>

				<input type="text" id="innerCode" name="innerCode" style="width:100%; height:120px;"/>
				<div style="width:100%; height: 60px; margin-top: 10px;">
					<div class="button" onclick="submitForm();">提交</div>
				</div>
			</form>
		</section>

		<footer class="footer" style="position: fixed; bottom: 0; width: 100%; ">
			<div class="container"><p>Copyright &copy; 2016.Company name All rights reserved.<a target="_blank" href="index.php">在线新闻提交系统</a></p></div>
			<div id="gotop"><a class="gotop"></a></div>
		</footer>
	</body>

	<script type="text/javascript" src="js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="js/froala_editor.min.js"></script>
	<!--[if lt IE 9]>
	<script src="../js/froala_editor_ie8.min.js"></script>
	<![endif]-->
	<script type="text/javascript" src="js/plugins/tables.min.js"></script>
	<script type="text/javascript" src="js/plugins/lists.min.js"></script>
	<script type="text/javascript" src="js/plugins/colors.min.js"></script>
	<script type="text/javascript" src="js/plugins/media_manager.min.js"></script>
	<script type="text/javascript" src="js/plugins/font_family.min.js"></script>
	<script type="text/javascript" src="js/plugins/font_size.min.js"></script>
	<script type="text/javascript" src="js/plugins/block_styles.min.js"></script>
	<script type="text/javascript" src="js/plugins/video.min.js"></script>

	<script>
		$(function(){
			$('#edit').editable({inlineMode: false, alwaysBlank: true})
		});

		function submitForm() {
			var innerCode = document.getElementById("edit").innerHTML;
			document.getElementById("innerCode").value = innerCode;
			document.getElementById('editForm').submit();
		}
	</script>
</html>
