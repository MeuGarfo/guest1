<div class="row visible-desktop">
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
            view('menu/top-horizontal',$data);
        }else{
            view('form/signin-horizontal');
        }
        ?>
    </div>
</div><!--row-->
<div class="row visible-tablet visible-phone">
    <div class="span12 text-center">
        <h1>
            <a href="<?php print $_ENV['SITE_URL'] ?>">
                <?php print $_ENV['SITE_NAME'] ?>
            </a>
        </h1>
    </div>
</div>
<div class="row visible-tablet visible-phone">
    <div class="span12">
        <?php
        if($user){
            view('menu/top-vertical',$data);
        }else{
            view('form/signin-vertical');
            view('form/signup-vertical');
        }
        ?>
    </div>
</div>
