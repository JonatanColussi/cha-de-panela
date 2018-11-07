<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class GiftsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gifts')->insert([
            ['name' => 'Chaleira'],
			['name' => 'Chaleira elétrica'],
			['name' => 'Jogo de toalhas de banho'],
			['name' => 'Potes de vidro'],
			['name' => 'Jarra de vidro'],
			['name' => 'Forma de alumínio'],
			['name' => 'Lasanheira de vidro'],
			['name' => 'Cortador de legumes e Ralador'],
			['name' => 'Forma de gelo (silicone)'],
			['name' => 'Jogo de talheres'],
			['name' => 'Colher de pau'],
			['name' => 'Forma de Pudim'],
			['name' => 'Escorredor de massa'],
			['name' => 'Colher e concha grande'],
			['name' => 'Kit de sobremesa'],
			['name' => 'Rolo de macarrão'],
			['name' => 'Coador'],
			['name' => 'Tábua de carne (de vidro)'],
			['name' => 'Pegador de massa'],
			['name' => 'Pegador de salada'],
			['name' => 'Ferro de passar roupa'],
			['name' => 'Kit churrasco'],
			['name' => 'Kit espetos para churrasco'],
			['name' => 'Kit lençol 3 peças'],
			['name' => 'Faca para cortar carne'],
			['name' => 'Kit de copos'],
			['name' => 'Xícara'],
			['name' => 'Liquidificador'],
			['name' => 'Torradeira'],
			['name' => 'Cafeteira'],
			['name' => 'Martelo de bife'],
			['name' => 'Térmica'],
			['name' => 'Lixeira (pequena) para cozinha'],
			['name' => 'Lixeira para cozinha'],
			['name' => 'Lixeira para banheiro'],
			['name' => 'Copos para cerveja'],
			['name' => 'Bandeja para café da manhã'],
			['name' => 'Açucareiro'],
			['name' => 'Bacia'],
			['name' => 'Batedor de ovos'],
			['name' => 'Espatula'],
			['name' => 'Escumadeira'],
			['name' => 'Espremedor de batatas'],
			['name' => 'Escorredor de louça'],
			['name' => 'Forma de fundo removível'],
			['name' => 'Frigideira'],
			['name' => 'Luva térmica (Luva de forno)'],
			['name' => 'Leiteira'],
			['name' => 'Petisqueira'],
			['name' => 'Porta frios'],
			['name' => 'Porta temperos'],
			['name' => 'Pratinhos de sobremesa'],
			['name' => 'Taças de vinho'],
			['name' => 'Taças de champagne'],
			['name' => 'Batedeira'],
			['name' => 'Panela de pressão'],
			['name' => 'Espremedor de frutas automático'],
			['name' => 'Mini processador de alimentos'],
			['name' => 'Kit saboneteira'],
			['name' => 'Assadeira de vidro'],
			['name' => 'Saleiro'],
			['name' => 'Jogo de pratos Fundos'],
			['name' => 'Jogo de pratos Rasos'],
			['name' => 'Panos de prato'],
			['name' => 'Toalha de mesa'],
			['name' => 'Porta guardanapo'],
			['name' => 'Tapete de cozinha'],
			['name' => 'Tapete de banheiro'],
			['name' => 'Cuia para chimarrão'],
			['name' => 'Bomba para chimarrão'],
			['name' => 'Porta filtro de café'],
			['name' => 'Bule'],
        ]);
        $this->command->info('Presentes importados com sucesso!');
    }
}