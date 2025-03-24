<?php

namespace Database\Seeders;

use App\Models\Admin\Category;
use App\Models\Admin\CategoryContent;
use App\Models\Admin\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categoris = collect([
            [
                'featured_image'=>"",
                'map_icon'=>"",
                'alias'=>"berline",
                'order'=>"1",
            ],
            [
                'featured_image'=>"",
                'map_icon'=>"",
                'alias'=>"citadine",
                'order'=>"2",
            ],
        ]);

        $categoris->each(function($category){
           $newCategory =  Category::updateOrCreate(['alias'=>$category["alias"]],$category);
            foreach(Language::get() as $language) {
                $data['name'] = $category["alias"];

                $data['description'] = '';

                $data['category_id'] = $newCategory->id;

                $data['language_id']  = $language->id;
                CategoryContent::updateOrCreate([
                    "category_id"=>$newCategory->id,
                    "language_id"=>$language->id,
                ],$data);
            }
        });
    }
}
