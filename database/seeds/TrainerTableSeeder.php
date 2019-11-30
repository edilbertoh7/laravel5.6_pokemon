<?php

use Illuminate\Database\Seeder;
use edy\Trainer;
class TrainerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(Trainer::class, 5)->create([
       ]);
    }
}
