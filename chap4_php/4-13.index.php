<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
</head>

<body>
    <h1><a href="4-13.index.php">WEB</a></h1>
    <ol>
        <li><a href="4-13.index.php?id=HTML">HTML</a></li>
        <li><a href="4-13.index.php?id=CSS">CSS</a></li>
        <li><a href="4-13.index.php?id=JavaScript">JavaScript</a></li>
    </ol>
    <H2>
        <?php
        if (isset($_GET['id'])) {
            echo $id = $_GET['id'];
        } else {
            echo "welcome";
        }
        ?>


    </h2>
    <?php
    if (isset($_GET['id'])) {
        echo file_get_contents("data/" . $_GET['id']);
    } else {
        echo "Hello, PHP";
    }
    ?>

</body>

</html>