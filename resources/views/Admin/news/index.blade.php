<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>@yield('title')</title>

	<style type="text/css">
		table,td{font-family:微软雅黑;text-align:center;}
		h3{font-family:微软雅黑;}
		.cur{width:100px;}
		.ids{width:50px;}
	</style>
</head>
<body>
	<center>
		@include('admin/news/menu')		
		
		@section('but')
		<button onclick="location.href='/admin/add'">添加</button>
		<a href="/admin/edit">修改</a>
		@show


		@section('content')
		<h3>浏览新闻</h3>

		<table border='1' width='980'>
			<tr>
				<th class='ids'>新闻ID</th><th class='cur'>新闻标题</th><th class='cur'>新闻关键字</th><th class='cur'>作者</th><th>新闻内容</th><th class='cur'>新闻日期</th><th class='cur'>操作</th>
			</tr>


		</table>
		@show

		
	</center>	
</body>
</html>