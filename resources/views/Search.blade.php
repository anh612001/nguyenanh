<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

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

	
</body>
</html>
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
