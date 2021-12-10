@extends('layouts.default')
@section('title', 'Cán bộ thư viện')
@section('breadcrumb', 'Cán bộ thư viện')
@section('content')
 <div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                @if (Session::get('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Thông báo!</strong> {{ Session::get('message') }}
                </div>
                @endif
                
                <h1 align="center">Thêm nhân viên</h1>
<form action="{{route('member.store')}}" method="POST" role="form" enctype="multipart/form-data">
    <legend>Vui lòng nhập thông tin</legend>

    <div class="form-group">
        <label for="name">Họ tên</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Họ và tên...">
        <label for="">Giới tính</label><br />
        <div class="radio">
            <label>
                <input type="radio" name="gender" id="male" value="Nam" />
                Nam
            </label>
            <label>
                <input type="radio" name="gender" id="female" value="Nam" style="margin-left: 50px;" />
                Nữ
            </label>
        </div>
        <label for="dOB">Ngày sinh</label>
        <input type="date" name="dOB" id="dOB" class="form-control" value="" title="">
        <div class="form-group">
            <label for="address" class="control-label">Địa chỉ:</label>
            <div class="col-sm-12">
                <textarea name="address" id="address" class="form-control" rows="3"></textarea>
            </div>
        </div>
        <label for="avatar">Ảnh</label>
        <input type="file" class="form-control" id="avatar" name="avatar" />
        
        <label for="phone">Số điện thoại</label><span style="color: red;">*</span>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Số điện thoại...">
        <label for="email">Email</label><span style="color: red;">*</span>
        <input type="text" class="form-control" id="email" name="email" placeholder="Email...">

    </div>
    <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
    <a class="btn btn-success" href="http://127.0.0.1:8000/member" role="button">Back</a>
</form>
</div>
 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- script start -->
<script type="text/javascript">
    $(document).ready(function(){
        // $('#btnSubmit').on('click', function() {
        //  var info = {
        //      hoTen : $('#name').val(),
        //      diaChi : $('#address').val(),
        //      lop : $('#classS').val()
        //      }
        //  $.ajax({
        //      url: "api/student",
        //      type : 'POST',
        //      dataType : 'json',
        //      data: info,
        //      success : function(data){
        //          // window.location.href ="http://127.0.0.1:8000/dashboard";

        //      },
        //      error : function(){
        //          console.log('Lỗi rồi');
        //      },
        //      always : function(){
        //          console.log('complete');
        //      }
        //  });
        // });
    });
        
    
</script>
@endsection