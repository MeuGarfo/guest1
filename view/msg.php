<?php
require 'inc/header.php';
?>
<body>
    <div class="container">
        <?php
        require 'inc/top.php';
        ?>
        <div class="row">
            <div class="span9 text-center">
                <?php
                print '<h1>'.$title.'</h1>';
                print '<p>'.$msg.'</p>';
                ?>
                <?php
                if($title!='Erro'){
                    ?>
                    <p>
                        <a href="javascript:window.history.back(1);">Voltar</a>
                    </p>
                    <?php
                }
                ?>
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
