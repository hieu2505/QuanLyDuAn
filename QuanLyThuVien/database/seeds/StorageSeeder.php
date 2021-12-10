<?php

use Illuminate\Database\Seeder;

class StorageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('storages')->insert([

            [
                'title'  => 'Công nghệ thông tin',
                'note'   => 'Mô tả'
            ],
            [
                'title'  => 'Kế toán',
                'note'   => 'Mô tả'
            ],
            [
                'title'  => 'Ngoại văn',
                'note'   => 'Mô tả'
            ],
            [
                'title'  => 'Du lịch',
                'note'   => 'Mô tả'
            ],
            [
                'title'  => 'Đồ án',
                'note'   => 'Mô tả'
            ],

        ]);
    }
}
