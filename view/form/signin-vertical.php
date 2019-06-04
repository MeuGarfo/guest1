<?php
$action=$_ENV['SITE_URL'].'signin';
?>
<form class="" action="<?php print $action; ?>" method="post">
    <fieldset>
        <legend>Entrar</legend>
        <label for="email-signin">Email</label>
        <input class="input-block-level" type="email" id="email-signin" name="email" value="" placeholder="Seu email">
        <label for="password-signin">Senha</label>
        <input class="input-block-level" type="password" id="password-signin" name="password" value="" placeholder="Sua senha">
        <button type="submit" name="button" class="btn">Entrar</button>
    </fieldset>
</form>
