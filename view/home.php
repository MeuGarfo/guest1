<?php
view('inc/header',$data);
?>
<body>
    <div class="container">
        <?php
        view("inc/top",$data);
        ?>
        <div class="row">
            <div class="span9">
                <?php
                if($user){
                    view('form/criar-mensagem');
                }
                if(isset($mensagens) &&
                is_array($mensagens) &&
                count($mensagens)>0){
                    print '<h2>Mensagens</h2>';
                    foreach ($mensagens as $mensagem) {
                        print '<hr><p>';
                        print '<small><b>';
                        e($mensagem['name']);
                        print '</b> escreveu:</small><br>';
                        e($mensagem['body']);
                        print '</p>';
                    }
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
