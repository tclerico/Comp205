<html>
<body>
    <script>
        function goBack(){
            window.history.back();
        }
    </script>
    <?php
        
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $info = $_POST["info"];
    
    if(empty($fname) || empty($lname) || empty($info)){
        echo "You Missed Something";
    }
    else{
        $car = $_POST["radio"];
        $engine = $_POST["select"];
        
        switch($car){
            case "item1":
                $car = "1992 Chevy Blazer";
                $carCost = 2000;
                break;
            case "item2":
                $car = "1985 F250";
                $carCost = 2500;
                break;
            case "item3":
                $car = "1976 S10";
                $carCost = 1700;
                break;
            case "item4":
                $car = "1967 Challanger";
                $carCost = 10000;
                break;
        }
        
        switch($engine){
            case "v8":
                $engine = "5.7L V8";
                $engineCost = 1000;
                break;
            case "v12":
                $engine = "7L V12";
                $engineCost = 4000;
                break;
            case "v6":
                $engine = "3.7L V6";
                $engineCost = 300;
                break;
        }
        
    
        $package = $_POST["check"];
        if(empty($package)) {
            echo("<p>You didn't select any additional packages.</p>");
        }
        else {
            
            $pcost = array(0,0,0);
            $N = count($package);
            
            for($x=0;$x<$N;$x++){
            if($package[$x]=="lift"){
                $package[$x]="Lift Kit and Wheel: $5000";
                $pcost[$x]=5000;
                }
            if($package[$x]=="int"){
                $package[$x]="Refurbished Interior: $4000";
                $pcost[$x]=4000;
                }
            if($package[$x]=="air"){
                $package[$x]="After Market Air Intake System: $700";
                $pcost[$x]=700;
                }
            }
        
            $tpcost = 0;
            for($x=0;$x<$N;$x++){
                $tpcost = $tpcost + $pcost[$x];
            }

        }
        
        $totalCost = $tpcost + $engineCost + $carCost;
        
        echo "<h1>RECEIPT</h1>";
        echo "<h2>Name: $fname $lname</h2>";
        echo "<h2>Address: $info</h2>";
        echo "<h2>You Selected: </h2>";
        echo "<p>$car: $$carCost</p>";
        echo "<p>$engine: $$engineCost</p>";
        
        echo("You selected $N packages(s): ");
            for($i=0; $i < $N; $i++){
                    echo($package[$i] . ", ");
            }
        
        echo "<p style=color:red;>Final Cost: $$totalCost</p>";
        
    }
    
    
    
    ?>    
    
<button onclick="goBack()">Back</button>
</body>
</html>