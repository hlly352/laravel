<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="home/insert" method="post">
		用户名：
		<input type="text" name=username"">
		<br>
		密码：
		<input type="text" name="password">
		<br>
		{{csrf_field()}}
		<input type="submit" name="" vlaue="提交">
	</form>
	<a href="/home/edit/29">编辑</a>
	<a href="/home/del?id=30">删除</a>
</body>
</html>