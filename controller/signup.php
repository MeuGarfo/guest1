<?php
$result=signup();
if(isset($result['error'][0])){
    $title='Erro';
    $error=$result['error'][0];
    switch($error){
        case 'invalid_name':
        $msg='Digite um nome válido';
        break;
        case 'invalid_email':
        $msg='Digite um email válido';
        break;
        case 'invalid_password':
        $msg='Digite uma senha válida';
        break;
        default:
        $msg=$error;
        break;
    }
}else{
    //retorna void
    $title='Sucesso';
    $msg='Conta criada com sucesso. Faça login para continuar.';
}
$data=[
    'title'=>$title,
    'msg'=>$msg,
    'user'=>isAuth()
];
view('msg',$data);
?>
