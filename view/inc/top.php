<div class="row">
    <div class="offset2 span2">
        <h1>
            <a href="<?php print $_ENV['SITE_URL'] ?>">
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
