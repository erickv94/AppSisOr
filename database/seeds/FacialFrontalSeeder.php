<?php

use Illuminate\Database\Seeder;

class FacialFrontalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\FacialFrontal::class,20)->create();
    }
}
