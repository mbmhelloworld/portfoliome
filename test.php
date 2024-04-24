<?php

use App\Models\Role;

$user = Role::query()->where('name', '=','super admin')->first();
dd($user);
$super_admin = Role::query()->where('name', '=','super admin')->first();
$super_admin->givePermissionTo(['view_backend', 'edit_settings', 'posts', 'categories', 'tags', 'comments']);

//$ats = new \Database\Seeders\AuthTableSeeder();
//$ats->run();
//$users = \App\Models\User::query()->get();
//
//foreach ($users as $user) {
//    dump($user->email);
//}
