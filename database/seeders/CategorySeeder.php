<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    const CATEGORIES = ['Cliente', 'Proveedor', 'Funcionario Interno'];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        //  
        foreach (self::CATEGORIES as $category) {
            DB::table('categories')->insert([
                'name' => $category,                
            ]);
        }
    }
}
