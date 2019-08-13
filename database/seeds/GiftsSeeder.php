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
            ['name' => 'Baldes de plástico'],
            ['name' => 'Cesto para roupas'],
            ['name' => 'Pá de lixo'],
            ['name' => 'Panos de chão'],
            ['name' => 'Pregador de roupa'],
            ['name' => 'Rodo'],
            ['name' => 'Vassoura'],
            ['name' => 'Escova para vaso sanitário'],
            ['name' => 'Jogo de tapetes'],
            ['name' => 'Jogo de toalhas'],
            ['name' => 'Kit para banheiro'],
            ['name' => 'Lixeira'],
            ['name' => 'Cabides'],
            ['name' => 'Jogo de cama'],
            ['name' => 'Travesseiros'],
            ['name' => 'Mantinha'],
            ['name' => 'Abridor de garrafas'],
            ['name' => 'Abridor de latas'],
            ['name' => 'Afiador de facas (Chaira)'],
            ['name' => 'Assadeira de vidro/alumínio'],
            ['name' => 'Açucareiro'],
            ['name' => 'Bacias de plástico'],
            ['name' => 'Batedeira'],
            ['name' => 'Batedor de ovos'],
            ['name' => 'Bomba de chimarrão'],
            ['name' => 'Bule'],
            ['name' => 'Cafeteira'],
            ['name' => 'Canecas'],
            ['name' => 'Chaleira'],
            ['name' => 'Chaleira elétrica'],
            ['name' => 'Colher para sorvete'],
            ['name' => 'Colheres de pau'],
            ['name' => 'Colheres de silicone'],
            ['name' => 'Concha e escumadeira'],
            ['name' => 'Copo medidor'],
            ['name' => 'Cortador de pizza'],
            ['name' => 'Cuia de chimarrão'],
            ['name' => 'Descanso de panela'],
            ['name' => 'Descascador de abacaxi'],
            ['name' => 'Escorredor de louça de pia/parede'],
            ['name' => 'Escorredor de massa'],
            ['name' => 'Escorredor de talheres'],
            ['name' => 'Espátula'],
            ['name' => 'Faca para carne'],
            ['name' => 'Forma de alumínio'],
            ['name' => 'Forma de fundo removível'],
            ['name' => 'Forma de gelo de silicone'],
            ['name' => 'Forma de pudim'],
            ['name' => 'Fruteira'],
            ['name' => 'Garrafa térmica'],
            ['name' => 'Jarro de vidro'],
            ['name' => 'Jogo americano'],
            ['name' => 'Jogo de copos'],
            ['name' => 'Jogo de panelas'],
            ['name' => 'Jogo de potes para mantimentos'],
            ['name' => 'Jogo de pratos'],
            ['name' => 'Jogo de sobremesa'],
            ['name' => 'Jogo de talheres'],
            ['name' => 'Jogo de xícaras'],
            ['name' => 'Kit coador'],
            ['name' => 'Kit de espetos'],
            ['name' => 'Kit para churrasco'],
            ['name' => 'Liquidificador'],
            ['name' => 'Lixeira de cozinha pequena/média'],
            ['name' => 'Luva térmica'],
            ['name' => 'Martelo para carne'],
            ['name' => 'Panela de pressão'],
            ['name' => 'Panos de prato'],
            ['name' => 'Pegador de massa'],
            ['name' => 'Pegador de salada'],
            ['name' => 'Petisqueira'],
            ['name' => 'Porta frios'],
            ['name' => 'Porta temperos'],
            ['name' => 'Potes de plástico'],
            ['name' => 'Potes de vidro'],
            ['name' => 'Potes para microondas'],
            ['name' => 'Processador de alimentos'],
            ['name' => 'Ralador'],
            ['name' => 'Rolo de massa'],
            ['name' => 'Saca rolha'],
            ['name' => 'Saleiro/pimenteiro/paliteiro'],
            ['name' => 'Suporte para bolo com tampa (Boleira)'],
            ['name' => 'Tábua para carne'],
            ['name' => 'Taças para cerveja'],
            ['name' => 'Taças para champanhe'],
            ['name' => 'Taças para sorvete'],
            ['name' => 'Taças para vinho'],
            ['name' => 'Torradeira'],
        ]);
        $this->command->info('Presentes importados com sucesso!');
    }
}
