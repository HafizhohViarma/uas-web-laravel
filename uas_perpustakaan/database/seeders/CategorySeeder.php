<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id'=>1001,
                'name'=>'Buku Ajar',
                'keterangan'=>'Pembelajaran'
            ],
            [
                'id'=>1002,
                'name'=>'Buku Referensi',
                'keterangan'=>'Analisa'
            ],
            [
                'id'=>1003,
                'name'=>'Komik',
                'keterangan'=>'Hiburan'
            ],
            [
                'id'=>1004,
                'name'=>'Lainnya.',
                'keterangan'=>'Selain id 1003-1004'
            ],
        ];
        foreach($categories as $category){
            Category::create($category);
    }
    }
}
