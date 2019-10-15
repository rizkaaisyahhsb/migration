<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('roles')->insert([
        	'name' 		 => 'Superadmin',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-07 10:53:30',
        	'updated_at' => '2019-02-07 10:53:30'
        ]);
         DB::table('roles')->insert([
        	'name' 		 => 'FHAdmin',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-07 11:32:38',
        	'updated_at' => '2019-02-07 11:32:38'
        ]);
         DB::table('roles')->insert([
        	'name' 		 => 'HeadKlinik',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-07 12:08:53',
        	'updated_at' => '2019-02-07 12:08:53'
        ]);
         DB::table('roles')->insert([
        	'name' 		 => 'KlinikAnalis',
        	'guard_name' => 'web',
        	'created_at' => '2019-03-13 07:37:36',
        	'updated_at' => '2019-03-13 07:37:36'
        ]);
         DB::table('roles')->insert([
        	'name' 		 => 'Pasien',
        	'guard_name' => 'web',
        	'created_at' => '2019-02-18 11:04:56',
        	'updated_at' => '2019-02-18 11:04:56'
        ]);
    }
}
