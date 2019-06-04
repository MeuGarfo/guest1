<?php
$data=[
    'title'=>'Erro 404',
    'msg'=>'Página não encontrada',
    'user'=>isAuth()
];
view('msg',$data);
?>
