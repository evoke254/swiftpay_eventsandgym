<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'role_id' => NULL,
                'fname' => 'Alex',
                'lname' => ' ',
                'email' => 'alex@example.com',
                'avatar' => 'users/default.png',
                'number' => '254742968713',
                'account_id' => '1',
                'title' => 'trainer',
                'email_verified_at' => '2019-10-25 07:19:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'category' => 'Yoga',
                'image' => 'images/Tipwa_Tipwa16.JPG',
                'description' => 'Alex Gitonga is a certified yoga teacher from the Africa Yoga Project. His classes include a mix of Baptiste, Ashtanga, Kundalini, Hatha, and Power yoga.   This former acrobat and marathoner is also a mixed martial arts instructor and a Kung Fu practitioner with a Dan black belt in Tong-II Moo Do. He is happiest when he sees unity in all things and inspires his students to be in the present.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'role_id' => NULL,
                'fname' => 'Charles',
                'lname' => ' ',
                'email' => 'charles@example.com',
                'avatar' => 'users/default.png',
                'number' => '254742968713',
                'account_id' => '2',
                'title' => 'trainer',
                'email_verified_at' => '2019-10-25 07:19:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'category' => 'Yoga',
                'image' => 'images/Yoga_Instructor.jpeg',
                'description' => 'Charles Lwanga Ocholla has been practising yoga since 2009.  He is certified in Baptiste, Power, Kundalini, and Ashtanga yoga. Charles, who is also a martial arts black belt instructor and a YOD teacher, is driven by his desire to increase awareness of the benefits of yoga and to help people achieve their fitness goals.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'role_id' => 1,
                'fname' => 'Joss',
                'lname' => ' ',
                'email' => 'joss@example.com',
                'avatar' => 'users/default.png',
                'number' => '254742968713',
                'account_id' => '3',
                'title' => 'trainer',
                'email_verified_at' => '2019-10-25 07:19:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'category' => 'Spin',
                'image' => 'images/TipwaTipwa-F01S.jpeg',
                'description' => 'Imagine Dragon\'s Thunder or Sweet Nothing by Florence Welch and Calvin Harris, just to name a few tracks that are some of my all time favourite spinning tracks on my playlist. Music is everything when it comes to spin, and knowing my music makes it better! Trained by Kris Pennel of Full Psycle in Costa Mesa, my style of teaching is riding to the beat, then getting in some movements and motivation. The sorting hat in Harry Potter would place me in Gryffindor, but I would feel like a Hufflepuff. Go figure! ',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => '2019-10-25 07:19:42',
            ),
            3 => 
            array (
                'id' => 4,
                'role_id' => NULL,
                'fname' => 'Marika',
                'lname' => ' ',
                'email' => 'marika@example.com',
                'avatar' => 'users/default.png',
                'number' => '254742968713',
                'account_id' => '4',
                'title' => 'trainer',
                'email_verified_at' => '2019-10-25 07:19:42',
                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                'category' => 'Spin, Strength and TRX',
                'image' => 'images/Tipwa_Tipwa020S.JPG',
            'description' => 'Marika is a certified instuctor in TRX (suspension training bodyweight exercises) and indoor spin cycling. Marika is happiest when he sees the satisfaction in people’s faces when they achieve and surpass their fitness goals.',
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 8,
                'role_id' => 2,
                'fname' => 'Kevin',
                'lname' => 'Simiyu',
                'email' => 'apps.kahaki@gmail.com',
                'avatar' => 'users/default.png',
                'number' => '0742968713',
                'account_id' => NULL,
                'title' => 'title',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xZytqLqW0IZNV8ovvMjCzOBJcJfZt.14bV7t2LIJKbmNu44Gz8mJG',
                'category' => NULL,
                'image' => NULL,
                'description' => NULL,
                'remember_token' => NULL,
                'settings' => NULL,
                'created_at' => '2019-10-30 07:14:00',
                'updated_at' => '2019-10-30 07:14:01',
            ),
        ));
        
        
    }
}