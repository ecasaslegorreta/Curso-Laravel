<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        // $this->truncateTables(['rol',  'professions','municipios']);
        $this->truncateTables(['rol','permiso']);

        // $this->call(ProfessionSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(MunicipiosSeeder::class);
        
        $this->call(TablaRolSeeder::class);
        $this->call(TablaPermisoSeeder::class);
        
    }
    protected function truncateTables(array $table)
    {
    	DB::statement('SET FOREIGN_KEY_CHECKS =0;');

        foreach ($table as $table){
        	DB::table($table)->truncate();
        }
        DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }
}
