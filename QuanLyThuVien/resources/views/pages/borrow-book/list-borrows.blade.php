@extends('layouts.default')
@section('title', 'Muợn sách')
@section('breadcrumb', 'Mượn sách')
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
                <table  class="table table-striped table-hover display" style="width:100%">
                    <thead>
                        <th>ID</th>
                        <th>Mã thẻ mượn</th>
                        <th>Sách mượn</th>
                        <th>Cán bộ thực hiện</th>
                        <th>Tình trạng mượn</th>
                        <th>Ngày mượn</th>
                        <th>Hạn trả sách</th>
                        <th>Ghi chú</th>
                        <th colspan="3" style="padding-left: 5%;">Action</th>
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
        url: 'api/borrow',
        type : 'GET',
        dataType : 'json',

        success : function(datas){
            var data = "";
            var pageNumber = "";
            $.each(datas, function(key, val) {
                data += `<tr><td>${val['id']}</td><td>${val['order_id']}</td><td>${val['books_title']}</td><td>${val['member_name']}</td><td>${val['status_borrow']}</td><td>${val['date_borrow']}</td><td>${val['dead_return']}</td><td>${val['note']}</td><td ><a href="api/borrow/${val['id']}/edit" class="btn btn-success"><i class="mdi mdi-account-edit"></i></a></td><td><button class="btn btn-warning btnDeleteOrder" value='${val['id']}'><i class="mdi mdi-delete-sweep"></i></button></td></tr>`; 
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
        window.location.href="{{route('borrow.create')}}";
    });
});
$(document).on('click','.btnDeleteOrder', function(e){
    e.preventDefault();
    var id = $(this).val();//id sản phẩm
    var tr = $(this).closest('tr');
    $.ajax({
        url: 'api/order/'+id,
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