<?php

use Illuminate\Database\Seeder;

class ReaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('readers')->insert([
        
            [
                'class_id'  => '1',
                'name'      => 'Văn A',
                'gender'    => 'Nam',
                'dOB'       => '2000-03-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0333456789',
                'email'     => 'VAA@gmail.com',
                'dead_card' => '2022-06-30',
            ],
            [
                'class_id'  => '1',
                'name'      => 'Văn B',
                'gender'    => 'Nam',
                'dOB'       => '2000-02-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0323456789',
                'email'     => 'VBB@gmail.com',
                'dead_card' => '2022-06-30',
            ],
            [
                'class_id'  => '1',
                'name'      => 'Thị A',
                'gender'    => 'Nữ',
                'dOB'       => '2000-02-05',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0333556789',
                'email'     => 'TAA@gmail.com',
                'dead_card' => '2022-06-30',
            ],
            [
                'class_id'  => '2',
                'name'      => 'Hồng V',
                'gender'    => 'Nữ',
                'dOB'       => '2000-11-21',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0323456189',
                'email'     => 'HVV@gmail.com',
                'dead_card' => '2022-06-30',
            ],
            [
                'class_id'  => '3',
                'name'      => 'Tùng A',
                'gender'    => 'Nam',
                'dOB'       => '1999-03-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0336756789',
                'email'     => 'TTT@gmail.com',
                'dead_card' => '2022-06-30',
            ],
            [
                'class_id'  => '4',
                'name'      => 'Trịnh G',
                'gender'    => 'Nữ',
                'dOB'       => '2000-02-21',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0333456654',
                'email'     => 'GG@gmail.com',
                'dead_card' => '2022-06-30',
            ],
            [
                'class_id'  => '5',
                'name'      => 'Văn Ab',
                'gender'    => 'Nam',
                'dOB'       => '1998-03-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0332156789',
                'email'     => 'AB@gmail.com',
                'dead_card' => '2022-06-30',
            ],
            [
                'class_id'  => '6',
                'name'      => 'Văn Abc',
                'gender'    => 'Nữ',
                'dOB'       => '2000-03-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0333456389',
                'email'     => 'ABC@gmail.com',
                'dead_card' => '2022-06-30',
            ],
            [
                'class_id'  => '7',
                'name'      => 'Văn Aaa',
                'gender'    => 'Nam',
                'dOB'       => '2000-10-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0332146789',
                'email'     => 'aaa@gmail.com',
                'dead_card' => '2022-06-30',
            ],
            [
                'class_id'  => '8',
                'name'      => 'Xuân A',
                'gender'    => 'Nữ',
                'dOB'       => '2000-07-22',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0333453789',
                'email'     => 'XXA@gmail.com',
                'dead_card' => '2022-06-30',
            ]
    ]);
    }
}
