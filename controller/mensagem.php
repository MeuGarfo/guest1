<?php
$user=isAuth();
$message=@$_POST['body'];
$size=mb_strlen($message);
$id=segment(3);
$op=segment(4);
$db=db();
if($op=='apagar' && $user){
    $where=[
        'id'=>$id
    ];
    $mensagem=$db->get('mensagens','*',$where);
    if($user['id']==$mensagem['user_id']){
        $db->delete('mensagens',$where);
        redirect($_ENV['SITE_URL']);
    }else{
        $data=[
            'title'=>'Erro',
            'msg'=>'Você não pode apagar essa mensagem.',
            'user'=>isAuth()
        ];
        view('msg',$data);
    }
}elseif(method()=='POST' && $user && $size>=1 && $size<=60){
    //criar mensagem
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
