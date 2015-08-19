<?php

use Illuminate\Database\Migrations\Migration;
use Bican\Roles\Models\Role;

class SeedUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $root = Role::create(['name' => 'Root', 'slug' => 'root', 'description' => 'Super user']);
        $admin = Role::create(['name' => 'Admin', 'slug' => 'admin', 'description' => 'Administrator aplikasi']);
        $user = Role::create(['name' => 'User', 'slug' => 'user', 'description' => 'User biasa']);

        $user = \App\User::create(['name' => 'Root', 'email' => 'root@email.com', 'password' => bcrypt('root')]);

        $user->attachRole($root);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
