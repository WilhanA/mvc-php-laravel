<?php

use Illuminate\Database\Seeder;
use App\models\Usuario;
use Carbon\Carbon;

class UsuarioSeeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Usuario $registro)
    {
        $registro->create([            
            'nome' => 'Jose da Silva Sauro',
            'idade' => '23',

        ]);

        $registro->create([            
            'nome' => 'Francisco T Silva Rex',
            'idade' => '28',

        ]);
        $registro->create([            
            'nome' => 'Judite da Ferreira Lotus',
            'idade' => '23',

        ]);

        $registro->create([            
            'nome' => 'Cleberson Piterus Barbora Dactio',
            'idade' => '28',

        ]);
    }
}
