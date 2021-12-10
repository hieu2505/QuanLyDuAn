@extends('layouts.default')
@section('title', 'Cán bộ thư viện')
@section('breadcrumb', 'Cán bộ thư viện')
@section('content')
 <div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h1 align="center">Chỉnh sửa thông tin nhân viên</h1>
<form action="{{route('member.update',[$data->id])}}" method="POST" role="form" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <legend>Vui lòng nhập thông tin</legend>
    <div class="form-group">
        <label for="id">ID</label>
        <input type="text" class="form-control" id="id" name="id" value="{{$data->id}}"  readonly />
        <label for="name">Họ tên</label>
        <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}" placeholder="Họ và tên..." />
        <label for="">Giới tính</label>
        <div class="radio">
            <label>
                <input type="radio" name="gender" id="male" value="Nam" @if($data->gender == 'Nam'){{"checked = 'checked'"}} @endif/>
                Nam
            </label>
            <label>
                <input type="radio" name="gender" id="female" value="Nữ" @if($data->gender == 'Nữ'){{"checked = 'checked'"}} @endif style="margin-left: 50px;" />
                Nữ
            </label>
        </div>
        <label for="dOB">Ngày sinh</label>
        <input type="date" name="dOB" id="dOB" class="form-control" value="{{$data->dOB}}" title="" />
        <div class="form-group">
            <label for="address" class="control-label">Địa chỉ:</label>
            <div class="col-sm-12">
                <textarea name="address" id="address" class="form-control" rows="3">{{$data->address}}</textarea>
            </div>
        </div>
        <label for="avatar">Ảnh</label>
        <input type="file" class="form-control" id="avatar" name="avatar" />
        <div><img src="images/members/{{$data->avatar}}" id="old_avatar" class="img-responsive" alt="Image" /></div>
        <label for="phone">Số điện thoại</label><span style="color: red;">*</span>
        <input type="text" class="form-control" id="phone" name="phone" value="{{$data->phone}}" placeholder="Số điện thoại..." />
        <label for="email">Email</label><span style="color: red;">*</span>
        <input type="text" class="form-control" id="email" name="email" value="{{$data->email}}" placeholder="Email..." />

    </div>
    <button type="submit" class="btn btn-primary btnDisable" id="btnSubmit">Submit</button>
    <a class="btn btn-success" href="http://127.0.0.1:8000/member" role="button">Back</a>
</form>
</div>
 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- script start -->
@endsection