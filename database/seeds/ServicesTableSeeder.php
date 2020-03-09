<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('services')->delete();
        
        \DB::table('services')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Spin Cycling Fun filled cardio.',
                'icon' => 'flaticon-gym-25',
                'desc' => 'This has to be most action you can do to music without \'ever\' moving your feet. Its like dancing on a bike but not moving forward, yet getting the most low impact cardiovascular exercise this side of a run. Its total calorie burning fun. Spiiiiin! At TipwaTipwa, we\'ll help you burn more, get you into shape quicker than you thought.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Yoga Connect your body and mind',
                'icon' => 'flaticon-buddhist-yoga-pose',
                'desc' => 'The possession of mental and physical discipline manifest in the realization of a peaceful body and mind - Actualization. The art of Yoga is an assured mean to this end. Yoga helps increase flexibility, muscle strength, and boost body tone by controlling the mind',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Boot Camp & Circuits Reset your metabolism.',
                'icon' => 'flaticon-woman',
                'desc' => 'Otherwise known in TT circles as P.E. for grownups at the gym in your body. You want to burn calories in 45 minutes or less and keep burning them for the next 72 hours? Just rock up to one of our early morning boot camp sessions and find out how. All you need to bring is a bottle of water, a small towel and loads of can-do attitude.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Spin \'n Shred',
                'icon' => 'flaticon-gym-25',
                'desc' => 'This is a Spin class with a twist - cycle for part of the class, then get off your \'steel steeds\' and get to working out on the exercise floor - be it via circuit exercise stations, TRX, or even yoga. It will always be a surprise, but a cross training session that\'s guaranteed to burn those calories, build your strength and even sculpt you. Come for the fun, stay for the burn! ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Sculpt \'n Shred',
                'icon' => 'flaticon-gym-25',
                'desc' => 'One hour where your mind takes a back seat to your body. Going all out to tone and firm up those \'loose\' bits, as you shred the fat off and break and tear down the muscles, using your body weight and simple props - ingredients of a recipe to your building body definition with taut and defined angles. A serious strength and endurance workout that will leave you \'burned\' but on the path to a fitter, stronger and leaner you. What\'s not to like? ',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            5 => 
            array (
                'id' => 6,
                'title' => 'Sports Swim, Bike, Run, Fun.',
                'icon' => 'flaticon-triathlon-silhouettes-in-a-triangle',
                'desc' => 'Taking part in activities such as swimming, running and cycling is not only fun, but also an effective way to gauge fitness and still get a workout. They’re all activities that will involve muscles from all over your body, meaning you get to tone up your whole body.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            6 => 
            array (
                'id' => 7,
                'title' => 'Kickboxing Kick, Box, Tone.',
                'icon' => 'flaticon-sport',
                'desc' => 'Glove up and take in a good mix of moderate to high-intensity exertion that comes chock full of calorie burning benefits, that help you get in shape fairly quickly through weight loss and improved muscle tone and body balance and agility. Its a heck of a stress reliever too, so come get a kick out of kickboxing it out of your system.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
            7 => 
            array (
                'id' => 8,
                'title' => 'Trail Hikes & Mountain Excursions',
                'icon' => 'flaticon-man-in-hike',
                'desc' => 'We love fitness activities that take us out to the most scenic sites in Kenya and beyond. Not only do hikes and excursions work out your entire body and help your breathing, they also provide fun, adventure, and a great opportunity to forge bonds with your teammates.',
                'created_at' => NULL,
                'updated_at' => NULL,
            ),
        ));
        
        
    }
}