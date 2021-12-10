<?php

use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->insert([

            [
                'reader_id'  => '1'
            ],
            [
                'reader_id'  => '2'
            ],
            [
                'reader_id'  => '3'
            ],
            [
                'reader_id'  => '5'
            ],
            [
                'reader_id'  => '6'
            ],
            [
                'reader_id'  => '10'
            ],
            [
                'reader_id'  => '4'
            ],
            [
                'reader_id'  => '7'
            ],
            [
                'reader_id'  => '5'
            ],
            [
                'reader_id'  => '1'
            ],
            [
                'reader_id'  => '3'
            ],
            [
                'reader_id'  => '4'
            ],
            [
                'reader_id'  => '2'
            ],
            [
                'reader_id'  => '3'
            ],
            [
                'reader_id'  => '8'
            ],
            [
                'reader_id'  => '10'
            ],
            [
                'reader_id'  => '3'
            ],
            [
                'reader_id'  => '1'
            ]

        ]);
    }
}
