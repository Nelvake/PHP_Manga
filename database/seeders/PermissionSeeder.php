<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $manageUser = new Permission();
        $manageUser->name = 'Add Manga';
        $manageUser->slug = 'add-manga';
        $manageUser->save();
        $createTasks = new Permission();
        $createTasks->name = 'View Manga';
        $createTasks->slug = 'view-manga';
        $createTasks->save();
    }
}
