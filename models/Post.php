<?php 
declare(strict_types=1);

require CONFIG_PATH.'Connet.php';
require CONTROLLER_PATH.'View.php';

class Post{

    //Post properties

    public $id;
    public $category_id;
    public $category_name;
    public $title;
    public $body;
    public $author;
    public $created_at;


    public static function read(String $viewpath){

        $conn = Connet::db();

        $query= 'SELECT 
                c.name as Category_name,
                p.id,
                p.category_id,
                p.title,
                p.body,
                p.author,
                p.created_at

                FROM posts p
                LEFT JOIN  
                    categories c ON p.category_id = c.id
                ORDER BY
                    p.created_at DESC';

        $stmt = $conn->prepare($query);
        $stmt->execute();
        $post= $stmt->fetchAll(PDO::FETCH_ASSOC);

       

        return View::setView($post,$viewpath,'index.php')->render();
    }


    public static function singlePost(String $viewpath,string $id){

        $conn = Connet::db();

        $query= 'SELECT 
                c.name as Category_name,
                p.id,
                p.category_id,
                p.title,
                p.body,
                p.author,
                p.created_at

                FROM posts p
                LEFT JOIN  
                    categories c ON p.category_id = c.id
                WHERE p.id = ? ';

        $stmt = $conn->prepare($query);
        $stmt->execute([$id]);
        $post= $stmt->fetch(PDO::FETCH_ASSOC);

       

        return View::setView($post,$viewpath,'index.php')->render();

    }

 

}