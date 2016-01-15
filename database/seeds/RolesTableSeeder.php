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
        echo "Running seeder for Roles table\n";

        $roleRepository = app('sentinel')->getRoleRepository();

        $roleRepository->createModel()->create([
            'name' => 'Admin',
            'slug' => 'Admin',
        ]);

        $roleRepository->createModel()->create([
            'name' => 'User',
            'slug' => 'User',
        ]);

        $roleRepository->createModel()->create([
            'name' => 'Guest',
            'slug' => 'Guest',
        ]);
    }
}
