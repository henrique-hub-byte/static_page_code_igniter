<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<hr>
<div class="container">
    <h3 class="text-center">
        Escolha seu local
    </h3>

    <div class="row">
        <div class="col-sm-6 col-12 text-center">
            <a href="<?php echo site_url('geral/hotel/0')  ?>">
                <img src="<?php echo base_url('assets/img/' . $hoteis[0])  ?>" class="img_veneza" alt="" srcset="">
            </a>
        </div>
        <div class="col-sm-6 col-12 text-center">
            <a href="<?php echo site_url('geral/hotel/1')  ?>">
                <img src="<?php echo base_url('assets/img/' . $hoteis[1]) ?>" class="img_veneza" alt="" srcset="">
            </a>
        </div>
        <div class="col-sm-6 col-12 text-center">
            <a href="<?php echo site_url('geral/hotel/2')  ?>">
                <img src="<?php echo base_url('assets/img/' . $hoteis[2]) ?>" class="img_veneza" alt="" srcset="">
            </a>
        </div>
        <div class="col-sm-6 col-12 text-center">
            <a href="<?php echo site_url('geral/hotel/3')  ?>">
                <img src="<?php echo base_url('assets/img/' . $hoteis[3]) ?>" class="img_veneza" alt="" srcset="">
            </a>
        </div>
    </div>
</div>