<?php

use Illuminate\Database\Seeder;

class ChatResponsesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('chat_responses')->delete();
        
        \DB::table('chat_responses')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'welcome',
                'body' => 'Hi 👋, Welcome to the Kev Event Booking Assistant.',
                'created_at' => '2019-11-02 12:18:55',
                'updated_at' => '2019-11-02 12:18:55',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'askService',
                'body' => 'Kindly respond with *List events* to checkout upcoming events or *Book Event* to schedule a safari.',
                'created_at' => '2019-11-02 12:19:42',
                'updated_at' => '2019-11-02 12:19:42',
            ),
        ));
        
        
    }
}