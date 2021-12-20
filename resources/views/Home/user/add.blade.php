<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<script type="text/javascript" src="/js/jquery.js "></script>
	<meta name="csrf-token" content="{{csrf_token()}}">
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

	<button id="buts">ajax返回</button>
	<script type="text/javascript">
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN':$('meta[name = csrf-token]').attr('content')
			}
		})
		$('#buts').click(function(){
			$.post('/admin/res', {'name':'chuan','age':'03'}, function(res){
				console.log(res);
			})
		})
	</script>
	@if (session('success'))
		<div class="alert alert-success">
			{{session('success')}}
		</div>
	@endif
</body>
</html>