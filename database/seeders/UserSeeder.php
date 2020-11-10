<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Permission;
use App\Models\User;
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
        $admin = Role::where('slug','admin')->first();
        $user = Role::where('slug', 'user')->first();
        $addManga = Permission::where('slug','add-manga')->first();
        $viewManga = Permission::where('slug','view-manga')->first();

        $adminAcc = new User();
        $adminAcc->name = 'Admin';
        $adminAcc->email = 'admin@admin.com';
        $adminAcc->password = bcrypt('admin');
        $adminAcc->save();

        $adminAcc->roles()->attach($admin);
        $adminAcc->permissions()->attach($addManga);
        $adminAcc->permissions()->attach($viewManga);

        $userAcc = new User();
        $userAcc->name = 'User';
        $userAcc->email = 'user@user.com';
        $userAcc->password = bcrypt('user');
        $userAcc->save();

        $userAcc->roles()->attach($user);
        $userAcc->permissions()->attach($viewManga);
    }
}
