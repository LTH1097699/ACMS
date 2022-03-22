<?php

namespace Modules\Phatsinhtang\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class PhatsinhtangDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('trangthai')->insert([
            ['name' => 'Đang làm việc'],
            ['name' => 'Nghỉ thai sản'],
            ['name' => 'Nghỉ ốm dài ngày'],
            ['name' => 'Nghỉ việc'],
            ['name' => 'Đi nghĩa vụ quân sự'],
            ['name' => 'Hết hạn HDLD'],
            ['name' => 'Sa thải'],
            ['name' => 'Chết'],
            ['name' => 'Tạm hoãn HDLD'],


        ]);
        // Model::unguard();

        // // Create an admin user
        // $trangthai = Sentinel::create(
        //     ['name' => 'Đang làm việc'],
        //     ['name' => 'Nghỉ thai sản'],
        //     ['name' => 'Nghỉ ốm dài ngày'],
        //     ['name' => 'Nghỉ việc'],
        //     ['name' => 'Đi nghĩa vụ quân sự'],
        //     ['name' => 'Hết hạn HDLD'],
        //     ['name' => 'Sa thải'],
        //     ['name' => 'Chết'],
        //     ['name' => 'Tạm hoãn HDLD'],
        // );
    }
}
