<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        // $this->call(UserTableSeeder::class);
         $this->call('PostsSeeder');
    }
}
class PostsSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Posts')->delete();
        Post::create([
            'title' => 'First Post',
            'slug' => 'first-post',
            'excerpt' => '<b>First Post body</b>',
            'content' => '<b>Content first post body</b>',
            'published' => true,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        Post::create([
            'title' => 'Second Post',
            'slug' => 'Second-post',
            'excerpt' => '<b>Second Post body</b>',
            'content' => '<b>Content Second post body</b>',
            'published' => false,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        Post::create([
            'title' => 'Third Post',
            'slug' => 'Third-post',
            'excerpt' => '<b>Third Post body</b>',
            'content' => '<b>Content Third post body</b>',
            'published' => false,
            'published_at' => DB::raw('CURRENT_TIMESTAMP'),
        ]);
        // TODO: Implement run() method.
    }
}












