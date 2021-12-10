@extends('layouts.default')
@section('title', 'Trả sách')
@section('breadcrumb', 'Trả sách')
@section('content')
 <div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <h1 align="center">Trả sách</h1>
                    <form action="{{route('returnBook.update',[$data->id])}}" method="POST" role="form" >
                        @method('PUT');
                        @csrf
                        <legend>Vui lòng nhập thông tin</legend>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="order-data" class="control-label">Mã thẻ mượn :</label>
                                <div class="col-sm-12" id="order-data">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="book-data" class="control-label">Sách :</label>
                                <div class="col-sm-12" id="book-data">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="member-data" class="control-label">Cán bộ thực hiện :</label>
                                <div class="col-sm-12" id="member-data">
                                </div>
                            </div>
                            <label for="status_borrow">Tình trạng mượn</label>
                            <input type="text" class="form-control" id="status_borrow" placeholder="Tình trạng mượn..." readonly value="{{$data->status_borrow}}"/>
                            <label for="status_borrow">Tình trạng trả</label>
                            <input type="text" class="form-control" id="status_borrow" name="status_return" placeholder="Tình trạng trả..." value="{{$data->status_return}}">
                            <label for="date_return">Ngày trả :</label>
                            <input type="datetime-local" name="date_return" id="date_return" class="form-control" value="{{strftime('%Y-%m-%dT%H:%M:%S', strtotime($data->date_return))}}" title="">
                            <label for="dead_return">Ngày phải trả :</label>
                            <input type="datetime" name="dead_return" id="dead_return" class="form-control" value="{{$data->dead_return}}" readonly title="">
                            <label for="pay">Thanh toán:</label>
                            <input type="text" class="form-control" id="pay" name="pay" placeholder="Thanh toán...">
                            <div class="form-group">
                                <label for="note" class="control-label">Ghi chú:</label>
                                <div class="col-sm-10">
                                    <textarea name="note" id="note" class="form-control" rows="3" >{{$data->note}}</textarea>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
                        <a class="btn btn-success" href="return-book" role="button" id="btnBackOrder">Back</a>
                    </form>
            </div>
        </div>
    </div>
</div>
<!-- script start -->
<script type="text/javascript">
        $(document).ready(function(){
        $.ajax({
             url: "api/order",
             type : 'GET',
             dataType : 'json',
             success : function(datas){
                var data = '<select  id="order_id" name="order_id" class="form-control" disabled>';
                $.each(datas, function(key, val) {
                    if (val['id'] == {{$data->order_id}}) {
                        data += `<option value="${val['id']}" selected='selected'>${val['id']}</option>`; 
                    }
                    
                });
                data+= '</select>';
                $('#order-data').append(data);
             },
             error : function(){
                 console.log('Lỗi rồi');
             },
             always : function(){
                 console.log('complete');
             }
         });
        $.ajax({
             url: "api/book",
             type : 'GET',
             dataType : 'json',
             success : function(datas){
                var data = '<select  id="return-book" name="return-book"  class="form-control" readonly>';
                $.each(datas, function(key, val) {
                    if (val['id'] == {{$data->book_id}}) {
                        data += `<option value="${val['id']}" selected='selected'>${val['title']}</option>`; 
                    }
                    
                });
                data+= '</select>';
                $('#book-data').append(data);
             },
             error : function(){
                 console.log('Lỗi rồi');
             },
             always : function(){
                 console.log('complete');
             }
         });
        $.ajax({
             url: "api/member",
             type : 'GET',
             dataType : 'json',
             success : function(datas){
                var data = '<select  id="member-return" name="member-return" class="form-control" ><option value="0">Chọn cán bộ</option>';
                $.each(datas, function(key, val) {
                    data += `<option value="${val['id']}">${val['name']}</option>`; 
                });
                data+= '</select>';
                $('#member-data').append(data);
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