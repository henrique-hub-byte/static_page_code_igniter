<?php
defined('BASEPATH') or exit('No direct script access allowed');

class GeralModel extends CI_Model
{
    private $dados_hoteis;

    function __construct()
    {
        parent::__construct();

        $this->dados_hoteis = [
            [
                'nome_hotel' => 'Hotel marivilhoso',
                'descricao' => 'Situacao junto á praia com 500 e serciço de TI',
                'imagem' => 'hotel_1.jpg'
            ],
            [
                'nome_hotel' => 'Hotel Esplendor',
                'descricao' => 'Aqui come e bebe sem parar',
                'imagem' => 'hotel_2.jpg'
            ],
            [
                'nome_hotel' => 'Hotel Grandioso',
                'descricao' => 'Recepção aberta 24 horaspor dia',
                'imagem' => 'hotel_3.jpg'
            ],
            [
                'nome_hotel' => 'Hotel Titanico',
                'descricao' => 'feito de titanio vibranio',
                'imagem' => 'hotel_4.jpg'
            ]
        ];
    }

    public function imagensHoteis()
    {
        //retorma as imagens dos hoteis
        $imagens = [];
        foreach ($this->dados_hoteis as $hotel) {
            array_push($imagens, $hotel['imagem']);
        }
        return $imagens;
    }

    public function hotel($id){
        //retorna os dados do hotel escolhido
        return $this->dados_hoteis[$id];
    }
}
