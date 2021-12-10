@extends('layouts.default')
@section('title', 'Thẻ mượn')
@section('breadcrumb', 'Thẻ mượn')
@section('content')
 <div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h1 align="center">Thêm sách</h1>
<form action="{{route('order.store')}}" method="POST" role="form" enctype="multipart/form-data">
    <legend>Vui lòng nhập thông tin</legend>
    <div class="form-group">
        <div class="form-group">
            <label for="category" class="control-label">Mã độc giả :</label>
            <div class="col-sm-12" id="reader-data">
            </div>
        </div>
        <label for="cre_date">Ngày tạo :</label>
        <input type="date" name="cre_date" id="cre_date" class="form-control" value="" title="">
    </div>
    <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
    <a class="btn btn-success" href="order" role="button" id="btnBackOrder">Back</a>
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
        $.ajax({
             url: "api/reader",
             type : 'GET',
             dataType : 'json',
             success : function(datas){
                var data = '<select  id="reader" name="reader" class="form-control" ><option value="0">Chọn độc giả</option>';
                $.each(datas, function(key, val) {
                    data += `<option value="${val['id']}">${val['id']}</option>`; 
                });
                data+= '</select>';
                $('#reader-data').append(data);
             },
             error : function(){
                 console.log('Lỗi rồi');
             },
             always : function(){
                 console.log('complete');
             }
         });
    });
</script>
@endsection