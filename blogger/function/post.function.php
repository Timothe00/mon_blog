<?php 
function get_post(){
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
        WHERE posts.id='{$_GET['id']}'
        
        "
    );

    $result= $req->fetchObject();
    return $result;

}

?>


<?php

function commentaires($name, $email, $comment){
    require_once ('main.func.php');
        $com = array(
            'name'   => $name,
            'email'  => $email,
            'comment'=> $comment,
            'post_id'=> $_GET['id']
        );
$sql = "INSERT INTO commentaires(name,email,comment,post_id,date) VALUES(:name, :email, :comment, :post_id, NOW())";
$req = $db->prepare($sql);
$req->execute($com);

}