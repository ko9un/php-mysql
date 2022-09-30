<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <script>
       var coworkers = ['egoing','leezche','duru','gaeho']
        coworkers.push('graphittie');
        //for(var i in coworkers{ coworkers[i]})
        for(var item of coworkers){
            document.write(item + '<br>');
        }

        var obj = {
            egoing: 1,
            leezche: 2,
            duru: 3,
            gaeho: 4,
        }
        for(var key in obj){
            document.write(`${key}: ${obj[key]}<bt>`);
        }

    </script>
        
</head>

<body>
    <h1>Array</h1>
    <?php
        $coworkers = array ('egoing','leezche','duru','gaeho');
        echo $coworkers[1].'<br>';
        array_push($coworkers,'graphittie');
        foreach($coworkers as $item){
            var_dump($item);
        }

        $obj = array('egoing'=> 1 , 'leezche' =>2, 'duru' =>3, 'geaho'=>4);
        echo '<br><br>'.json_encode($obj);

        foreach($obj as $key => $value){
            echo "<br>$key: $value";
        }

    ?>
</body>

</html>