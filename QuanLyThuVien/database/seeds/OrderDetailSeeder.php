<?php

use Illuminate\Database\Seeder;

class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order_details')->insert([

            [
                'order_id'          => '3',
                'book_id'           => '1',
                'member_borrow_id'  => '5',
                'member_return_id'  => '5',
                'status_borrow'     => 'Bình thường',
                'dead_return'       => '2021-10-20',
                'date_return'       => '2021-8-1',
                'status_return'     => 'Bình thường'
            ],
            [
                'order_id'          => '3',
                'book_id'           => '4',
                'member_borrow_id'  => '5',
                'member_return_id'  => '2',
                'status_borrow'     => 'Bình thường',
                'dead_return'       => '2021-10-20',
                'date_return'       => '2021-8-1',
                'status_return'     => 'Bình thường'
            ],
            [
                'order_id'          => '1',
                'book_id'           => '1',
                'member_borrow_id'  => '5',
                'member_return_id'  => '5',
                'status_borrow'     => 'Bình thường',
                'dead_return'       => '2021-10-20',
                'date_return'       => '2021-8-1',
                'status_return'     => 'Bình thường'
            ],
            [
                'order_id'          => '5',
                'book_id'           => '2',
                'member_borrow_id'  => '1',
                'member_return_id'  => '3',
                'status_borrow'     => 'Bình thường',
                'dead_return'       => '2021-10-20',
                'date_return'       => '2021-8-1',
                'status_return'     => 'Bình thường'
            ],
            [
                'order_id'          => '6',
                'book_id'           => '1',
                'member_borrow_id'  => '2',
                'member_return_id'  => '5',
                'status_borrow'     => 'Bình thường',
                'dead_return'       => '2021-10-20',
                'date_return'       => '2021-8-1',
                'status_return'     => 'Bình thường'
            ],
            [
                'order_id'          => '1',
                'book_id'           => '2',
                'member_borrow_id'  => '5',
                'member_return_id'  => '1',
                'status_borrow'     => 'Bình thường',
                'dead_return'       => '2021-10-20',
                'date_return'       => '2021-8-1',
                'status_return'     => 'Bình thường'
            ],
            [
                'order_id'          => '3',
                'book_id'           => '3',
                'member_borrow_id'  => '3',
                'member_return_id'  => '3',
                'status_borrow'     => 'Bình thường',
                'dead_return'       => '2021-10-20',
                'date_return'       => '2021-8-1',
                'status_return'     => 'Bình thường'
            ],
           
        ]);
    }
}
