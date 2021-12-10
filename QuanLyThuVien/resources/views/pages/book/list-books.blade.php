@extends('layouts.default')
@section('title', 'Sách')
@section('breadcrumb', 'Sách')
@section('content')
<div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <!-- Button add -->
                <button type="button" class="btn btn-primary" id="btnAdd"><i class="mdi mdi-plus-circle-outline"></i>ADD</button>

                 <div class="row justify-content-center" >
                <!-- table data start -->
                <table id="book-data" class="table table-striped table-hover" style="width:100%">
                    <thead>
                        <th>ID</th>
                        <th>Tên sách</th>
                        <th>Thể loại</th>
                        <th>NXB</th>
                        <th>Kho sách</th>
                        <th>Ảnh</th>
                        <th>Tác giả</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th colspan="3" style="padding-left: 2%;">Action</th>
                    </thead>
                    <tbody id="data-books"></tbody>
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
        url: 'api/book',
        type : 'GET',
        dataType : 'json',

        success : function(datas){
            var data = "";
            var pageNumber = "";
            $.each(datas, function(key, val) {
                data += `<tr><td>${val['id']}</td><td>${val['title']}</td><td>${val['category_title']}</td><td>${val['publisher']}</td><td>${val['storage_title']}</td><td><img style="max-width: 80px;" src="images/books/${val['avatar']}" class="img-responsive" alt="Image"></td><td>${val['author']}</td><td>${val['number']}</td><td>${val['price']}</td><td style="padding-left: 1%;"><a href="book-detail?id=${val['id']}" class="btn btn-success"><i class="mdi mdi-book-open"></i></a></td><td><a href="api/book/${val['id']}/edit" class="btn btn-success"><i class="mdi mdi-account-edit"></i></a></td><td><button class="btn btn-warning btnDelete" value='${val['id']}'><i class="mdi mdi-delete-sweep"></i></button></td></tr>`; 
            });
            $('#data-books').append(data);
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
        window.location.href="{{route('book.create')}}";
    });
});
$(document).on('click','.btnDelete', function(e){
    e.preventDefault();
    var id = $(this).val();//id sản phẩm
    var tr = $(this).closest('tr');
    $.ajax({
        url: 'http://127.0.0.1:8000/api/book/'+id,
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