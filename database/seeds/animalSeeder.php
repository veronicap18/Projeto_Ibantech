<?php

use Illuminate\Database\Seeder;

class animalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *	
     * @return void
     */
    public function run()
    {
        factory(App\animal::class, 10)
        	->create();
    }
}
