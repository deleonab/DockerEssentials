<html>
<head>
    <title>Two container application</title>
</head>
<body>
    <ul>
            <?php       
            
            $json = file_get_contents('http://players');
            $players = json_decode($json)->players;
            
            foreach($players in $player){
               echo "<li> $player </li>";

            }
            
            ?>
        
        
    </ul>  
</body>


</html>