@extends('layouts.default')
@section('title', 'Độc giả')
@section('breadcrumb', 'Độc giả')
@section('content')
 <div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h1 align="center">Chỉnh sửa thông tin độc giả</h1>
<form action="{{route('reader.update',[$data->id])}}" method="POST" role="form" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <legend>Vui lòng nhập thông tin</legend>

    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$data->id}}"  readonly />
        <label for="name">Họ tên</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" placeholder="Họ và tên...">
        <label for="">Giới tính</label><br />
        <div class="radio">
            <label>
                <input type="radio" name="gender" id="male" value="Nam" @if($data->gender == 'Nam'){{"checked = 'checked'"}} @endif />
                Nam
            </label>
            <label>
                <input type="radio" name="gender" id="female" value="Nữ" @if($data->gender == 'Nữ'){{"checked = 'checked'"}} @endif style="margin-left: 50px;" />
                Nữ
            </label>
        </div>
        <label for="dOB">Ngày sinh</label>
        <input type="date" name="dOB" id="dOB" class="form-control" value="{{$data->dOB}}" title="">
        <div class="form-group">
            <label for="address" class="control-label">Địa chỉ:</label>
            <div class="col-sm-12">
                <textarea name="address" id="address" class="form-control" rows="3">{{$data->address}}</textarea>
            </div>
        </div>
        <label for="avatar">Ảnh</label>
        <input type="file" class="form-control" id="avatar" name="avatar" />
        <div><img src="images/readers/{{$data->avatar}}" style="max-width: 100px;" id="old_avatar" class="img-responsive" alt="Image" /></div>
        <div class="form-group">
            <label for="faculty" class="control-label">Khoa :</label>
            <div class="col-sm-12" id="data_faculty"></div>
        </div>
        <div class="form-group">
            <label for="classR" class="control-label">Lớp :</label>
            <div class="col-sm-12" id="data_classR">
                <select id="classStudent" name="classStudent" class="form-control" >
                    <option value="{{$data->class_id}}">{{$data->class_title}}</option>`;
                </select>
            </div>
        </div>
        <label for="phone">Số điện thoại</label><span style="color: red;">*</span>
        <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}" placeholder="Số điện thoại...">
        <label for="email">Email</label><span style="color: red;">*</span>
        <input type="text" class="form-control" id="email" name="email" value="{{$data->email}}" placeholder="Email...">

    </div>
    <button type="submit" class="btn btn-primary btnDisable" id="btnSubmit">Submit</button>
    <a class="btn btn-success" href="http://127.0.0.1:8000/reader" role="button">Back</a>
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
            //alert('ok');
            var fID = $('#classStudent').val();
            console.log(fID);
            $.ajax({
             url: "api/classStudent",
             type : 'GET',
             dataType : 'json',
             success : function(datas){
                var data = '<select id="classStudent" name="classStudent" class="form-control" >';
                $.each(datas, function(key, val) {      
                    if (val['id'] == fID) {
                        data += `<option value="${val['id']}" selected='selected'>${val['title']}</option>`; 
                    }
                     else {
                        data += `<option value="${val['id']}" >${val['title']}</option>`; 
                     }   
                });
                data+= '</select>';
                $('#data_classR').html(data);
             },
             error : function(){
                 console.log('Lỗi rồi');
             },
             always : function(){
                 console.log('complete');
             }
         });
            $.ajax({
             url: "http://127.0.0.1:8000/api/faculty",
             type : 'GET',
             dataType : 'json',
             success : function(datas){
                var data = '<select name="" id="faculty" name="faculty" class="form-control" ><option value="0">Chọn khoa</option>';
                $.each(datas, function(key, val) {
                    data += `<option value="${val['id']}">${val['title']}</option>`; 
                });
                data+= '</select>';
                $('#data_faculty').append(data);
             },
             error : function(){
                 console.log('Lỗi rồi');
             },
             always : function(){
                 console.log('complete');
             }
         });
         $(document).on('change', '#faculty', function(e){
            e.preventDefault();
            //alert('ok');
            var fID = $(this).val();
            console.log(fID);
            $.ajax({
                url: "http://127.0.0.1:8000/api/classStudent",
                type : 'GET',
                dataType : 'json',
                success : function(datas){
                    var data = '<select id="classStudent" name="classStudent" class="form-control" >';
                    $.each(datas, function(key, val) {
                        if(val['faculty_id'] == fID) {
                            data += `<option value="${val['id']}">${val['title']}</option>`; 
                        }
                    });
                    data+= '</select>';
                    $('#data_classR').html(data);
                },
                error : function(){
                    console.log('Lỗi rồi');
                },
                always : function(){
                    console.log('complete');
                }
         });
        });
        });
</script>
@endsection