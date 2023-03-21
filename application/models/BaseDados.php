<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BaseDados extends CI_Model 
{
    public function reset()
    {
        //elimina todos os dados das tabelas
        $this->db->empty_table('users');
        $this->db->empty_table('products');

        //recomeça o auto_increment
        $this->db->query('ALTER TABLE users AUTO_INCREMENT = 1');
        $this->db->query('ALTER TABLE products AUTO_INCREMENT = 1');
        $this->db->query('ALTER TABLE movimentos AUTO_INCREMENT = 1');
    }

    public function inserirUsuario() 
	{
        $this->db->empty_table('users');
        $this->db->query('ALTER TABLE users AUTO_INCREMENT = 1');
		$dados = [
			'username' => 'admin',
			'senha' => md5('admin')
		];

		$this->db->insert('users', $dados);
		$dados = [
			'username' => 'ana',
			'senha' => md5('ana')
		];
		$this->db->insert('users', $dados);
		$dados = [
			'username' => 'rui',
			'senha' => md5('rui')
		];
		$this->db->insert('users', $dados);
	}

    public function inserirProduto() 
	{
        $this->db->empty_table('products');
        $this->db->query('ALTER TABLE products AUTO_INCREMENT = 1');
        $dados = [
			['designacao' => 'CPUs', 'quantidade' => 10],
			['designacao' => 'Memórias', 'quantidade' => 20],
			['designacao' => 'Monitores', 'quantidade' => 30],
			['designacao' => 'Discos rígidos', 'quantidade' => 40],
		];

		$this->db->insert_batch('products', $dados);

        $this->db->empty_table('movimentos');
        $this->db->query('ALTER TABLE movimentos AUTO_INCREMENT = 1');
		$dados = [
            [
                'id_produto' => 1,
                'quantidade' => 10,
                'data_hora' => date('Y-m-d H:m:s')
            ],
            [
                'id_produto' => 2,
                'quantidade' => 20,
                'data_hora' => date('Y-m-d H:m:s')
            ],
            [
                'id_produto' => 3,
                'quantidade' => 30,
                'data_hora' => date('Y-m-d H:m:s')
            ],
            [
                'id_produto' => 4,
                'quantidade' => 40,
                'data_hora' => date('Y-m-d H:m:s')
            ]
        ];
		
        $this->db->insert_batch('movimentos', $dados);
	}
}
?>

