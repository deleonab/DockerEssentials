<html>
<head>
    <title>Two container application</title>
</head>
<body>
    <h1>Team Memos2:</h1>
    <ul>
            <?php       
            
            $json = file_get_contents('http://players');
            $players = json_decode($json)->players;
            
            foreach($players as $player){
               echo "<li> $player </li>";

            }
            
            ?>
        
        
    </ul>  
</body>


</html>