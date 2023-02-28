<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DateTime;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();
        \App\Models\Videos::factory(2)->create();

        \App\Models\User::factory()->create([
            'nom' => 'Afiri',
            'prenom' => 'Mohammed Chouaib',
            'cin' => 'AL442',
            'adresse' => 'Rue khoubza',
            'dateNaissance' => DateTime::createFromFormat('d/m/Y', '24/03/2003'),
            'permis' => 'A',
            'email' => 'ouwoxpro@gmail.com',
            'password' => '$2y$10$PkZxRTP5K1OWOm3AVkl7WeajuEJc3gjV/.LO9W0Hj/9Mw2rEQ6QMW', //aaa
            'admin' => true
        ]);
    }
}
