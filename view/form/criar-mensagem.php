<h2>Criar mensagem</h2>
<?php
$action=$_ENV['SITE_URL'].'mensagem';
?>
<form class="form-vertical" action="<?php print $action; ?>" method="post" id="mensagem">
    <label for="mensagem-body">Mensagem</label>
    <textarea name="body" rows="2" id="mensagem-body"></textarea>
    <button type="submit" name="button">Enviar mensagem</button>
</form>
