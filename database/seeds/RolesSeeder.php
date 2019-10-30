<?php

use Illuminate\Database\Seeder;
use App\Model\Role;
class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author = Role::create([
            'name' => 'Author',
            'slug' => 'author',
            'display_name' => 'Tác giả',
            'permissions' => [
                'create-post' => true,
                'update-post' => true,
                'delete-post' => true,
            ]
        ]);
        $user = Role::create([
            'name' => 'Editor',
            'slug' => 'editor',
            'permissions' => [
                'view-post' => true,
            ]
        ]);
    }
}
