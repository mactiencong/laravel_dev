<?php

use Illuminate\Database\Seeder;
use App\Database\Seeder\TestSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TestSeeder::class);
    }
}
