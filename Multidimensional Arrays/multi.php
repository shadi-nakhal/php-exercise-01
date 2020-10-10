 <?php 
   

    $arr2 = Array ( "musicals" => Array( 0 => "Oklahoma", 1 => "The Music Man", 2 => "South Pacific" ),
         "dramas" => Array ( 0 => "Lawrence of Arabia", 1 => "To Kill a Mockingbird", 2 => "Casablanca" ),
         "mysteries" => Array ( 0 => "The Maltese Falcon", 1 => "Rear Window ",2 => "North by Northwest" ));    




    foreach($arr2 as $key => $val){
            $KEY = strtoupper($key);
            echo "{$KEY} <br>";
        foreach($val as $num => $tit){
            echo "- - - -> {$num} = {$tit}<br>";
        }
    }

    echo "<br>";
    echo "***************** SORTED *****************<br>";
    echo "<br>";

    
    ksort($arr2);


    foreach($arr2 as $key => $val){
        $KEY = strtoupper($key);
        echo "{$KEY} <br>";
    foreach($val as $num => $tit){
        echo "- - - -> {$num} = {$tit}<br>";
    }
}   


?>