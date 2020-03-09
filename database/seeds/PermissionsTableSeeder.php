<?php

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2019-10-25 07:19:44',
                'updated_at' => '2019-10-25 07:19:44',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2019-10-25 07:19:44',
                'updated_at' => '2019-10-25 07:19:44',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2019-10-25 07:19:44',
                'updated_at' => '2019-10-25 07:19:44',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2019-10-25 07:19:45',
                'updated_at' => '2019-10-25 07:19:45',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-10-25 08:42:45',
                'updated_at' => '2019-10-25 08:42:45',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-10-25 08:42:45',
                'updated_at' => '2019-10-25 08:42:45',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-10-25 08:42:45',
                'updated_at' => '2019-10-25 08:42:45',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-10-25 08:42:45',
                'updated_at' => '2019-10-25 08:42:45',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_galleries',
                'table_name' => 'galleries',
                'created_at' => '2019-10-25 08:42:45',
                'updated_at' => '2019-10-25 08:42:45',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_services',
                'table_name' => 'services',
                'created_at' => '2019-10-25 11:06:47',
                'updated_at' => '2019-10-25 11:06:47',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_services',
                'table_name' => 'services',
                'created_at' => '2019-10-25 11:06:47',
                'updated_at' => '2019-10-25 11:06:47',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_services',
                'table_name' => 'services',
                'created_at' => '2019-10-25 11:06:47',
                'updated_at' => '2019-10-25 11:06:47',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_services',
                'table_name' => 'services',
                'created_at' => '2019-10-25 11:06:47',
                'updated_at' => '2019-10-25 11:06:47',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_services',
                'table_name' => 'services',
                'created_at' => '2019-10-25 11:06:47',
                'updated_at' => '2019-10-25 11:06:47',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pay_options',
                'table_name' => 'pay_options',
                'created_at' => '2019-10-25 11:08:01',
                'updated_at' => '2019-10-25 11:08:01',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pay_options',
                'table_name' => 'pay_options',
                'created_at' => '2019-10-25 11:08:01',
                'updated_at' => '2019-10-25 11:08:01',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pay_options',
                'table_name' => 'pay_options',
                'created_at' => '2019-10-25 11:08:01',
                'updated_at' => '2019-10-25 11:08:01',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pay_options',
                'table_name' => 'pay_options',
                'created_at' => '2019-10-25 11:08:01',
                'updated_at' => '2019-10-25 11:08:01',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pay_options',
                'table_name' => 'pay_options',
                'created_at' => '2019-10-25 11:08:01',
                'updated_at' => '2019-10-25 11:08:01',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_responds',
                'table_name' => 'responds',
                'created_at' => '2019-10-25 11:09:29',
                'updated_at' => '2019-10-25 11:09:29',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_responds',
                'table_name' => 'responds',
                'created_at' => '2019-10-25 11:09:29',
                'updated_at' => '2019-10-25 11:09:29',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_responds',
                'table_name' => 'responds',
                'created_at' => '2019-10-25 11:09:29',
                'updated_at' => '2019-10-25 11:09:29',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_responds',
                'table_name' => 'responds',
                'created_at' => '2019-10-25 11:09:29',
                'updated_at' => '2019-10-25 11:09:29',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_responds',
                'table_name' => 'responds',
                'created_at' => '2019-10-25 11:09:29',
                'updated_at' => '2019-10-25 11:09:29',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_coupons',
                'table_name' => 'coupons',
                'created_at' => '2019-10-25 11:09:42',
                'updated_at' => '2019-10-25 11:09:42',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_coupons',
                'table_name' => 'coupons',
                'created_at' => '2019-10-25 11:09:42',
                'updated_at' => '2019-10-25 11:09:42',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_coupons',
                'table_name' => 'coupons',
                'created_at' => '2019-10-25 11:09:42',
                'updated_at' => '2019-10-25 11:09:42',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_coupons',
                'table_name' => 'coupons',
                'created_at' => '2019-10-25 11:09:42',
                'updated_at' => '2019-10-25 11:09:42',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_coupons',
                'table_name' => 'coupons',
                'created_at' => '2019-10-25 11:09:42',
                'updated_at' => '2019-10-25 11:09:42',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_class_events',
                'table_name' => 'class_events',
                'created_at' => '2019-10-25 11:56:02',
                'updated_at' => '2019-10-25 11:56:02',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_class_events',
                'table_name' => 'class_events',
                'created_at' => '2019-10-25 11:56:02',
                'updated_at' => '2019-10-25 11:56:02',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_class_events',
                'table_name' => 'class_events',
                'created_at' => '2019-10-25 11:56:02',
                'updated_at' => '2019-10-25 11:56:02',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_class_events',
                'table_name' => 'class_events',
                'created_at' => '2019-10-25 11:56:02',
                'updated_at' => '2019-10-25 11:56:02',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_class_events',
                'table_name' => 'class_events',
                'created_at' => '2019-10-25 11:56:02',
                'updated_at' => '2019-10-25 11:56:02',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_bookings',
                'table_name' => 'bookings',
                'created_at' => '2019-10-25 12:37:28',
                'updated_at' => '2019-10-25 12:37:28',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_bookings',
                'table_name' => 'bookings',
                'created_at' => '2019-10-25 12:37:28',
                'updated_at' => '2019-10-25 12:37:28',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_bookings',
                'table_name' => 'bookings',
                'created_at' => '2019-10-25 12:37:28',
                'updated_at' => '2019-10-25 12:37:28',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_bookings',
                'table_name' => 'bookings',
                'created_at' => '2019-10-25 12:37:28',
                'updated_at' => '2019-10-25 12:37:28',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_bookings',
                'table_name' => 'bookings',
                'created_at' => '2019-10-25 12:37:28',
                'updated_at' => '2019-10-25 12:37:28',
            ),
            60 => 
            array (
                'id' => 61,
                'key' => 'browse_accounts',
                'table_name' => 'accounts',
                'created_at' => '2019-10-28 16:03:17',
                'updated_at' => '2019-10-28 16:03:17',
            ),
            61 => 
            array (
                'id' => 62,
                'key' => 'read_accounts',
                'table_name' => 'accounts',
                'created_at' => '2019-10-28 16:03:17',
                'updated_at' => '2019-10-28 16:03:17',
            ),
            62 => 
            array (
                'id' => 63,
                'key' => 'edit_accounts',
                'table_name' => 'accounts',
                'created_at' => '2019-10-28 16:03:17',
                'updated_at' => '2019-10-28 16:03:17',
            ),
            63 => 
            array (
                'id' => 64,
                'key' => 'add_accounts',
                'table_name' => 'accounts',
                'created_at' => '2019-10-28 16:03:17',
                'updated_at' => '2019-10-28 16:03:17',
            ),
            64 => 
            array (
                'id' => 65,
                'key' => 'delete_accounts',
                'table_name' => 'accounts',
                'created_at' => '2019-10-28 16:03:17',
                'updated_at' => '2019-10-28 16:03:17',
            ),
            65 => 
            array (
                'id' => 66,
                'key' => 'browse_chat_responses',
                'table_name' => 'chat_responses',
                'created_at' => '2019-11-02 12:18:33',
                'updated_at' => '2019-11-02 12:18:33',
            ),
            66 => 
            array (
                'id' => 67,
                'key' => 'read_chat_responses',
                'table_name' => 'chat_responses',
                'created_at' => '2019-11-02 12:18:33',
                'updated_at' => '2019-11-02 12:18:33',
            ),
            67 => 
            array (
                'id' => 68,
                'key' => 'edit_chat_responses',
                'table_name' => 'chat_responses',
                'created_at' => '2019-11-02 12:18:33',
                'updated_at' => '2019-11-02 12:18:33',
            ),
            68 => 
            array (
                'id' => 69,
                'key' => 'add_chat_responses',
                'table_name' => 'chat_responses',
                'created_at' => '2019-11-02 12:18:33',
                'updated_at' => '2019-11-02 12:18:33',
            ),
            69 => 
            array (
                'id' => 70,
                'key' => 'delete_chat_responses',
                'table_name' => 'chat_responses',
                'created_at' => '2019-11-02 12:18:33',
                'updated_at' => '2019-11-02 12:18:33',
            ),
        ));
        
        
    }
}