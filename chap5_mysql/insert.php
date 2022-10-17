<?php
    $conn = mysqli_connect("localhost:13306", "root","koreait","opentutorials");
    $sql = "
        INSERT INTO topic(
            title,
            description,
            created
            )VALUES(
                'MySQL',
                'MySQL is ....',
                NOW()
                )";
    $result = mysqli_query($conn,$sql);
    if( $result == false){
        echo mysqli_error($conn);
       }
?>