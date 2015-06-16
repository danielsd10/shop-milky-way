<?php

class CategoryTableSeeder extends Seeder {

	public function run()
	{
        // delete current data in db
        DB::table('categories')->delete();

        // create new records
        Category::create(['name' => "Computadoras"]);
        Category::create(['name' => "Laptops"]);
        Category::create(['name' => "Tablets"]);
        Category::create(['name' => "Smartphones"]);
	}

}
