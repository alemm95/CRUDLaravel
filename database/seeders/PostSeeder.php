<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'Sevilla',
            'body' => 'Fine Thanks',
            'user_id' => '1',
            'categoria_id' => '1',
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
         ]);
         
         DB::table('posts')->insert([
            'name' => 'Huelva',
            'body' => 'How are you',
            'user_id' => '1',
            'categoria_id' => '2',
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
         ]);

         DB::table('posts')->insert([
            'name' => 'Cadiz',
            'body' => 'Good bye',
            'user_id' => '1',
            'categoria_id' => '3',
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
         ]);
    }
}