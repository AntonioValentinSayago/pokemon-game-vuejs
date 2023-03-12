<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Estudiante;
use App\Models\Curso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* Creating 15 students and 8 courses. */
        Estudiante::factory()->times(15)->create();
        Curso::factory()->times(8)->create()->each(
            function ($curso) {
                $curso->estudiantes()->sync(
                    Estudiante::all()->random(3)
                );
            }
        );
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
