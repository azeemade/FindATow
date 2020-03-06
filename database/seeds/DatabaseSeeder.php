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
        $this->call('EstimatorTableSeeder');
    }
}

class EstimatorTableSeeder extends Seeder{
	public function run(){
		DB::table('tow_Estimators')->insert([
			['towFrom' => "Agege", 'towTo' => "Agege"],
			['towFrom' => "Ajeromi-Ifelodun", 'towTo' => "Ajeromi-Ifelodun"],
			['towFrom' => "Alimosho", 'towTo' => "Alimosho"],
			['towFrom' => "Amuwo-Odofin", 'towTo' => "Amuwo-Odofin"],
			['towFrom' => "Apapa", 'towTo' => "Apapa"],
			['towFrom' => "Eti-Osa", 'towTo' => "Eti-Osa"],
			['towFrom' => "Ifako-Ijaye", 'towTo' => "Ifako-Ijaye"],
			['towFrom' => "Ikeja", 'towTo' => "Ikeja"],
			['towFrom' => "Kosofe", 'towTo' => "Kosofe"],
			['towFrom' => "Lagos Island", 'towTo' => "Lagos Island"],
			['towFrom' => "Lagos Mainland", 'towTo' => "Lagos Mainland"],
			['towFrom' => "Mushin", 'towTo' => "Mushin"],
			['towFrom' => "Ojo", 'towTo' => "Ojo"],
			['towFrom' => "Oshodi-Isolo", 'towTo' => "Oshodi-Isolo"],
			['towFrom' => "Somolu", 'towTo' => "Somolu"],
		]);
	}
}
