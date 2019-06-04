<?php
$action=$_ENV['SITE_URL'].'signin';
?>
<form class="form-inline pull-right" action="<?php print $action; ?>" method="post">
    <input class="input-large" type="email" id="email-signin" name="email" value="" placeholder="Seu email">
    <input class="input-large" type="password" id="password-signin" name="password" value="" placeholder="Sua senha">
    <button type="submit" name="button" class="btn">Entrar</button>
</form>
