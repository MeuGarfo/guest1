<?php
view('inc/header',$data);
?>
<body>
    <div class="container">
        <?php
        require 'inc/top.php';
        ?>
        <div class="row">
            <div class="span9">
                <?php
                if(isset($mensagens) &&
                is_array($mensagens) &&
                count($mensagens)>0){
                    print '<ul>';
                    foreach ($mensagens as $mensagem) {
                        print '<li>';
                        print $mensagem['body'];
                        print '</li>';
                    }
                    print '</ul>';
                }else{
                    print '<p class="text-center">';
                    print 'Nenhum mensagem encontrada';
                    print '</p>';
                }
                ?>
            </div><!--span6-->
            <div class="span3">
                <?php require 'form/signup-vertical.php'; ?>
            </div>
        </div>
    </div>
</body>
</html>
