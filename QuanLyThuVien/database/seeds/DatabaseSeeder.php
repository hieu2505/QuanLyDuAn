<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            MemberSeeder::class,
            FacultySeeder::class,
            ClassStudentSeeder::class,
            ReaderSeeder::class,
            CategorySeeder::class,
            StorageSeeder::class,
            BookSeeder::class,
            OrderSeeder::class,
            OrderDetailSeeder::class
        ]);
    }
}
