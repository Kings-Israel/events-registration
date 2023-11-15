<?php

namespace Database\Seeders;

use App\Models\Visitor;
use Illuminate\Database\Seeder;

class DelegateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 24; $i++) {
            Visitor::create([
                'name' => 'Walk in '.$i,
                'category' => 'Delegate',
                'Country' => 'Kenya',
            ]);
        }
    }
}
