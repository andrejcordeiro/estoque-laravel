<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $this->call('ProdutoTableSeeder');
    }
}

class ProdutoTableSeeder extends Seeder	{
    public function	run()
    {
        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
        array('Geladeira', 2, 5900.00, 'Duas portas e refrigerador'));

        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
        array('Fogão', 5, 800.00, 'Quatro bocas imbutido'));

        DB::insert('insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
        array('Microondas', 3, 280.00, 'Painel digital'));
    }
}
