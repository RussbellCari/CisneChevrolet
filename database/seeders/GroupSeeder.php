<?php

namespace Database\Seeders;

use App\Models\Group;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GroupSeeder extends Seeder{
    /**
     * Run the database seeds.
     */
    public function run(): void{
        Group::create([
            'name' => 'GRUPO 1',
            'text' => 'Filipenses 4:13',
            'motto' => 'Lema 1',
            'song' => 'cancion 1',
            'church_id' => 1,
        ]);

        Group::create([
            'name' => 'GRUPO 2',
            'text' => 'Filipenses 4:13',
            'motto' => 'Lema 2',
            'song' => 'cancion 2',
            'church_id' => 1,
        ]);

        Group::create([
            'name' => 'GRUPO 3',
            'text' => 'Filipenses 4:13',
            'motto' => 'Lema 3',
            'song' => 'cancion 3',
            'church_id' => 1,
        ]);

    }
}
