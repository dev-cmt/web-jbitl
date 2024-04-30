<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product\ProductItem;
use App\Models\Product\ProductCategory;

class ImportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
            'code'=>'1000',
            'title'=>'AE water reducing agent',
            'description'=>'It is a good AE water reducer mainly composed of lignin and increases the durability of concrete.',
            'icon'=>'mdi mdi-chemical-weapon',
            'status'=>'1',
            'user_id'=>'1',
            'index'=>'0',
        ]);
        ProductCategory::create([
            'code'=>'2000',
            'title'=>'High performance AE water reducing agent',
            'description'=>'It has high water reduction performance and good slump loss reduction effect.',
            'icon'=>'mdi mdi-chemical-weapon',
            'status'=>'1',
            'user_id'=>'1',
            'index'=>'0',
        ]);
        ProductCategory::create([
            'code'=>'3000',
            'title'=>'High performance water reducing agent',
            'description'=>'It has effective high water reduction performance and can be used for concrete products with low water-cement ratios that do not require air entrainment.',
            'icon'=>'mdi mdi-chemical-weapon',
            'status'=>'1',
            'user_id'=>'1',
            'index'=>'0',
        ]);
        ProductCategory::create([
            'code'=>'4000',
            'title'=>'Fluidizer',
            'description'=>'It is suitable for improving the fluidity of concrete on site and for producing underwater concrete.',
            'icon'=>'mdi mdi-chemical-weapon',
            'status'=>'1',
            'user_id'=>'1',
            'index'=>'0',
        ]);
        ProductCategory::create([
            'code'=>'5000',
            'title'=>'Water reducing agent',
            'description'=>'Suitable for factory-manufactured concrete products, moderate water reduction and good surface finish can be expected.',
            'icon'=>'mdi mdi-chemical-weapon',
            'status'=>'1',
            'user_id'=>'1',
            'index'=>'0',
        ]);
        ProductCategory::create([
            'code'=>'6000',
            'title'=>'Curing accelerator',
            'description'=>'Effective for concrete construction in winter when freezing is a concern.',
            'icon'=>'mdi mdi-chemical-weapon',
            'status'=>'1',
            'user_id'=>'1',
            'index'=>'0',
        ]);
        ProductCategory::create([
            'code'=>'7000',
            'title'=>'Shrinkage reducing agent',
            'description'=>'Effective in reducing drying shrinkage, which causes cracks in concrete.',
            'icon'=>'mdi mdi-chemical-weapon',
            'status'=>'1',
            'user_id'=>'1',
            'index'=>'0',
        ]);
        ProductCategory::create([
            'code'=>'8000',
            'title'=>'AE agent/air volume control agent',
            'description'=>'Admixture for entraining air in concrete.',
            'icon'=>'mdi mdi-chemical-weapon',
            'status'=>'1',
            'user_id'=>'1',
            'index'=>'0',
        ]);
        ProductCategory::create([
            'code'=>'9000',
            'title'=>'Admixtures for special applications',
            'description'=>'We offer a wide range of admixtures for different types of concrete.',
            'icon'=>'mdi mdi-chemical-weapon',
            'status'=>'1',
            'user_id'=>'1',
            'index'=>'0',
        ]);
        
    }
}
