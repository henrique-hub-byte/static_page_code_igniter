<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Model
{
    public function verificarLogin()
    {
        /* $this->db->from('users');
        $this->db->where('username', $this->input->post('text_usuario'));
        $this->db->where('senha', md5($this->input->post('text_senha')));
        $resultado = $this->db->get(); */

        $result = $this->db->from('users')
            ->where('username', $this->input->post('text_usuario'))
            ->where('senha', md5($this->input->post('text_senha')))
            ->get();

        if($result->num_rows()==0){
            return false;
        } else {
            $dados_usuario = $result->row();
            $this->session->set_userdata('id', $dados_usuario->id);
            $this->session->set_userdata('username', $dados_usuario->username);
            return true;
        }   
    }
}
