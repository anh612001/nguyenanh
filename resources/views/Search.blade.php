<title>Tìm kiếm</title>
@extends('layout')
Hello1

<div class="container">
    <div class="row justify-content-center">

      <form action="" method="get">
			    <div class="input-group">
			      <input type="text" class="form-control" id="search" placeholder="Search..." name="search" value="{{(isset($_GET['search'])) ? $_GET['search']: ''}}">
			      <div class="input-group-btn">
			        <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
			        <div id="nameList"><br>
			      </div>
			    </div>
			</form>

    </div>
</div>     <br/><br/>
<div class="container-fluid">
  @if(!empty($user))
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>Tên</th>
          <th>Tùy chọn</th>
        </tr>
      </thead>
      <tbody>
          @foreach ($user as $item)
          <tr>
            <td><a href="detail/{{$item->id}}">{{$item->name}}</td>
            <td><button>Kết bạn</button></td>
          </tr>
          @endforeach
      </tbody> 
    </table>
  @endif
</div>

	
</body>
</html>
<script>
 //  $(document).ready(function(){

 //   $('#search').keyup(function(){ 
 //    var query = $(this).val(); 
 //    if(query != '') 
 //    {
 //     var _token = $('input[name="_token"]').val(); 
 //     $.ajax({
 //      url:"{{ route('search') }}",
 //      method:"POST", // phương thức gửi dữ liệu.
 //      data:{query:query, _token:_token},
 //      success:function(data){ //dữ liệu nhận về
 //       $('#nameList').fadeIn();  
 //       $('#nameList').html(data); 
 //     }
 //   });
 //   }
 // });

 //   $(document).on('click', 'li', function(){  
 //    $('#search').val($(this).text());  
 //    $('#nameList').fadeOut();  
 //  });  

 // });
</script>
