@extends('admin.news.index')

@section('title','这是新闻的添加页面')

@section('but')
	<a href="/admin/news">跳转到主页</a>
	
@endsection
@section('content')
	<form action="" method='post'>
		
		用户名: <input type="text">

		<button>提交</button>


	</form>

@endsection