<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = [
            ['id' => 1, 'name' => 'Umowa o pracę','created_at' => date('Y-m-d'),'updated_at' => date('Y-m-d')],
            ['id' => 2, 'name' => 'Umowa o dzieło','created_at' => date('Y-m-d'),'updated_at' => date('Y-m-d')],
            ['id' => 3, 'name' => 'Umowa zlecenie','created_at' => date('Y-m-d'),'updated_at' => date('Y-m-d')],
            ['id' => 4, 'name' => 'Staż','created_at' => date('Y-m-d'),'updated_at' => date('Y-m-d')],
        ];

        DB::table('contract_types')->insert($types);
    }
}
