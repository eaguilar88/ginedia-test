<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        DB::table('categories')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'Accesorios para puertas',
                'slug' => 'accesorios-para-puertas',
                'description' => ' ',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Accesorios para baños',
                'slug' => 'accesorios-para-banos',
                'description' => ' ',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Accesorios para fachadas',
                'slug' => 'accesorios-para-fachadas',
                'description' => ' ',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Accesorios de ventanería y herramientas',
                'slug' => 'accesorios-de-ventaneria-y-herramientas',
                'description' => ' ',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Sistemas de puertas',
                'slug' => 'sistemas-de-puertas',
                'description' => ' ',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Accesorios para Barandas',
                'slug' => 'accesorios-para-barandas',
                'description' => ' ',
            ),
        ));
    }
}
