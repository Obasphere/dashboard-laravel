<?php

use Illuminate\Database\Seeder;
use App\Contact;
use App\Item;
use App\Payment;
use App\Invoice;
use App\Opportunity;
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

    	foreach(range(1, 500) as $i) {
    		Contact::create([
    			'name' => $faker->name
    		]);
    	}

    	foreach(range(1, 250) as $i) {
    		Item::create([
    			'name' => 'Product '.$i
    		]);
    	}

    	foreach(range(1, 500) as $i) {
    		Invoice::create([
    			'issue_date' => '2019-02-'.mt_rand(1, 28),
    			'due_date' => '2019-02-'.mt_rand(1, 28),
    			'status' => $faker->randomElement(['sent', 'paid'])
    		]);
    	}

    	foreach(range(1, 500) as $i) {
    		Payment::create([
    			'payment_date' => '2019-02-'.mt_rand(1, 28),
    			'status' => $faker->randomElement(['undeposited', 'deposited'])
    		]);
    	}

    	foreach(range(1, 500) as $i) {
    		Opportunity::create([
    			'status' => $faker->randomElement(['new', 'lost', 'won'])
    		]);
    	}
    }
}
