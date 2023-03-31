<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use App\Models\Tipo;
use App\Models\Marca;
use App\Models\Produto;


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

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $categorias = ["Base", "Batom", "Corretivo"];
        $marcas = ["Boca Rosa", "Ruby Rose", "PhalleBeauty", "Max Love"];
        $tipos = ["Destaques", "Lançamentos", "Promoções"];

        $produtos = [
                        [
                            "nome" => "Base Boca Rosa", 
                            "descricao"=> "Alta cobertura com uniformização, longa duração e resistência à água",
                            "categoria_id" => 1, 
                            "marca_id" => 1,
                            "tipo_id" => 1,
                            "preco" => 65.00,
                            "estoque" => 50,
                            "imagens" => "".url("/public/boca-rosa-base.webp"),
                            "desconto" => 0,
                        ],
                        [
                            "nome" => "Base Liquida Feels - Hb8053 - Pudim 20 - Rubyrose", 
                            "descricao"=> "A base da linha Feels proporciona uma cobertura média, capaz de construir camadas na maquiagem, ideal para quem quer corrigir imperfeições e uniformizar o tom da pele. Sua textura é em mousse, dando um toque viçoso e aveludado. Disponível em 21 cores e em categorias como: Nude, Bege, Chocolate e Café, ela é indicada para todos os tipos de pele.",
                            "categoria_id" => 1, 
                            "marca_id" => 2,
                            "tipo_id" => 2,
                            "preco" => 27.99,
                            "estoque" => 70,
                            "imagens" => "".url("/public/rubyrose-base.webp"),
                            "desconto" => 0,
                        ],
                        [
                            "nome" => "Batom Líquido Matte", 
                            "descricao"=> "Esse é o novo batom líquido matte da Phállebeauty da linha Phálle Girls Colecionáveis. São 12 cores no total, em diversos tons para todos os gostos e ocasiões, aqueles clássicos nudes para o dia a dia ou para valorizar aquela make focada nos olhos, tem também aquele vermelho intenso que demonstra sua confiança.",
                            "categoria_id" => 2, 
                            "marca_id" => 3,
                            "tipo_id" => 3,
                            "preco" => 10,
                            "estoque" => 100,
                            "imagens" => "".url("/public/phalle-batom.png"),
                            "desconto" => 0,
                        ],
                        [
                            "nome" => "BATOM LÍQUIDO 12H VEGANO", 
                            "descricao"=> "Batom líquido 100% vegano, não contém componentes de origem animal e não é testado em animais. Com textura suave e cremosa, tem efeito matte e duração de 12 horas.",
                            "categoria_id" => 2, 
                            "marca_id" => 4,
                            "tipo_id" => 1,
                            "preco" => 15,
                            "estoque" => 20,
                            "imagens" => "".url("/public/max-batom.webp"),
                            "desconto" => 0,
                        ],
                        [
                            "nome" => "CORRETIVO LIQ. B.ROSA BEAUTY BY PAYOT 1.5 PETUNIA", 
                            "descricao"=> "Com máxima cobertura, disfarça imperfeições e cobre olheiras",
                            "categoria_id" => 3, 
                            "marca_id" => 1,
                            "tipo_id" => 2,
                            "preco" => 52.90,
                            "estoque" => 15,
                            "imagens" => "".url("/public/boca-corretivo.webp"),
                            "desconto" => 0,
                        ],
                        [
                            "nome" => "Corretivo Liquido Flawless Collection - Hb8080 - Chocolate 6 - Rubyrose", 
                            "descricao"=> "Conheça mais um queridinho da Ruby Rose, Corretivo Flawless Collection agora disponível em mais novas 7 cores. Possui textura líquida, acabamento matte, alta cobertura e longa duração, deixando a pele bem sequinha sem craquelar. Indicado para todos os tipos de pele, sua fórmula é capaz de corrigir imperfeições, olheiras, marcas de expressão, espinhas e até cicatrizes.",
                            "categoria_id" => 3, 
                            "marca_id" => 2,
                            "tipo_id" => 3,
                            "preco" => 13.6,
                            "estoque" => 120,
                            "imagens" => "".url("/public/ruby-corretivo.webp"),
                            "desconto" => 0,
                        ],
                        [
                            "nome" => "Base Matte 30g", 
                            "descricao"=> "Uma base de alta cobertura que proporciona um acabamento matte sem deixar a pele ressecada ou craquelada. Desliza facilmente na pele e proporciona uma cobertura perfeita. É de longa duração e resistente à água.",
                            "categoria_id" => 1, 
                            "marca_id" => 3,
                            "tipo_id" => 1,
                            "preco" => 25,
                            "estoque" => 7,
                            "imagens" => "".url("/public/phalle-base.jpg"),
                            "desconto" => 0,
                        ],
                        [
                            "nome" => "GLOSS LIP VOLUMOSO", 
                            "descricao"=> "O Gloss Lip Volumoso Max Love contém ácido hialurônico que auxilia no aumento do volume dos lábios. Por ser translúcido, pode ser usado diretamente nos lábios ou sobre o batom e pode ser usado diariamente pois sua fórmula tem vitamina E e D-pantenol que hidratam os lábios. Produto vegano e não testado em animais.",
                            "categoria_id" => 2, 
                            "marca_id" => 4,
                            "tipo_id" => 2,
                            "preco" => 14,
                            "estoque" => 95,
                            "imagens" => "".url("/public/max-batom2.webp"),
                            "desconto" => 0,
                        ]
                ];

                foreach($categorias as $cat) {
                    Categoria::create([
                        'nome_categoria' => $cat
                    ]);
                }

                foreach($tipos as $tipo) {
                    Tipo::create([
                        'nome_tipo' => $tipo
                    ]);
                }

                foreach($marcas as $marca) {
                    Marca::create([
                        'nome_marca' => $marca
                    ]);
                }

                foreach($produtos as $prod) {
                    Produto::create([
                        'nome' => $prod['nome'],
                        'descricao' => $prod['descricao'],
                        'categoria_id' => $prod['categoria_id'],
                        'tipo_id' => $prod['tipo_id'],
                        'preco' => $prod['preco'],
                        'desconto' => $prod['desconto'],
                        'estoque' => $prod['estoque'],
                        'imagens' => $prod['imagens'],
                        'marca_id' => $prod['marca_id']
                    ]);
                }
    }
}
