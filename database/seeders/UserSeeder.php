<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
           [
               'name'=>'iPhone',
           ],
           [
               'name'=>'Samsung',
           ],
           [
               'name'=>'HTC',
           ],
           [
               'name'=>'Huawei',
           ],
           [
               'name'=>'Oppo',
           ],
       ];
       DB::table('users')->insert($data);
    }
}
