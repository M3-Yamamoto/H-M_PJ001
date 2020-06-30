<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CatagoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $catagorylist = [
            ['title' => 'Web Development',],
            ['title' => 'Information Technology',],
            ['title' => 'Internet of Things',],
            ['title' => 'Data Science',],
            ['title' => 'Computer Science',],
        ];
        DB::table('catagory')->truncate();
        DB::table('catagory')->insert($catagorylist);

        // for ($i = 1; $i <= 5; $i++) {
        //     $catagory_id = rand(1, 6);
        //     DB::table('post')->where('id', $i)->update(['catagoryId' => $catagory_id]);
        // }
    }
}
