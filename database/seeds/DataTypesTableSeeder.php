<?php

use Illuminate\Database\Seeder;

class DataTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_types')->delete();
        
        \DB::table('data_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'users',
                'slug' => 'users',
                'display_name_singular' => 'User',
                'display_name_plural' => 'Users',
                'icon' => 'fas fa-users',
                'model_name' => 'TCG\\Voyager\\Models\\User',
                'policy_name' => 'TCG\\Voyager\\Policies\\UserPolicy',
                'controller' => 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-25 07:19:43',
                'updated_at' => '2019-10-25 11:00:07',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'menus',
                'slug' => 'menus',
                'display_name_singular' => 'Menu',
                'display_name_plural' => 'Menus',
                'icon' => 'ion-ios-list',
                'model_name' => 'TCG\\Voyager\\Models\\Menu',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"desc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-25 07:19:43',
                'updated_at' => '2019-10-25 08:19:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'roles',
                'slug' => 'roles',
                'display_name_singular' => 'Role',
                'display_name_plural' => 'Roles',
                'icon' => 'voyager-lock',
                'model_name' => 'TCG\\Voyager\\Models\\Role',
                'policy_name' => NULL,
                'controller' => '',
                'description' => '',
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => NULL,
                'created_at' => '2019-10-25 07:19:43',
                'updated_at' => '2019-10-25 07:19:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'galleries',
                'slug' => 'galleries',
                'display_name_singular' => 'Gallery',
                'display_name_plural' => 'Galleries',
                'icon' => 'ion-ios-aperture',
                'model_name' => 'App\\Gallery',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_column":null,"order_display_column":"image","order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-25 08:42:45',
                'updated_at' => '2019-10-28 11:37:05',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'services',
                'slug' => 'services',
                'display_name_singular' => 'Service',
                'display_name_plural' => 'Services',
                'icon' => 'ion-ios-basket',
                'model_name' => 'App\\Services',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-25 11:06:47',
                'updated_at' => '2019-10-25 11:07:11',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'pay_options',
                'slug' => 'pay-options',
                'display_name_singular' => 'Pay Option',
                'display_name_plural' => 'Pay Options',
                'icon' => 'ion-ios-card',
                'model_name' => 'App\\PayOptions',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-10-25 11:08:00',
                'updated_at' => '2019-10-25 11:08:00',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'responds',
                'slug' => 'responds',
                'display_name_singular' => 'Respond',
                'display_name_plural' => 'Responds',
                'icon' => NULL,
                'model_name' => 'App\\Respond',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-10-25 11:09:28',
                'updated_at' => '2019-10-25 11:09:28',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'coupons',
                'slug' => 'coupons',
                'display_name_singular' => 'Coupon',
                'display_name_plural' => 'Coupons',
                'icon' => 'ion-ios-unlock',
                'model_name' => 'App\\Coupon',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\CouponController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-25 11:09:42',
                'updated_at' => '2019-10-28 13:35:19',
            ),
            8 => 
            array (
                'id' => 11,
                'name' => 'class_events',
                'slug' => 'class-events',
                'display_name_singular' => 'Class Event',
                'display_name_plural' => 'Class Events',
                'icon' => 'ion-ios-calendar',
                'model_name' => 'App\\class_events',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\ClassEventsController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-25 11:56:02',
                'updated_at' => '2019-10-25 11:56:23',
            ),
            9 => 
            array (
                'id' => 12,
                'name' => 'bookings',
                'slug' => 'bookings',
                'display_name_singular' => 'Booking',
                'display_name_plural' => 'Bookings',
                'icon' => 'ion-ios-time',
                'model_name' => 'App\\Booking',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\BookingController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-25 12:37:28',
                'updated_at' => '2019-10-25 12:38:09',
            ),
            10 => 
            array (
                'id' => 13,
                'name' => 'accounts',
                'slug' => 'accounts',
                'display_name_singular' => 'Account',
                'display_name_plural' => 'Accounts',
                'icon' => NULL,
                'model_name' => 'App\\Account',
                'policy_name' => NULL,
                'controller' => 'App\\Http\\Controllers\\AccountController',
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_display_column":null,"order_direction":"asc","default_search_key":null,"scope":null}',
                'created_at' => '2019-10-28 16:03:17',
                'updated_at' => '2019-10-28 16:03:49',
            ),
            11 => 
            array (
                'id' => 16,
                'name' => 'chat_responses',
                'slug' => 'chat-responses',
                'display_name_singular' => 'Chat Response',
                'display_name_plural' => 'Chat Responses',
                'icon' => NULL,
                'model_name' => 'App\\chatResponses',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 0,
                'details' => '{"order_display_column":null,"order_direction":"asc","default_search_key":null}',
                'created_at' => '2019-11-02 12:18:33',
                'updated_at' => '2019-11-02 12:18:33',
            ),
        ));
        
        
    }
}