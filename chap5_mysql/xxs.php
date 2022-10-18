<html>
    <body>
        <script>
           <?php 
                echo htmlspecialchars('<script>alert("hi")</script>')
            ?>
        </script>
    </body>
</html>