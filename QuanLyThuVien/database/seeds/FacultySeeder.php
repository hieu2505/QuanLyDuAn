<?php

use Illuminate\Database\Seeder;

class FacultySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facultys')->insert([

            [
                'title'     => 'Công nghệ thông tin',
                'phone'     => '0865987412',
                'email'     => 'CNTT@hunre.edu.vn',
                'room'      => 'B301'
            ],
            [
                'title'     => 'Kế toán',
                'phone'     => '0865237412',
                'email'     => 'KE@hunre.edu.vn',
                'room'      => 'B301'
            ],
            [
                'title'     => 'Du lịch',
                'phone'     => '0865987421',
                'email'     => 'DL@hunre.edu.vn',
                'room'      => 'B301'
            ],
            [
                'title'     => 'Khoáng sản',
                'phone'     => '0865932412',
                'email'     => 'KS@hunre.edu.vn',
                'room'      => 'B301'
            ],
            [
                'title'     => 'Địa chất',
                'phone'     => '0832987412',
                'email'     => 'DC@hunre.edu.vn',
                'room'      => 'B301'
            ]
        ]);
    }
}
