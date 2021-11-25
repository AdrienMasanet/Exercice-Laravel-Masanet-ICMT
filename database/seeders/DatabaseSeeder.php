<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\RoleSeeder;
use App\Models\Component;
use App\Models\Computer;
use App\Models\Lend;
use App\Models\Repairer;
use App\Models\Repair;
use App\Models\Request;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(BrandSeeder::class);

        User::factory()->count(150)->create();
        Component::factory()->count(200)->create();
        Computer::factory()->count(100)->create();
        Request::factory()->count(70)->create();
        Lend::factory()->count(40)->create();
        Repairer::factory()->count(10)->create();
        Repair::factory()->count(20)->create();
    }
}
