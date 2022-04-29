<?php

namespace Database\Seeders;
use App\Models\Movimiento;
use App\Models\Cuenta;
use App\Models\User;
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

// se crea un usario d emaneera manual
            User::create(
            [
                'name'      => 'Wilson Lasso',
                'email'     => 'wilago1979@gmail.com',
                'password'  => bcrypt('12345678'),

            ]
        );

    // se vrean los post usando los factories

        //\App\Models\Post::factory(24)->create();
        User::factory(10)->create();
        Cuenta::factory(20)->create();
        Movimiento::factory(20)->create();
        


    }
}
