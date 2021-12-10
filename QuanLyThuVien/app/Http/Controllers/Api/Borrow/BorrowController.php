<?php

namespace App\Http\Controllers\Api\Borrow;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Order;
use App\Model\OrderDetail;
use App\Model\Member;
use App\Model\Book;
use DB;
class BorrowController extends Controller
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
        ->leftJoin('members', 'order_details.member_borrow_id', '=', 'members.id')
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
        return view('pages.borrow-book.add-borrow');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order_details = new OrderDetail();
        $order_details->order_id = $request['order_id'];
        $order_details->book_id = $request['borrow-book'];
        $order_details->member_borrow_id = $request['member-borrow'];
        $order_details->status_borrow = $request['status_borrow'];
        
        if ($request['date_borrow']) {
            $order_details->date_borrow = $request['date_borrow'];
        }
        $order_details->dead_return = $request['dead_return'];
        $order_details->note = $request['note'];
        $order_details->save();
        $book = Book::find($request['borrow-book']);
        $book->number = $book->number-1;
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
        //
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
        return view('pages.borrow-book.update-borrow')->with(compact('data'));
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
        $order_details->order_id = $request['order_id'];
        $order_details->book_id = $request['borrow-book'];
        $order_details->member_borrow_id = $request['member-borrow'];
        $order_details->status_borrow = $request['status_borrow'];
        if ($request['date_borrow']) {
            $order_details->date_borrow = $request['date_borrow'];
        }
        $order_details->dead_return = $request['dead_return'];
        $order_details->note = $request['note'];
        $order_details->save();
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
