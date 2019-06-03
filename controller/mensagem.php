<?php
$user=isAuth();
$message=@$_POST['body'];
$size=mb_strlen($message);
if(method()=='POST' && $user && $size>=1 && $size<=60){
    //criar mensagem
    $db=db();
    $data=[
        'body'=>$message,
        'created_at'=>time(),
        'user_id'=>$user['id']
    ];
    $db->insert('mensagens',$data);
    redirect($_ENV['SITE_URL']);
}else{
    $data=[
        'title'=>'Erro',
        'msg'=>'Digite uma mensagem com no mínimo 1 e no máximo 60 caracteres.',
        'user'=>isAuth()
    ];
    view('msg',$data);
}
?>
