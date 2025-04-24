<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create(['name'=>'Hala Hasan','bio'=>'Author of the Harry Potter series.']);
        Author::create(['name'=>'Colleen Hoover','bio'=>'Classic English novelist.']);
        Author::create(['name'=>'Moneer Kfori','bio'=>'Author of books on Platos Phaedrus and Phaedo ']);
    }
}
