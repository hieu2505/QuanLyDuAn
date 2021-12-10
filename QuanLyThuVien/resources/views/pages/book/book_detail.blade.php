@extends('layouts.default')
@section('title', 'Book')
@section('breadcrumb', 'Book')
@section('content')
<div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="mt-4"> <img src="" class="" id="avatar" width="150" />
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Tên sách</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="" id="title" class="form-control ps-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Tác giả</label>
                                        <div class="col-md-12">
                                            <input type="email" class="form-control ps-0 form-control-line" name="example-email" id="author">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Nhà xuất bản</label>
                                        <div class="col-md-12">
                                            <input type="text"class="form-control ps-0 form-control-line" id="publisher">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">ISBN</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control ps-0 form-control-line" id="isbn">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Mô tả</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control ps-0 form-control-line" id="description"></textarea>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <a class="btn btn-success" href="book" role="button">Back</a>
                    <!-- Column -->
                </div>
<script type="text/javascript">
    $(document).ready(function(){
        //alert({{$_GET['id']}});
        $.ajax({
        url: 'api/book/'+{{$_GET['id']}},
        type : 'GET',
        dataType : 'json',
        success : function(datas){
            $('#avatar').attr('src', 'images/books/'+datas['avatar']);
            $('#title').attr('value', datas['title']);
            $('#author').attr('value', datas['author']);
            $('#publisher').attr('value', datas['publisher']);
            $('#isbn').attr('value', datas['isbn']);
            $('#description').html(datas['description']);
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