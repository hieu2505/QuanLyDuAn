<?php

use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
        
            [
                    'category_id'=> '1',
                    'publisher'  => '1',
                    'storage_id' => '1',
                    'title'      => 'Phân tích thiết kế hệ thống',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
            [
                    'category_id'=> '1',
                    'publisher'  => '2',
                    'storage_id' => '3',
                    'title'      => 'Đồ án tốt nghiệp',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
            [
                    'category_id'=> '3',
                    'publisher'  => '2',
                    'storage_id' => '1',
                    'title'      => 'Tạp chí du lịch',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
            [
                    'category_id'=> '2',
                    'publisher'  => '4',
                    'storage_id' => '2',
                    'title'      => 'Phát triển phần mềm hướng dịch vụ',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
            [
                    'category_id'=> '3',
                    'publisher'  => '1',
                    'storage_id' => '5',
                    'title'      => 'MySQL',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
            [
                    'category_id'=> '1',
                    'publisher'  => '2',
                    'storage_id' => '1',
                    'title'      => 'An toàn và bảo mật thông tin',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
            [
                    'category_id'=> '1',
                    'publisher'  => '1',
                    'storage_id' => '1',
                    'title'      => 'Lập trình Android',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
            [
                    'category_id'=> '1',
                    'publisher'  => '5',
                    'storage_id' => '2',
                    'title'      => 'Phát triển ứng dụng mạng',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
            [
                    'category_id'=> '3',
                    'publisher'  => '1',
                    'storage_id' => '2',
                    'title'      => 'Tạp chí văn nghệ',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
            [
                    'category_id'=> '5',
                    'publisher'  => '1',
                    'storage_id' => '2',
                    'title'      => 'Sóng',
                    'avatar'     => 'default.png',
                    'author'     => 'Tác giả',
                    'number'     => '10',
                    'price'      => '50000'
            ],
    ]);
    }
}
