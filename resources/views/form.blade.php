<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>测试表单</title>
</head>
<body>
	<form action="/test" method="post">
		username :
		<input type="text" name=username"">
		{{csrf_field()}}
		<button>提交</button>
	</form>
</body>
</html>