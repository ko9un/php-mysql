<?php
    $conn = mysqli_connect("localhost:13306", "root", "koreait", "opentutorials");
 
    $sql = "SELECT * FROM topic";
    $result = mysqli_query($conn, $sql);
    $list = '';
    
    while( $row = mysqli_fetch_array($result)){
        $list = $list."<li><a href=\"index.php?id={$row['id']}\">{$row['title']}</a></li>";
    }
  
    $article = array(
        'title' => 'Welcome',
        'description' => 'Hello, web'
     );
    if(isset($_GET['id'])){
   $filtered_id = mysqli_real_escape_string($conn,$_GET['id']);
   $sql = "SLECT * FROM topic WHERE id={$filtered_id}";
   $result = mysqli_query($conn, $sql);
   $row = mysqli_fetch_array($result);
   $article['title'] = $row['title'];
   $article['description'] = $row['description'];
 

}

    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <?= $list ?>
        </ol>
        <form action="create_process.php" method="POST">
            <p><input type="text" name="title" placeholder="title"></p>
            <p><textarea name = "description" placeholder="description"></textarea></p>
            <p><input type="submit"></p>
        </form>
    </body>
</html>
    