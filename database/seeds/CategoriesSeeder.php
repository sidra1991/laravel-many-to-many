<?php

use Illuminate\Database\Seeder;
use App\Categories;
class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 5; $i++) {
            $nomi = [ 'tv','auto','animali','casa','sport','salute' ];

            $newCategoria = new Categories();
            $newCategoria->name =  $nomi[$i];
            $newCategoria->save();
        }
    }
}
