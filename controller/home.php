<?php
$db=db();
$join=[
    // The row user_id from table mensagens is equal the row id from table user
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
