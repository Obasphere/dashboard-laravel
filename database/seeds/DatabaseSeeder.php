<?php

use Illuminate\Database\Seeder;
use CittaDashboard\Contact;
use CittaDashboard\Item;
use CittaDashboard\Payment;
use CittaDashboard\Invoice;
use CittaDashboard\Opportunity;
use Faker\Factory;

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
        $faker = Factory::create();

    	foreach(range(1, 40) as $i) {
    		Contact::create([
    			'name' => $faker->name
    		]);
    	}

    	foreach(range(1, 50) as $i) {
    		Item::create([
    			'name' => 'Product '.$i
    		]);
    	}

    	foreach(range(1, 70) as $i) {
    		Invoice::create([
    			'issue_date' => '2019-02-'.mt_rand(1, 28),
    			'due_date' => '2019-02-'.mt_rand(1, 28),
    			'status' => $faker->randomElement(['sent', 'paid'])
    		]);
    	}

    	foreach(range(1, 60) as $i) {
    		Payment::create([
    			'payment_date' => '2019-02-'.mt_rand(1, 28),
    			'status' => $faker->randomElement(['undeposited', 'deposited'])
    		]);
    	}

    	foreach(range(1, 40) as $i) {
    		Opportunity::create([
    			'status' => $faker->randomElement(['new', 'lost', 'won'])
    		]);
    	}
    }
}
