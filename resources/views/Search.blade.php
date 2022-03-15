@extends('layouts.app')
@section('Title','Search')
@section('content')
<body>
  <div class="container box">
   <h3 align="center">Tim kiem</h3><br />
   
   <div class="form-group">
    <input type="text" name="search" id="search" class="form-control input-lg" placeholder="Enter Name" />
    <div id="nameList">
    </div>
   </div>
   {{ csrf_field() }}
  </div>

	

<script>
  $(document).ready(function(){

   $('#search').keyup(function(){ 
    var query = $(this).val(); 
    if(query != '') 
    {
     var _token = $('input[name="_token"]').val(); 
     $.ajax({
      url:"{{ route('search') }}",
      method:"POST", 
      data:{query:query, _token:_token},
      success:function(data){ 
       $('#nameList').fadeIn();  
       $('#nameList').html(data); 
     }
   });
   }
 });

   $(document).on('click', 'li', function(){  
    $('#search').val($(this).text());  
    $('#nameList').fadeOut();  
  });  

 });
</script>
@endsection