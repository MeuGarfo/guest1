<?php
$user=isAuth();
if(method()=='POST' && $user){
    //criar mensagem
    $db=db();
    $data=[
        'body'=>$_POST['body'],
        'created_at'=>time(),
        'user_id'=>$user['id']
    ];
    $db->insert('mensagens',$data);
    redirect($_ENV['SITE_URL']);
}
?>
