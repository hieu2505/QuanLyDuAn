@extends('layouts.default')
@section('title', 'Độc giả')
@section('breadcrumb', 'Độc giả')
@section('content')
 <div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <!-- Button add -->
                <button type="button" class="btn btn-primary btnDisable" id="btnAdd">ADD</button>

                 <div class="row justify-content-center">
                <!-- table data start -->
                <table id="example" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Giới tính</th>
                        <th>Ngày sinh</th>
                        <th>Địa chỉ</th>
                        <th>Ảnh</th>
                        <th>Lớp</th>
                        <th>Khoa</th>
                        <th>SDT</th>
                        <th>Email</th>                      
                        <th colspan="2" style="padding-left: 5%;">Action</th>
                    </thead>
                    <tbody id="data-members"></tbody>
                </table>

                <!-- table data end -->

                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- script start -->
<script type="text/javascript">
    $(function() {
    // Read data start
    $.ajax({
        url: 'api/reader',
        type : 'GET',
        dataType : 'json',

        success : function(datas){
            var data = "";
            $.each(datas, function(key, val) {
                data += `<tr><td>${val['id']}</td><td>${val['name']}</td><td>${val['gender']}</td><td>${val['dOB']}</td><td>${val['address']}</td><td><img style="max-width: 80px;" src="images/readers/${val['avatar']}" class="img-responsive" alt="Image"></td><td>${val['class_title']}</td><td>${val['faculty_title']}</td><td>${val['phone']}</td><td>${val['email']}</td><td style="padding-left: 2%;"><a href="api/reader/${val['id']}/edit" class="btn btn-success"><i class="mdi mdi-account-edit"></i></a></td><td><button class="btn btn-warning btnDeleteReader" value='${val['id']}'><i class="mdi mdi-delete-sweep"></i></button></td></tr>`; 
            });
            $('#data-members').append(data);
        },
        error : function(){
            console.log('error');
        },
        always : function(){
            console.log('complete');
        }
    });
    // Read data end
    $('#btnAdd').on('click', function(){
        window.location.href="{{route('reader.create')}}";
    });
    
});
$(document).on('click','.btnDeleteReader', function(e){
    e.preventDefault();
    var id = $(this).val();//id sản phẩm
    var tr = $(this).closest('tr');
    $.ajax({
        url: 'api/reader/'+id,
        type : 'DELETE',
        success : function(data){
            tr.remove();
        },
        error : function(){
            console.log('error');
        },
        always : function(){
            console.log('complete');
        }
    });
   }); 
</script>
@endsection