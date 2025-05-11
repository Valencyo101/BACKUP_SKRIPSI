<?php

use App\Category;
use App\Tags;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
        User::create([
            'name' => 'admin',
            'email' => 'struchcemestry@gmail.com',
            'password' => bcrypt('123456789'),
            'tipe' => '1',
            'remember_token' => '',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'name' => 'kopi',
            'slug' => Str::slug('kopi'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'name' => 'petani',
            'slug' => Str::slug('petani'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Category::create([
            'name' => 'hama',
            'slug' => Str::slug('hama'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Tags::create([
            'name' => 'robusta',
            'slug' => Str::slug('robusta'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Tags::create([
            'name' => 'bubuk',
            'slug' => Str::slug('bubuk'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Tags::create([
            'name' => 'pupuk',
            'slug' => Str::slug('pupuk'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
