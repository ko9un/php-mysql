<?php
    $conn = mysqli_connect('localhost:13306','root','koreait','opentutorials');
    $filtered = array(
        'title'=> mysqli_real_escape_string($conn, $_POST['title']),
        'description' => mysqli_real_escape_string($conn ,$_POST['description'])
    );
    $sql = "
    INSERT INTO topic
        (title, description, created)
        VALUES(
            '{$filtered['title']}',
            '{$filtered['description']}',
            NOW()
            )
            ";
            $result = mysqli_query($conn, $sql);
            if( $result == false){
                echo '저장실패';
                error_log(mysqli_error($conn));
               } else{
                echo '성공했습니다 . <a href="index.php">돌아가기</a>';
               }

    ?>