
<section id ="form">

    <?php
    $msg = 0;
    $nome = "";
    $email = "";
    $mensagem = "";
    if (key_exists("msg", $_POST)) {
        $msg = $_POST['msg'];
    }
    if (key_exists("nome", $_POST)) {
        $nome = $_POST['nome'];
    }
    if (key_exists("email", $_POST)) {
        $email = $_POST['email'];
    }
    if (key_exists("mensagem", $_POST)) {
        $mensagem = $_POST['msgPOST'];
    }
    if ($msg === 1) {
        ?>
        <div class="alert alert-success">
            <strong>Mensagem Enviada com Sucesso!</strong> <!--Mensagem de Sucesso ou Erro de envio-->
        </div>

        <h1>Fale conosco</h1>
        <form class="form" method="POST" action="envia-email.php">
            <label for="cpNomeEmpresa">Nome</label>
            <input class="form-control input-required" type="text" name="cpNomeEmpresa" value="" />
            <label for="cpEmail">Email</label>
            <input class="form-control input-required" type="text" name="cpEmail" value="" />
            <label for="cpMensagem">Mensagem</label>
            <textarea class="form-control" name="txMensagem"></textarea>

            <button class="btn" type="submit">Enviar Mensagem</button>

        </form>
    </section>  
<?php } else if ($msg === 2) { ?>
    <div class="alert">
        <strong>A Mensagem não foi enviada, verifique os campos!</strong>
    </div>
    <h1>Fale conosco</h1>
    <form class="form" method="POST" action="envia-email.php">
        <label for="cpNomeEmpresa">Nome</label>
        <input class="form-control input-required" type="text" name="cpNomeEmpresa" value="<?php echo $nome ?>" />
        <label for="cpEmail">Email</label>
        <input class="form-control input-required" type="text" name="cpEmail" value="<?php echo $email ?>" />
        <label for="cpMensagem">Mensagem</label>
        <textarea class="form-control" name="txMensagem"><?php echo $mensagem ?></textarea>

        <button class="btn" type="submit">Enviar Mensagem</button>

    </form>
    </section>  
<?php } else if ($msg === 3) { ?>
    <div class="alert alert-danger">
        <strong>Campos Obrigatorios não preencidos</strong>
    </div>
    <h1>Fale conosco</h1>
    <form class="form" method="POST" action="envia-email.php">
        <label for="cpNomeEmpresa">Nome</label>
        <input class="form-control input-required" type="text" name="cpNomeEmpresa" value="<?php echo $nome ?>" />
        <label for="cpEmail">Email</label>
        <input class="form-control input-required" type="text" name="cpEmail" value="<?php echo $email ?>" />
        <label for="cpMensagem">Mensagem</label>
        <textarea class="form-control" name="txMensagem"><?php echo $mensagem ?></textarea>

        <button class="btn" type="submit">Enviar Mensagem</button>

    </form>
    </section>  
<?php } else if($msg === 0 ) { ?>
    <h1>Fale conosco</h1>
    <form class="form" method="POST" action="envia-email.php">
        <label for="cpNomeEmpresa">Nome</label>
        <input class="form-control input-required" type="text" name="cpNomeEmpresa" value="" />
        <label for="cpEmail">Email</label>
        <input class="form-control input-required" type="text" name="cpEmail" value="" />
        <label for="cpMensagem">Mensagem</label>
        <textarea class="form-control" name="txMensagem"></textarea>

        <button class="btn" type="submit">Enviar Mensagem</button>

    </form>
    </section> 
<?php } ?>