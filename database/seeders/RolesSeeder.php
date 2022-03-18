<?php

namespace Database\Seeders;

use App\Domain\Core\Enums\RolesEnum;
use App\Domain\User\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Artisan::call('permission:cache-reset');
        $this->setupPermissions();
        $this->setupRoles();
        $this->setupUsers();
    }

    private function setupUsers()
    {
        tap(User::factory()->create([
            'name'     => 'Codebase',
            'email'    => 'admin@admin.com',
            'password' => Hash::make('123456'),
        ]))->assignRole([
            RolesEnum::super()->value,
            RolesEnum::admin()->value,
        ]);
        echo 'Admins Created Successfully'.PHP_EOL;
    }

    private function setupRoles()
    {
        Role::query()->delete();
        $roles = collect(RolesEnum::toArray())
            ->transform(fn ($i) => ['name' => $i, 'guard_name' => 'web'])
            ->toArray();
        Role::insert($roles);
        Role::findByName('super', 'web')
            ->permissions()->sync(Permission::where('guard_name', 'web')->pluck('id'));
        echo 'Roles Created Successfully'.PHP_EOL;
    }

    private function setupPermissions()
    {
        Permission::query()->delete();
        $permissions = collect([
            // administration
            'administration', 'pages',
        ]);

        Permission::insert($permissions->transform(fn ($i) => ['name' => $i, 'guard_name' => 'web'])
                                       ->toArray());
        echo 'Permissions Created Successfully'.PHP_EOL;

        return $permissions;
    }
}
