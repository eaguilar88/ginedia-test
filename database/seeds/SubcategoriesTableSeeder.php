<?php

use Illuminate\Database\Seeder;

class SubcategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->insert(array(
            0 =>
                array(
                    'id' => 1,
                    'category_id' => 1,
                    'name' => 'Todovisión',
                    'slug' => 'todovision',
                    'description' => "",
                ),
            1 =>
                array(
                    'id' => 2,
                    'category_id' => 1,
                    'name' => 'Europivot',
                    'slug' => 'europivot',
                    'description' => "",
                ),
            2 =>
                array(
                    'id' => 3,
                    'category_id' => 1,
                    'name' => 'Tiradores',
                    'slug' => 'tiradores',
                    'description' => "",
                ),
            3 =>
                array(
                    'id' => 4,
                    'category_id' => 1,
                    'name' => 'Cerraduras',
                    'slug' => 'cerraduras',
                    'description' => "",
                ),
            4 =>
                array(
                    'id' => 5,
                    'category_id' => 1,
                    'name' => 'Frenos',
                    'slug' => 'frenos',
                    'description' => "",
                ),
            5 =>
                array(
                    'id' => 6,
                    'category_id' => 1,
                    'name' => 'Accesorios',
                    'slug' => 'accesorios',
                    'description' => "",
                ),
            6 =>
                array(
                    'id' => 7,
                    'category_id' => 2,
                    'name' => 'Conectores',
                    'slug' => 'conectores',
                    'description' => "",
                ),
            7 =>
                array(
                    'id' => 8,
                    'category_id' => 2,
                    'name' => 'Bisagras',
                    'slug' => 'bisagras',
                    'description' => "",
                ),
            8 =>
                array(
                    'id' => 9,
                    'category_id' => 2,
                    'name' => 'Tiradores Puerta',
                    'slug' => 'tiradores-puerta',
                    'description' => "",
                ),
            9 =>
                array(
                    'id' => 10,
                    'category_id' => 2,
                    'name' => 'Pomos',
                    'slug' => 'pomos',
                    'description' => "",
                ),
            10 =>
                array(
                    'id' => 11,
                    'category_id' => 2,
                    'name' => 'Brazos Tensores',
                    'slug' => 'brazos-tensores',
                    'description' => "",
                ),
            11 =>
                array(
                    'id' => 12,
                    'category_id' => 2,
                    'name' => 'Policarbonatos',
                    'slug' => 'policarbonatos',
                    'description' => "",
                ),
            12 =>
                array(
                    'id' => 13,
                    'category_id' => 3,
                    'name' => 'Soportes',
                    'slug' => 'soportes',
                    'description' => "",
                ),
            13 =>
                array(
                    'id' => 14,
                    'category_id' => 3,
                    'name' => 'Arañas',
                    'slug' => 'aranas',
                    'description' => "",
                ),
            14 =>
                array(
                    'id' => 15,
                    'category_id' => 3,
                    'name' => 'Repisas y Vitrinas',
                    'slug' => 'repisas-y-vitrinas',
                    'description' => "",
                ),
            15 =>
                array(
                    'id' => 16,
                    'category_id' => 4,
                    'name' => 'Felpa',
                    'slug' => 'felpa',
                    'description' => "",
                ),
            16 =>
                array(
                    'id' => 17,
                    'category_id' => 4,
                    'name' => 'Gomas y Guardapolvos',
                    'slug' => 'gomas-y-guardapolvos',
                    'description' => "",
                ),
            17 =>
                array(
                    'id' => 18,
                    'category_id' => 4,
                    'name' => 'Rodamientos y otros',
                    'slug' => 'rodamientos-y-otros',
                    'description' => "",
                ),
            18 =>
                array(
                    'id' => 19,
                    'category_id' => 4,
                    'name' => 'Herramientas',
                    'slug' => 'herramientas',
                    'description' => "",
                ),
            19 =>
                array(
                    'id' => 20,
                    'category_id' => 5,
                    'name' => 'Eurocolgantes',
                    'slug' => 'eurocolgantes',
                    'description' => "",
                ),
            20 =>
                array(
                    'id' => 21,
                    'category_id' => 5,
                    'name' => 'Deslizantes',
                    'slug' => 'deslizantes',
                    'description' => "",
                ),
            21 =>
                array(
                    'id' => 22,
                    'category_id' => 5,
                    'name' => 'Euroshower',
                    'slug' => 'euroshower',
                    'description' => "",
                ),
            22 =>
                array(
                    'id' => 23,
                    'category_id' => 5,
                    'name' => 'Plegables',
                    'slug' => 'plegables',
                    'description' => "",
                ),
            23 =>
                array(
                    'id' => 24,
                    'category_id' => 5,
                    'name' => 'Automática',
                    'slug' => 'automatica',
                    'description' => "",
                ),
            24 =>
                array(
                    'id' => 25,
                    'category_id' => 6,
                    'name' => 'Soportes para Vidrio',
                    'slug' => 'soportes-para-vidrio',
                    'description' => "",
                ),
            25 =>
                array(
                    'id' => 26,
                    'category_id' => 6,
                    'name' => 'Conectores',
                    'slug' => 'conectores',
                    'description' => "",
                ),
            26 =>
                array(
                    'id' => 27,
                    'category_id' => 6,
                    'name' => 'Tubos',
                    'slug' => 'tubos',
                    'description' => "",
                ),
            27 =>
                array(
                    'id' => 28,
                    'category_id' => 6,
                    'name' => 'Parales Base',
                    'slug' => 'parales-base',
                    'description' => "",
                ),
        ));
    }
}
