<?php

//Deletar Registro
function DBDelete($table, $where = null){
    
    $where  = ($where) ? " WHERE ".$where : null;
    $query  = "DELETE FROM ".$table.$where;
    $result = DBExecute($query);
    return $result;    
}


//Altera Registros
function DBupdate($table, array $data, $where = null ){
    
    foreach ($data as $key => $value){
        $fields[] = $key." = '".$value."'";
    }
    
    $fields = implode(", ", $fields);
    
    $where = ($where) ?  " WHERE ".$where : null;
     $query = "UPDATE ".$table." SET ".$fields.$where;
    $result = DBExecute($query);
    return $result;
}

//Ler Registros
function DBRead($table, $fields = '*', $params = null){
        
    $params = ($params) ? " ".$params : null;
    $query  = "SELECT ".$fields." FROM ".$table.$params;
    $result = DBExecute($query);
    
    if (!mysqli_num_rows($result)){
        return false;
    }
    else{
        while ($res = mysqli_fetch_assoc($result)){
            $data[]= $res;
        }
        
        return $data;
    }
}

//Insere Dados
function DBCreate($table, $data){
    $data   = DBEscape($data);
    $fields = implode(", ",array_keys($data));
    $values = "'".implode("','", $data)."'";
    
    $query  = "INSERT INTO ".$table."(".$fields.") VALUES (".$values.")";
    $result = DBExecute($query);
    return $result;
}

//Executa Querys
function DBExecute($query){
    $link   = DBConnect();
    $result = mysqli_query($link, $query) or die (mysqli_error($link));
    DBClose($link);
    return $result;
}







?>