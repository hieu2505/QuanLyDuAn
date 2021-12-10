@extends('layouts.default')
@section('title', 'Sách')
@section('breadcrumb', 'Sách')
@section('content')
 <div class="row">
    <!-- column -->
    <div class="col-sm-12">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div>
                            <label for="inputSearch" class="control-label">Tìm kiếm sách ISBN:</label>
                        </div>
                        
                        <div class="col-sm-8">
                            <input type="search" name="search" id="inputSearch" class="form-control" value="" required="required" title="">
                        </div>
                        <div class="col-sm-2">
                            <button type="button" id="btnSearch" class="btn btn-success">Search</button>
                        </div>
                    </div>
                </div>
                <div class="book-list" >
                    <h2 class="text-center">Search Result</h2>
                    <div id="list-output" class="">
                      <div class="row">
                        <!-- card  -->
                        <div class="row mt-4">
                            <div class="col-lg-6">
                               <div class="card" style="">
                                 <div class="row no-gutters">
                                   <div class="col-md-4">
                                     <img  class="card-img" alt="..." id="avatar_book">
                                   </div>
                                   <div class="col-md-8">
                                     <div class="card-body">
                                       <h5 class="card-title" id="title_book"></h5>
                                       <p class="card-text" id="author_book">Author: </p>
                                       <p class="card-text" id="publisher_book">Publisher: </p>
                                       <button type="button" class="btn btn-primary" id="btnAddBook"><i class="mdi mdi-plus-circle-outline"></i>ADD</button>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>
                        </div>
                      </div>

                    </div>
              </div>    
                <h1 align="center">Thêm sách</h1>
<form action="{{route('book.store')}}" method="POST" role="form" enctype="multipart/form-data">
    <legend>Vui lòng nhập thông tin</legend>

    <div class="form-group">
        <label for="title">Tên sách</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Tên sách...">
        <label for="author">Tác giả</label>
        <input type="text" name="author" id="author" class="form-control" value="" title="" placeholder="Tên tác giả...">
        <label for="publisher">Nhà xuất bản</label>
        <input type="text" name="publisher" id="publisher" class="form-control" value="" title="" placeholder="Tên tác giả...">
        <div class="form-group">
            <label for="category" class="control-label">Thể loại :</label>
            <div class="col-sm-12" id="category-data">

            </div>
        </div>
        <div class="form-group">
            <label for="storage" class="control-label">Kho sách :</label>
            <div class="col-sm-12" id="storage-data">

            </div>
        </div>
        <label for="avatar">Ảnh</label>
        <input type="file" class="form-control" id="avatar" name="avatar" />
        <div>
            <img  class="card-img" alt="..." id="add-avatar" style="max-width: 100px;">
        </div>
        <label for="number">Số lượng:</label>
        <input type="number" class="form-control" id="number" name="number" placeholder="Số lượng...">

        <label for="price">Giá tiền:</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="Giá tiền...">
         <label for="isbn">ISBN:</label>
        <input type="text" class="form-control" id="isbn" name="isbn" placeholder="ISBN...">
        <div class="form-group">
            <label for="description" class="control-label">Mô tả:</label>
            <div class="col-sm-10">
                <textarea name="description" id="description" class="form-control" rows="3" ></textarea>
            </div>
        </div>

    </div>
    <button type="submit" class="btn btn-primary" id="btnSubmit">Submit</button>
    <a class="btn btn-success" href="book" role="button">Back</a>
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
             url: "api/category",
             type : 'GET',
             dataType : 'json',
             success : function(datas){
                var data = '<select  id="category" name="category" class="form-control" ><option value="0">Chọn thể loại</option>';
                $.each(datas, function(key, val) {
                    data += `<option value="${val['id']}">${val['title']}</option>`; 
                });
                data+= '</select>';
                $('#category-data').append(data);
             },
             error : function(){
                 console.log('Lỗi rồi');
             },
             always : function(){
                 console.log('complete');
             }
         });
        $.ajax({
             url: "api/storage",
             type : 'GET',
             dataType : 'json',
             success : function(datas){
                var data = '<select id="storage" name="storage" class="form-control" ><option value="0">Chọn kho sách</option>';
                $.each(datas, function(key, val) {
                    data += `<option value="${val['id']}">${val['title']}</option>`; 
                });
                data+= '</select>';
                $('#storage-data').append(data);
             },
             error : function(){
                 console.log('Lỗi rồi');
             },
             always : function(){
                 console.log('complete');
             }
         });
    });
    //search ISBN
    var item, title, author, publisher, bookLink, bookImg="#";
    var outputList = document.getElementById("list-output");
    var placeHldr = 'https://lh3.googleusercontent.com/proxy/eRo7Fwl7al7bvtUEFCYEBxxvD1LvIYIsVkqoyALcFLaNqkpwMKtraEUJ-qs-M-gMw5QWXcs6ku-KDIJ4QFb61QllcNs';
    $(document).ready(function(){
        $('#btnSearch').on('click', function() {
            var inputValue = $('#inputSearch').val();
            var urlSearch = "https://www.googleapis.com/books/v1/volumes?tbm=bks&q=isbn:" + inputValue;
            // alert(urlSearch);
                $.ajax({
                url: urlSearch,
                type : 'GET',
                dataType : 'json',
                success : function(data){
                    //console.log(data)
                    if (data.totalItems === 0) {
                      alert("no result!.. try again");
                    }
                    else {
                      $("#title").animate({'margin-top': '5px'}, 1000); //search box animation
                      $(".book-list").css("display", "block");
                      displayResults(data);
                    //console.log(data);
                    // console.log(data['items'][0]['volumeInfo']['title']);
                    // console.log(data['items'][0]['volumeInfo']['industryIdentifiers'][1]['identifier']);
                    // console.log(data['items'][0]['volumeInfo']['authors']);
                    }
                    
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
    function displayResults(response) {
        item = response.items[0];
        title1 = item.volumeInfo.title;
        author1 = item.volumeInfo.authors;
        publisher1 = item.volumeInfo.publisher;
        description = item.volumeInfo.description;
        bookLink1 = item.volumeInfo.previewLink;
        for (var i=0; i<=1; i++) {
            if (item.volumeInfo.industryIdentifiers[i].type == "ISBN_13") {
                bookIsbn = item.volumeInfo.industryIdentifiers[i].identifier;
            }
        }
        bookImg1 = (item.volumeInfo.imageLinks) ? item.volumeInfo.imageLinks.thumbnail : placeHldr ;
        // in production code, item.text should have the HTML entities escaped.
        formatOutput(bookImg1, title1, author1, publisher1, bookIsbn, description);
      }
      function formatOutput(bookImg, title, author, publisher, bookIsbn, description) {
     // console.log(title + ""+ author +" "+ publisher +" "+ bookLink+" "+ bookImg)
            $('#avatar_book').attr("src", bookImg);
            $('#title_book').html(title);
               $('#author_book').html(author);
               $('#publisher_book').html(publisher);
        $('#btnAddBook').on('click', function() {
            $('#title').attr('value', title);
            $('#add-avatar').attr('src', bookImg);
            $('#author').attr('value',author);
            $('#publisher').attr('value',publisher);
            $('#isbn').attr('value',bookIsbn);
            $('#description').html(description);
        });
     return true;
   }
   //end search ISBN
</script>
@endsection