<?php



function lispost(){
    include("../config/database.php");
    
    $busca=pg_query($db , "SELECT * FROM postagens;");
    
    $resultado = [ "postagens"=>pg_fetch_all($busca) ];
    
    extract($resultado);

    ob_start();
    
    include("../views/index.phtml");
    
    $conteudo=ob_get_contents();
    
    return $conteudo;
}

function posta($parametros){

    include("../config/database.php");

    $resultado= pg_insert($db,'postagens',$parametros);

    if (!empty($resultado)) {
        header("Location: http://localhost:8000/");
        
    }

}