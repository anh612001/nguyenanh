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
       
        	
        </div>
{{ csrf_field() }}
    </div>
</div>
<script>
    var _token = $('input[name="_token"]').val();
    var received_id='';
    var my_id="{{ Auth::id() }}";
    $(document).ready(function(){
    	// Enable pusher logging - don't include this in production
	    Pusher.logToConsole = true;

	    var pusher = new Pusher('efbaeaa2af757aa92e74', {
	      cluster: 'ap1'
	    });

	    var channel = pusher.subscribe('my-channel');
	    channel.bind('my-event', function(data) {
	      alert(JSON.stringify(data));
	    });


        $('.user').click(function(){
            $('.user').removeClass('active');
            $(this).addClass('active');
            received_id=$(this).attr('id');
            $.ajax({
                method: "post",
                url:"{{ route('getmessage') }}",
                data:{id:received_id, _token:_token},
                success: function(data){
                    $('#messages').html(data);
                }
            });
        });

        $(document).on('keyup','.input-text input',function(e){
            var message=$(this).val();
            if(message!='' && e.keyCode==13 && received_id!=''){
                $(this).val('');
                
                $.ajax({
                	method:"Post",
                	url:" {{ route('message') }}",
                	data:{received_id:received_id,message:message,_token:_token},
                	success: function(data){
                		alert(data);
                	},
                	error: function(jqXHR,status,err){

                	},
                	complete:function(){

                	}
                })
            }
        });
    });

</script>
@endsection