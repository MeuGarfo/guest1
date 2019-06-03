<?php
view('inc/header',$data);
?>
<body>
    <div class="container">
        <?php
        view("inc/top",$data);
        ?>
        <div class="row">
            <div class="<?php
            if($user){
                print 'offset3 span6';
            }else{
                print 'span9';
            }
            ?>">
            <?php
            if($user){
                view('form/criar-mensagem');
            }
            if(isset($mensagens) &&
            is_array($mensagens) &&
            count($mensagens)>0){
                print '<h2>Mensagens</h2>';
                foreach ($mensagens as $mensagem) {
                    print '<hr>';
                    print '<small><b>';
                    if($user && $user['id']==$mensagem['user_id']){
                        print 'Você';
                    }else{
                        e($mensagem['name']);
                    }
                    print '</b> escreveu em ';
                    print date('d/M/Y \a\s g:i A',$mensagem['created_at']);
                    if($user && $user['id']==$mensagem['user_id']){
                        $link=$_ENV['SITE_URL'].'mensagem/'.$mensagem['id'];
                        $link=$link.'/apagar';
                        print ' (<a href="'.$link.'">Apagar</a>)';
                    }
                    print ':</small><p>';
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
            <?php
            if(!$user){
                view('form/signup-vertical',$data);
            }
            ?>
        </div>
    </div>
</div>
</body>
</html>
