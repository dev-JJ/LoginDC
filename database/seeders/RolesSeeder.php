<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $useradmin=User:: create([
            'name' => 'Admin',
            'email'  => 'admin@gmail.com',
            'password'  =>Hash::make ('admin'),
            'tipo'  => '1',
            'codigo'  => '00'

            ]);

            $usersede=User:: create([
                'name' => 'Sede',
                'email'  => 'Sede@gmail.com',
                'password'  =>Hash::make ('sede'),
                'tipo'  => '2',
                'codigo'  => '01'
    
                ]);

             $usercentral=User:: create([
                    'name' => 'Central',
                    'email'  => 'Central@gmail.com',
                    'password'  =>Hash::make ('central'),
                    'tipo'  => '3',
                    'codigo'  => '02'
        
                    ]);
            
    }
}
