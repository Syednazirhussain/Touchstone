<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $this->call(CountriesTableSeeder::class);
        $this->call(LanguagesTableSeeder::class);
        $this->call(BannersTableSeeder::class);
        $this->call(TranslationsTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(ReviewTableSeeder::class);
        $this->call(NavigationTableSeeder::class);
        $this->call(IconsTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductBundlesTableSeeder::class);
        $this->call(ProductCategoryTableSeeder::class);
        $this->call(ProductPackAdvantagesTableSeeder::class);
        $this->call(ProductProductCategoryTableSeeder::class);
        $this->call(FileTableSeeder::class);
        $this->call(CountryProductsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
