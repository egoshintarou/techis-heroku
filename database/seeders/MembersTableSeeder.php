<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('members')->insert(
            [
                [
                    'name'=>'徳永',
                    'telephone'=>'080-8633-3348',
                    'email'=>'0723tpoint3270@gmail.com',
                    'created_at'=>now(),
                    'updated_at'=>now(),
                ],
            ]
        );
    }
}
