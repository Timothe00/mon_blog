<?php 

function get_posts(){
   require_once ('main.func.php');

    $req = $db->query("SELECT * FROM posts WHERE posted='1' ORDER BY date DESC");

    $results=[];
    while($rows = $req->fetchObject()){

        $results[] = $rows;
    };

    return $results;
}


?>