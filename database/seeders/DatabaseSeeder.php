<?php

namespace Database\Seeders;

use App\Models\Blog\BlogAuthorModel;
use App\Models\Blog\BlogCommentModel;
use App\Models\Blog\BlogModel;
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
        // User::factory(10)->create();
        BlogModel::factory(40)->create();
        BlogCommentModel::factory(60)->create();
        BlogAuthorModel::factory(20)->create();
    }
}
