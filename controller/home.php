<?php
$db=db();
$join=[
    //o user_id da tabela mensagens é igual ao id da tabela users
    "[>]users" => ["user_id" => "id"],
];
$cols=[
    'mensagens.body',
    'mensagens.created_at',
    'users.name'
];
$mensagens=$db->select('mensagens',$join,$cols);
$data=[
    'title'=>"Guest",
    'user'=>isAuth(),
    'mensagens'=>$mensagens
];
view('home',$data);
?>
