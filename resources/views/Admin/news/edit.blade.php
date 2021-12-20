@extends('admin.news.index')

@section('title','这是新闻的修改页面')

@section('but')
	<a href="/admin/news">主页</a>
@stop

@section('content')
	{{--if条件判断--}}
	<h3>这是修改的信息</h3>
	@if($status == 'open')
		<div>打开</div>
	@else
		<div>关闭</div>
	@endif
{{--for循环--}}
	@for ($i = 0; $i < 10; $i++)
	    The current value is {{ $i }}<br>
	@endfor
{{--foreach遍历--}}
	@foreach ($arr as $k => $v)
	    <p>This is user {{ $v }}</p>
	@endforeach

	{{-- 此注释将不会出现在渲染后的 HTML --}}

	{{-- <h2>{{$user}}</h2> --}}

	@php

		var_dump('这是php语言直接输出');

	@endphp



@stop




