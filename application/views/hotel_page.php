<?php 
    /* echo 'Hotel escolhido:' . $hotel['nome_hotel']; */
    defined('BASEPATH') or exit('No direct script access allowed');
?>

<div class="container text-center p-4">
    <a href="<?php echo site_url('geral') ?>" class="btn btn-primary">Voltar</a>

    <h3><?php echo $hotel['nome_hotel']?></h3>

    <p><?php echo $hotel['descricao'] ?></p>

    <img src="<?php echo base_url('assets/img/'.$hotel['imagem'])  ?>" class="img_veneza" alt="" srcset="">
</div>