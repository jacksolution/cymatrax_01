<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("admin_roles")->insert([["role"=>"Master Admin"],["role"=>"Editor"]]);

    }
}
