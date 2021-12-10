<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorys')->insert([

            [
                'title'         => 'Giáo trình',
                'description'   => 'Mô tả'
            ],
            [
                'title'         => 'Luận án',
                'description'   => 'Mô tả'
            ],
            [
                'title'         => 'Tạp chí',
                'description'   => 'Mô tả'
            ],
            [
                'title'         => 'Sách tham khảo',
                'description'   => 'Mô tả'
            ],
            [
                'title'         => 'Đề cương',
                'description'   => 'Mô tả'
            ],

        ]);
    }
}
