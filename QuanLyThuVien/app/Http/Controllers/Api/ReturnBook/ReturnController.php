<?php

namespace App\Http\Controllers\Api\ReturnBook;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Member;
use App\Model\Book;
use DB;
class ReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('order_details')
        ->leftJoin('orders', 'order_details.order_id', '=', 'orders.id')
        ->leftJoin('members', 'order_details.member_return_id', '=', 'members.id')
        ->leftJoin('books', 'order_details.book_id', '=', 'books.id')
        ->select('order_details.*', 'books.title as books_title','members.name as member_name')
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = OrderDetail::find($id);
        return view('pages.return-book.add-return')->with(compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = OrderDetail::find($id);
        return view('pages.return-book.update-return')->with(compact('data'));
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
        $order_details = OrderDetail::find($id);
        $order_details->member_return_id = $request['member-return'];
        $order_details->status_return = $request['status_return'];
        $order_details->date_return = $request['date_return'];
        $order_details->pay = $request['pay'];
        $order_details->note = $request['note'];
        $order_details->save();
        $book = Book::find($request['return-book']);
        $book->number = $book->number+1;
        $book->save();
        return redirect('borrow');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $order_details = OrderDetail::find($id);
        $order_details->delete($id);
        return $order_details;
    }
}
