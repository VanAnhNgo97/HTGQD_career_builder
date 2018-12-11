<?php

use Illuminate\Database\Seeder;

class WeightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $queryString = "INSERT INTO `weight` (`id`, `name`, `weight`) VALUES 
        (1, 'ages', 1),
		(2, 'career_sim', 1),
		(3, 'salarys', 1),
		(4, 'distances', 1),
		(5, 'experiences', 1),
		(6, 'positions', 1),
		(7, 'soft_kill', 1)
		;";
        // DB::table('position')->truncate();
        DB::statement($queryString);
    }
}
