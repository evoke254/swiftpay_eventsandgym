<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        //factory(\App\User::class, 25)->create();
//        factory(\App\class_events::class, 25)->create();

        $this->call(DataTypesTableSeeder::class);
        $this->call(DataRowsTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(MenuItemsTableSeeder::class);
        $this->call(RolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PermissionsTableSeeder::class);
        $this->call(PermissionRoleTableSeeder::class);
        $this->call(ChatResponsesTableSeeder::class);
        $this->call(GalleriesTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(PayOptionsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
    }
}
