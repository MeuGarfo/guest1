<div class="row">
    <div class="span6">
        <h1>
            <a href="http://<?php print $_ENV['SITE_URL'] ?>">
                <?php print $_ENV['SITE_NAME'] ?>
            </a>
        </h1>
    </div>
    <div class="span6">
        <?php
        if($user){
            view('menu/top',$data);
        }else{
            view('form/signin-horizontal');
        }
        ?>
    </div>
</div>
