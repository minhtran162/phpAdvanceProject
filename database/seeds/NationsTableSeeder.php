<?php

use Illuminate\Database\Seeder;

class NationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Models\Nation::class, 15)->create();
    }
}
