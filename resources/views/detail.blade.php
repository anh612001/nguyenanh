<title>Chi tiết</title>
@extends('layout')

<div class="container">
<h1>Thông tin cá nhân</h1>

<h2>{{$detail->name}}</h2>
<p>{{$detail->email}}</p>
<div>Giới thiệu</div>
<form method="get" action="{{ route('addfriend') }}">
	<input type="hidden" name="id" value="{{$detail->id}}">
<div><button type="submit" class="btn btn-primary">Ket ban</button></div>
</form>
</div>
</body>
</html>