<h2>Criar mensagem</h2>
<?php
$action=$_ENV['SITE_URL'].'mensagem';
?>
<form class="form-vertical" action="<?php print $action; ?>" method="post" id="mensagem">
    <label for="mensagem-body">Mensagem</label>
    <input type="text" name="body" value="" id="mensagem-body" maxlength="60" required>
    <button type="submit" name="button">Enviar mensagem</button>
</form>
<script type="text/javascript">
document.getElementById('mensagem-body').onkeydown = function(e){
    if(e.keyCode == 13){
        document.getElementById('mensagem').submit();
    }
};
</script>
