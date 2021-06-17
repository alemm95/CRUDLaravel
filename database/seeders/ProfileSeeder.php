<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'title' => 'Administrador',
            'biography' => 'Hola',
            'website' => 'Administrador.com',
            'user_id' => '3',
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
         ]);
         
         DB::table('profiles')->insert([
            'title' => 'Editor',
            'biography' => 'Que tal',
            'website' => 'Editor.com',
            'user_id' => '2',
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
         ]);

         DB::table('profiles')->insert([
            'title' => 'Player',
            'biography' => 'Adios',
            'website' => 'Player.com',
            'user_id' => '1',
            'created_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' =>  Carbon::now()->format('Y-m-d H:i:s'),
         ]);
    }
}