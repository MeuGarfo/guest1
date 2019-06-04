<?php
require 'inc/header.php';
?>
<body>
    <div class="container">
        <?php
        view("inc/top",$data);
        ?>
        <div class="row">
            <?php
        
            if($title=='Erro'){
                print '<div class="offset2 span5 text-center">';
            }else{
                print '<div class="offset2 span8 text-center">';
            }
            ?>
            <?php
            print '<h1>'.$title.'</h1>';
            print '<p>'.$msg.'</p>';
            ?>
            <p>
                <a href="javascript:window.history.back(1);">Voltar</a>
            </p>
        </div><!--span6-->
        <?php
        if($title=='Erro'){
            ?>
            <div class="span3">
                <?php require 'form/signup-vertical.php'; ?>
            </div>
            <?php
        }
        ?>
    </div>
</div>
</body>
</html>
