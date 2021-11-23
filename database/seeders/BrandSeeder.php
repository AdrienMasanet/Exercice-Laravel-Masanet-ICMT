<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Brand;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(['name' => 'Acer']);
        Brand::create(['name' => 'Asus']);
        Brand::create(['name' => 'Toshiba']);
        Brand::create(['name' => 'Apple']);
        Brand::create(['name' => 'Lenovo']);
        Brand::create(['name' => 'MSI']);
        Brand::create(['name' => 'Corsair']);
        Brand::create(['name' => 'Packaerd Bell']);
        Brand::create(['name' => 'AlienWare']);
        Brand::create(['name' => 'Dell']);
        Brand::create(['name' => 'Aorus']);
        Brand::create(['name' => 'HP']);
        Brand::create(['name' => 'GigaByte']);
        Brand::create(['name' => 'LG']);
        Brand::create(['name' => 'Medion']);
        Brand::create(['name' => 'Razer']);
        Brand::create(['name' => 'Aerocool']);
        Brand::create(['name' => 'Antek']);
        Brand::create(['name' => 'Be Quiet !']);
        Brand::create(['name' => 'EVGA']);
        Brand::create(['name' => 'Fractal Design']);
        Brand::create(['name' => 'NZXT']);
        Brand::create(['name' => 'Seaosonic']);
        Brand::create(['name' => 'ASRock']);
        Brand::create(['name' => 'KFA2']);
        Brand::create(['name' => 'Power Color']);
        Brand::create(['name' => 'Zotac']);
        Brand::create(['name' => 'Inno 3D']);
        Brand::create(['name' => 'SAPPHIRE']);
        Brand::create(['name' => 'Samsung']);
        Brand::create(['name' => 'Crucial']);
        Brand::create(['name' => 'Kingston']);
        Brand::create(['name' => 'Sandisk']);
        Brand::create(['name' => 'Seagate']);
        Brand::create(['name' => 'Western Digital']);
        Brand::create(['name' => 'Fujitsu']);
        Brand::create(['name' => 'Synology']);
    }
}
