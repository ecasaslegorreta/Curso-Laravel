<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\models\rol;

class TablaRolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        rol::create([
        	'nombre'=>'administrador']);
        rol::create([
        	'nombre'=>'editor']);
        rol::create([
            'nombre'=>'supervisor']);
        
             /** DB::table('rol')->insert([
                'nombre'=>'administrador'
            ]);    */

        
    }
}
