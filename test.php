<?php

use App\Models\Role;
use App\Models\User;

$u = User::query()->where('email', '=', 'super@admin.com')->first();
dump($u->roles);
$permissions = \App\Models\Permission::query()->get();
dump($permissions);
$admin = Role::query()->where('name', '=', 'administrator ')->first();
$admin->givePermissionTo($permissions);

dump($u->roles);
dd('Ende');
$roles = \App\Models\Role::query()->get();

$super_admin = Role::query()->where('', '=', '')->first();

dump($super_admin->hasAllPermissions($permissions));
dump($super_admin->name);
dump($super_admin->permissions);

foreach ($roles as $role) {
    dump($role->name);
    dump($role->permissions);
}
dd($roles);

$roles = Role::query()->get();
$users = User::query()->get();

foreach ($users as $user) {
    dump($user);
}

dd('ende');

//$ats = new \Database\Seeders\AuthTableSeeder();
//$ats->run();
//$users = \App\Models\User::query()->get();
//
//foreach ($users as $user) {
//    dump($user->email);
//}
