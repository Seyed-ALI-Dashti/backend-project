<?php 

    require_once('../../functions/helpers.php');
    require_once('../../functions/pdo_connection.php');
    require_once('../../functions/check-login.php');

    if(isset($_GET['post_id']) && $_GET['post_id'] !== '')
    {
        global $pdo;

        $query = "SELECT * FROM php_project.posts WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$_GET['post_id']]);
        $post = $statement->fetch();
        $basePath = dirname(dirname(__DIR__));
        if(file_exists($basePath . $post->image))
        {
            unlink($basePath . $post->image);
        }
        $query = "DELETE FROM php_project.posts WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$_GET['post_id']]);
    
    }

    redirect('panel/post');    
