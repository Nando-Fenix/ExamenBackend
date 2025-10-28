<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Empleado;

class EmpleadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Empleado::create([
            'nombre' => 'Juan',
            'apellido' => 'Pérez',
            'correo' => 'juan.perez@example.com',
            'salario' => 1500.50
        ]);

        Empleado::create([
            'nombre' => 'María',
            'apellido' => 'Gómez',
            'correo' => 'maria.gomez@example.com',
            'salario' => 1800.75
        ]);

        Empleado::create([
            'nombre' => 'Carlos',
            'apellido' => 'Ramírez',
            'correo' => 'carlos.ramirez@example.com',
            'salario' => 2000.00
        ]);
        Empleado::create([
            'nombre' => 'Ana',
            'apellido' => 'Martínez',
            'correo' => 'ana.martinez@example.com',
            'salario' => 1700.25
        ]);

        Empleado::create([
            'nombre' => 'Luis',
            'apellido' => 'Torres',
            'correo' => 'luis.torres@example.com',
            'salario' => 1600.00
        ]);

        Empleado::create([
            'nombre' => 'Sofía',
            'apellido' => 'López',
            'correo' => 'sofia.lopez@example.com',
            'salario' => 1900.50
        ]);

        Empleado::create([
            'nombre' => 'Miguel',
            'apellido' => 'Hernández',
            'correo' => 'miguel.hernandez@example.com',
            'salario' => 1550.75
        ]);

        Empleado::create([
            'nombre' => 'Carla',
            'apellido' => 'Vargas',
            'correo' => 'carla.vargas@example.com',
            'salario' => 1800.00
        ]);

        Empleado::create([
            'nombre' => 'Fernando',
            'apellido' => 'Rojas',
            'correo' => 'fernando.rojas@example.com',
            'salario' => 2100.00
        ]);

        Empleado::create([
            'nombre' => 'Paola',
            'apellido' => 'Sánchez',
            'correo' => 'paola.sanchez@example.com',
            'salario' => 1650.50
        ]);
    }
}
