<?php

use Illuminate\Database\Seeder;

class GalleriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('galleries')->delete();
        
        \DB::table('galleries')->insert(array (
            0 => 
            array (
                'id' => 3,
                'image' => 'galleries/October2019/FCYKY5d5QBVj4r10BwAb.jpg',
                'category' => NULL,
                'title' => NULL,
                'caption' => NULL,
                'created_at' => '2019-10-28 11:37:37',
                'updated_at' => '2019-10-28 11:37:37',
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 4,
                'image' => 'galleries/October2019/fiKUpolZ5hXpAJuXFnCw.png',
                'category' => NULL,
                'title' => NULL,
                'caption' => NULL,
                'created_at' => '2019-10-28 12:04:22',
                'updated_at' => '2019-10-28 12:04:22',
                'status' => 'Active',
            ),
        ));
        
        
    }
}