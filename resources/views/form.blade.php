<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>测试表单</title>
	<script type="text/javascript" src="/js/jquery.js"></script>
	<meta name="csrf-token" content="{{csrf_token()}}">
</head>
<body>
	<form action="/test" method="post">
		username :
		<input type="text" name=username"">
		{{csrf_field()}}
		<button>提交</button>
		<a href="/delete?id=3">删除</a>
		<a href="{{route('del')}}">路由别名</a>
	</form>
	<!-- ajax请求 跨站请求伪造 -->
	<button id="but">ajax-post</button>
	<script type="text/javascript">
		$.ajaxSetup({
			headers:{
				'X-CSRF-TOKEN':$('meta[name = csrf-token]').attr('content')
			}
		})
		$('#but').click(function(){
			$.post('/ajax', { }, function(data){
					alert(data);
			})
		})
	</script>
</body>
</html>