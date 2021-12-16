<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
</head>
<body>
	<form action="/admin/user" method="post" enctype="multipart/form-data">
		用户名：
		<input type="text" name="username" value="{{old('username')}}">
		<br>
		密码：
		<input type="text" name="password" value="{{old('password')}}">
		<br>
		上传文件：
		<input type="file" name="profile">
		{{csrf_field()}}
		<input type="submit" name="" vlaue="提交">
	</form>
	<a href="/admin/user/20">展示</a>
	<a href="/admin/user/29/edit">编辑</a>
	<form method="post" action="/admin/user/99">
	{{csrf_field()}}
	{{method_field('DELETE')}}

		<button>删除</button>
	</form>
</body>
</html>