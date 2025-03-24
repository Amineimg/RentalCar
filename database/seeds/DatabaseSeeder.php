<?php

use Database\Seeders\CategorySeeder;
use Database\Seeders\CurrencySeeder;
use Database\Seeders\LanguageSeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
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
        $this->call([
            // LanguageSeeder::class,
            // RoleSeeder::class,
            // UserSeeder::class,
            // CurrencySeeder::class,
            CategorySeeder::class,
        ]);
    }
}
