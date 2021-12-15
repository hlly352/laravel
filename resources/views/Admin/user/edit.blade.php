<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="/admin/user/33" method="post">
		用户名：
		<input type="text" name=username"">
		<br>
		密码：
		<input type="text" name="password">
		<br>
		{{csrf_field()}}
		{{method_field('PUT')}}
		<!-- <input type="hidden" name=_method"" value="PUT"> -->
		<input type="submit" name="" vlaue="提交">
	</form>
</body>
</html>