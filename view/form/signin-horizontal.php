<?php
$action=$_ENV['SITE_URL'].'signin';
?>
<form class="form-horizontal pull-right" action="<?php print $action; ?>" method="post">
    <label for="email-signin">Email</label>
    <label for="password-signin">Senha</label>
    <input type="email" id="email-signin" name="email" value="" placeholder="Seu email">
    <input type="password" id="password-signin" name="password" value="" placeholder="Sua senha">
    <button type="submit" name="button">Entrar</button>
</form>
