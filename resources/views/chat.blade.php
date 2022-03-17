@extends('layouts.app')
@section('Title','Chat')
@section('header')
<link rel="stylesheet" href="{{ asset('css/chat.css') }}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="user-wraper">
            	<ul class="users">
            		@foreach($listfriend as $friend)
	            		<li class="user" id='{{ $friend->id}}'>
	            			<span class="pending">1</span>

	            			<div class="media">
	            				<div class="media-left">
	            					<img src="{{ asset('image/anh.jpg') }}" alt="" class="media-object">
	            				</div>

	            				<div class="media-body">
	            					<p class="name">{{ $friend->name }}</p>
	            					<p class="mail">{{ $friend->email }}</p>
	            				</div>
	            			</div>
	            		</li>
            		@endforeach
            		
            	</ul>          	
            </div>
        </div>

        <div class="col-md-8" id="messages">
        	<div class="message-wraper">
        		<ul class="messages">
					<li class="message clearfix">
						<div class="sent">
							<p>hoeeel   sd d </p>
							<p class="date">16 March 2022</p>
						</div>
					</li>
					<li class="message clearfix">
						<div class="received">
							<p>hoeeeld </p>
							<p class="date">16 March 2022</p>
						</div>
					</li>

					<li class="message clearfix">
						<div class="sent">
							<p>hoeeeld </p>
							<p class="date">16 March 2022</p>
						</div>
					</li>
					<li class="message clearfix">
						<div class="received">
							<p>hoeeeld </p>
							<p class="date">16 March 2022</p>
						</div>
					</li>

					<li class="message clearfix">
						<div class="sent">
							<p>hoeeeld </p>
							<p class="date">16 March 2022</p>
						</div>
					</li>
					<li class="message clearfix">
						<div class="received">
							<p>hoeeeld </p>
							<p class="date">16 March 2022</p>
						</div>
					</li>

					<li class="message clearfix">
						<div class="sent">
							<p>hoeeeld </p>
							<p class="date">16 March 2022</p>
						</div>
					</li>
					<li class="message clearfix">
						<div class="received">
							<p>hoeeeld </p>
							<p class="date">16 March 2022</p>
						</div>
					</li>
				</ul>
        	</div>

        	<div class="input-text">
        		<input type="text" name="message" id='chat' class="submit">
        	</div>
        </div>
{{ csrf_field() }}
    </div>
</div>
<script>
	var _token = $('input[name="_token"]').val();
	var received_id='';
	var my_id="{{ Auth::id() }}";
	$(document).ready(function(){
		$('.user').click(function(){
			$('.user').removeClass('active');
			$(this).addClass('active');
			received_id=$(this).attr('id');
			$.ajax({
				method: "post",
				url:"{{ route('getmessage') }}",
				data:{id:received_id, _token:_token},
				success: function(data){
					alert(data);
				}
			});
		});
	});
</script>
@endsection