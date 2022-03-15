@extends('../layouts/app')
@section('Title','Detail')
@section('content')

<div class="container">
	<h1>Thông tin cá nhân</h1>

	<h2>{{$detail->name}}</h2>
	<p>{{$detail->email}}</p>
	<div>Giới thiệu</div>
	<div>
		@if($status==-1)
			<a class="btn btn-sm btn-danger" onclick="return confirm('Ban co muon gui loi moi ket ban?')" href="{{ route('addfriend',['ID'=>$detail->id]) }}" >Ket ban</a>
		@endif
		@if ($status==0)
				<a class="btn btn-sm btn-info" onclick="return confirm('Ban co huy loi moi ket ban?')" href="{{ route('addfriend',['ID'=>$detail->id]) }}" >Da gui loi moi ket ban</a>
		@endif
		@if ($status==1)
				<a class="btn btn-sm btn-success" onclick="return confirm('Ban co muon huy ket ban?')" href="{{ route('addfriend',['ID'=>$detail->id]) }}" >Ban be</a>
		@endif
    </div>
</div>
@endsection
