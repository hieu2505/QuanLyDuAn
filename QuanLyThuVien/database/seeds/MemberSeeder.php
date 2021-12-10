<?php

use Illuminate\Database\Seeder;

class MemberSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert([

            [
                'name'      => 'Nguyễn A',
                'gender'    => 'Nam',
                'dOB'       => '1987-03-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0123456789',
                'email'     => 'AAA@gmail.com'
            ],
            [
                'name'      => 'Nguyễn B',
                'gender'    => 'Nữ',
                'dOB'       => '1989-10-05',
                'address'   => 'Hà Nam',
                'avatar'    => 'default.png',
                'phone'     => '0123456987',
                'email'     => 'BBB@gmail.com'
            ],
            [
                'name'      => 'Phạm A',
                'gender'    => 'Nam',
                'dOB'       => '1978-03-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0123656789',
                'email'     => 'PAA@gmail.com'
            ],
            [
                'name'      => 'Trịnh C',
                'gender'    => 'Nữ',
                'dOB'       => '1988-02-21',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0323456789',
                'email'     => 'CCC@gmail.com'
            ],
            [
                'name'      => 'Phạm D',
                'gender'    => 'Nam',
                'dOB'       => '1991-12-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0363456789',
                'email'     => 'DDD@gmail.com'
            ],
            [
                'name'      => 'Trịnh E',
                'gender'    => 'Nam',
                'dOB'       => '1986-02-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0803456789',
                'email'     => 'EEE@gmail.com'
            ],
            [
                'name'      => 'Nguyễn A',
                'gender'    => 'Nữ',
                'dOB'       => '1988-02-21',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0987456789',
                'email'     => 'NNA@gmail.com'
            ],
            [
                'name'      => 'Đỗ P',
                'gender'    => 'Nam',
                'dOB'       => '1996-03-25',
                'address'   => 'Hà Nội',
                'avatar'    => 'default.png',
                'phone'     => '0333456789',
                'email'     => 'DPP@gmail.com'
            ],
            [
                'name'      => 'Cao E',
                'gender'    => 'Nam',
                'dOB'       => '1989-04-11',
                'address'   => 'Hải Phòng',
                'avatar'    => 'default.png',
                'phone'     => '0123556789',
                'email'     => 'CEE@gmail.com'
            ],
            [
                'name'      => 'Lê F',
                'gender'    => 'Nữ',
                'dOB'       => '1997-11-11',
                'address'   => 'Hà Nam',
                'avatar'    => 'default.png',
                'phone'     => '0331456789',
                'email'     => 'FFF@gmail.com'
            ]
    ]);
    }
}
