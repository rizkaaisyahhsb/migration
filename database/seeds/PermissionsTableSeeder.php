<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('permissions')->insert([
        	'name' 		 => 'User Menu',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-07 10:53:06',
        	'updated_at' => '2019-02-07 10:53:06'
        ]);
        DB::table('permissions')->insert([
        	'name' 		 => 'Roles Menu',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-08 23:35:33',
        	'updated_at' => '2019-02-08 23:35:33'
        ]);
        DB::table('permissions')->insert([
        	'name'		 => 'Permission Menu',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-08 23:35:51',
        	'updated_at' => '2019-02-08 23:35:51'
        ]);
        DB::table('permissions')->insert([
        	'name' 		 => 'Marketing Menu',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-11 05:52:42',
        	'updated_at' => '2019-02-11 05:52:42'
        ]);
        DB::table('permissions')->insert([
        	'name' 	  	 => 'Klinik Menu',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-11 06:04:24',
        	'updated_at' => '2019-02-11 06:04:24'
        ]);
        DB::table('permissions')->insert([
        	'name' 	 	 => 'Pemeriksaan Menu',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-11 06:10:31',
        	'updated_at' => '2019-02-11 06:10:31'
        ]);
        DB::table('permissions')->insert([
        	'name' 		 => 'Apps Login',
        	'guard_name' => 'web',
        	'created_at' => '2019-03-18 11:04:35',
        	'updated_at' => '2019-03-18 11:04:35'
        ]);
        DB::table('permissions')->insert([
        	'name' 		 => 'Food Menu',
        	'guard_name' => 'web',
        	'created_at' => '2019-05-27 20:53:18',
        	'updated_at' => '2019-05-27 20:53:18'
        ]);
        DB::table('permissions')->insert([
        	'name' 	 	 => 'Input Hasil',
        	'guard_name' => 'web',
        	'created_at' => '2019-05-27 21:54:35',
        	'updated_at' => '2019-05-27 21:54:35'
        ]);
        DB::table('permissions')->insert([
        	'name' 		 => 'Dokter Menu',
        	'guard_name' => 'web',
        	'created_at' => '2019-05-28 13:02:33',
        	'updated_at' => '2019-05-28 13:02:33'
        ]);
        DB::table('pemeriksaan')->insert([
        	'name' 		 => 'Settings Menu',
        	'guard_name' => 'web',
        	'created_at' => '2019-05-28 13:08:00',
        	'updated_at' => '2019-05-28 13:08:00'
        ]);
    }
}
