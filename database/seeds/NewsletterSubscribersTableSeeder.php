<?php

use Illuminate\Database\Seeder;

class NewsletterSubscribersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Subscriber::class,20)->create();
        // $this->call(UsersTableSeeder::class);
    }
}
