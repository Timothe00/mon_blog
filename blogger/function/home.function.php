<?php 
function get_posts(){
//on fait une requête sql
require_once ('main.func.php');
    
    $req = $db->query(
        "SELECT posts.id,
                posts.title,
                posts.image,
                posts.date,
                posts.content,
                admins.name
        FROM posts
        JOIN admins
        ON posts.writer=admins.email
        WHERE posted='1'
        ORDER BY date DESC
        LIMIT 0,3
        "
    );

    $results = array();

    while ($rows = $req->fetchObject()) {
        $results[] = $rows;
    }

    return $results;

}

?>