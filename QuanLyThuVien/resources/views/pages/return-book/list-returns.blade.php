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
                 <div class="row justify-content-center">
                <!-- table data start -->
                <table  class="table table-striped table-hover display" style="width:100%">
                    <thead>
                        <th>ID</th>
                        <th>Mã thẻ mượn</th>
                        <th>Sách mượn</th>
                        <th>Cán bộ thực hiện</th>
                        <th>Tình trạng trả</th>
                        <th>Ngày trả</th>
                        <th>Hạn trả sách</th>
                        <th>Thanh toán</th>
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
        url: 'api/returnBook',
        type : 'GET',
        dataType : 'json',

        success : function(datas){
            var data = "";
            $.each(datas, function(key, val) {
                if(val['date_return'] != null){
                    data += `<tr><td>${val['id']}</td><td>${val['order_id']}</td><td>${val['books_title']}</td><td>${val['member_name']}</td><td>${val['status_return']}</td><td>${val['date_return']}</td><td>${val['dead_return']}</td><td>${val['pay']}</td><td>${val['note']}</td><td style="padding-left: 1%;"></td><td ><a href="api/returnBook/${val['id']}/edit" class="btn btn-success"><i class="mdi mdi-account-edit"></i></a></td><td><button class="btn btn-warning btnDeleteOrder" value='${val['id']}'><i class="mdi mdi-delete-sweep"></i></button></td></tr>`; 
                }
                else{
                    data += `<tr><td>${val['id']}</td><td>${val['order_id']}</td><td>${val['books_title']}</td><td>${val['member_name']}</td><td>${val['status_return']}</td><td>${val['date_return']}</td><td>${val['dead_return']}</td><td>${val['pay']}</td><td>${val['note']}</td><td style="padding-left: 1%;"><a href="api/returnBook/${val['id']}" class="btn btn-success"><i class="mdi mdi-book-open"></i></a></td><td ><a href="api/returnBook/${val['id']}/edit" class="btn btn-success"><i class="mdi mdi-account-edit"></i></a></td><td><button class="btn btn-warning btnDeleteOrder" value='${val['id']}'><i class="mdi mdi-delete-sweep"></i></button></td></tr>`; 
                }
                
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
});
$(document).on('click','.btnDeleteOrder', function(e){
    e.preventDefault();
    var id = $(this).val();//id sản phẩm
    var tr = $(this).closest('tr');
    $.ajax({
        url: 'api/returnBook/'+id,
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