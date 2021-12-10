<?php

use Illuminate\Database\Seeder;

class ClassStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_students')->insert([

            [  
                'faculty_id'     => '1',
                'title'     => 'DH8C1'
            ],
            [
                
                'faculty_id'     => '1',
                'title'     => 'DH8C2'
            ],
            [
                'faculty_id'     => '1',
                'title'     => 'DH8C7'
            ],
            [
                
                'faculty_id'     => '2',
                'title'     => 'DH8KE1'
            ],
            [
                
                'faculty_id'     => '2',
                'title'     => 'DH8KE2'
            ],
            [
                
                'faculty_id'     => '3',
                'title'     => 'DH8DL1'
            ],
            [
                
                'faculty_id'     => '3',
                'title'     => 'DH8DL5'
            ],
            [
                
                'faculty_id'     => '4',
                'title'     => 'DH8KS1'
            ],
            [
                
                'faculty_id'     => '4',
                'title'     => 'DH8KS2'
            ],
            [
                
                'faculty_id'     => '4',
                'title'     => 'DH8KS6'
            ],
            [
                
                'faculty_id'     => '5',
                'title'     => 'DH8DC1'
            ],
            [
                
                'faculty_id'     => '5',
                'title'     => 'DH8DC2'
            ],
            [
                
                'faculty_id'     => '5',
                'title'     => 'DH8DC4'
            ],
            [
                
                'faculty_id'     => '5',
                'title'     => 'DH8DC6'
            ]
        ]);
    }
}
