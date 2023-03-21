<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-6 offset-sm-3 col-8 offset-2">
            <div class="card p-4">

                <h3>Login</h3>

                <form action="<?php echo site_url('geral/verificarLogin')?>" method="post">

                    <div class="form-group">
                        <input type="text" name="text_usuario" class="form-control" placeholder="Usuario" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="text_senha" class="form-control" placeholder="Senha" required>
                    </div>

                    <div class="text-right">
                        <button class="btn btn-primary">Entrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>