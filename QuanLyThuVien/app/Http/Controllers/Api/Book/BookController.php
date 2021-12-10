<?php

namespace App\Http\Controllers\Api\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Book;
use App\Model\Category;
use App\Model\StorageBook;
use DB;
use Validate;
use File;
use Storage;
class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('books')
        ->leftJoin('categorys', 'books.category_id', '=', 'categorys.id')
        ->leftJoin('storages', 'books.storage_id', '=', 'storages.id')
        ->select('books.*', 'categorys.title as category_title','storages.title as storage_title')
        ->get();
        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.book.add-book');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book();
        $book->category_id = ($request['category']) ? $request['category'] : null;
        $book->publisher = ($request['publisher'])? $request['category'] : null;
        $book->storage_id = ($request['storage'])? $request['category'] : null;
        $book->title = $request['title'];
        if ($request['avatar']) {
            //them image
            $image = $request['avatar'];
            $extension = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('book')->put($name,File::get($image));
            $book->avatar = $name;
        }
        else {
            $book->avatar = "default.png";
        }
        $book->author = $request['author'];
        $book->number = $request['number'];
        $book->price = $request['price'];
        $book->isbn = $request['isbn'];
        $book->description = $request['description'];
        $book->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Book::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Book::find($id);
        return view('pages.book.update-book')->with(compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $book = Book::find($id);
        $book->category_id = $request['category'];
        $book->publisher = $request['publisher'];
        $book->storage_id = $request['storage'];
        $book->title = $request['title'];
        if ($request['avatar']) {
            //them image
            $image = $request['avatar'];
            $extension = $image->getClientOriginalExtension();
            $name = time().'_'.$image->getClientOriginalName();
            Storage::disk('book')->put($name,File::get($image));
            $book->avatar = $name;
        }
        $book->author = $request['author'];
        $book->number = $request['number'];
        $book->price = $request['price'];
        $book->isbn = $request['isbn'];
        $book->description = $request['description'];
        $book->save();
        return redirect('book');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete($id);
        return $book;
    }
}
