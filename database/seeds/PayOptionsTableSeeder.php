<?php

use Illuminate\Database\Seeder;

class PayOptionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('pay_options')->delete();
        
        \DB::table('pay_options')->insert(array (
            0 => 
            array (
                'id' => 1,
                'payWith' => 'Card',
                'icon' => '<img src="https://img.icons8.com/clouds/18/000000/card-in-use.png">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'payWith' => 'Mpesa',
                'icon' => '<img src="images/img/mpesa.jpg" class="height=18px" >',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'payWith' => 'Cash at Studio',
                'icon' => '<img src="https://img.icons8.com/plasticine/18/000000/cash-.png">',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}