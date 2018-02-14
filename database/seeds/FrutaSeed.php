<?php

use Illuminate\Database\Seeder;

class FrutaSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [

            ['id' => 2, 'nombre' => 'pera'],

        ];
         foreach ($items as $item) {
            \App\Fruta::create($item);
        }
    }
}
