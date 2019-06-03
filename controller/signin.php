<?php
$result=signin();
if(isset($result['error'][0])){
    $data=[
        'title'=>'Erro',
        'msg'=>'Dados de login incorretos.',
        'user'=>isAuth()
    ];
    view('msg',$data);
}else{
    redirect($_ENV['SITE_URL']);
}
?>
