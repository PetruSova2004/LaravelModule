<?php

namespace Database\Seeders;

use App\Modules\Admin\Test\Models\Test;
use Database\Factories\TestFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Cast\Int_;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Test::factory()
            ->count(50)

            ->create();
    }
}
