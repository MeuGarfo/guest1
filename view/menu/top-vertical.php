<p class="text-center">
    <?php e($user['name']); ?> |
    <?php
    $href=$_ENV['SITE_URL'].'logout';
    ?>
    <a href="<?php print $href; ?>">Sair</a>
</p>
