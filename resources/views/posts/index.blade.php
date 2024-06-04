@extends('layouts.app')
@section('content')
<div class='container'>

<p class="pull-right"><a class="btn btn-success" href="/create-form">投稿する</a></p>
 
<h2 class='page-header'>投稿一覧</h2>

<!-- <form action="{{ route('posts.index') }}" method="GET">
    <input type="text" name="keyword" value="{{ $keyword }}">
</form> -->

 
<table class='table table-hover'>
 
<tr>
 
<th>ユーザー名</th>
 
<th>投稿内容</th>
 
<th>投稿日時</th>

<th></th>
 
</tr>

 
@foreach ($lists as $list)
 
<tr>
 
<td>{{ $list->id }}</td>
 
<td>{{ $list->post }}</td>
 
<td>{{ $list->created_at }}</td>

<td><a class="btn btn-primary" href="/post/{{ $list->id }}/update-form">編集</a></td>

<td><a class="btn btn-danger" href="/post/{{ $list->id }}/delete" onclick="return confirm('こちらの投稿を削除してもよろしいでしょうか？')">削除</a></td>
 
</tr>
 
@endforeach
 
</table>
 
</div>
 
@endsection
