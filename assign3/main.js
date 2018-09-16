function estimateCost(){
    var car = document.forms["sales"]["radio"].value;
    var eng = document.forms["sales"]["select"].value;

    
    /*Setting variables for the cost of all items*/
    switch (car){
        case  "item1":
            var carC = 2000;
            break;
        case "item2":
            var carC = 2500;
            break;
        case "item3":
            var carC = 1700;
            break;
        case "item4":
            var carC = 10000;
            break;
    }
    switch (eng){
        case "v8":
            var engC = 1000;
            break;
        case "v12":
            var engC = 4000;
            break;
        case "v6":
            var engC = 300;
            break;
    }
    
    var pack1t="";
    var pack2t="";
    var pack3t="";
    
    if (document.getElementById("lift").checked == true){
        var pack1C=5000;
        pack1t = "Lift and Wheel Package $5000";
    }else{
        var pack1C=0;
    }
    if (document.getElementById("int").checked==true){
        var pack2C=4000;
        pack2t = "Refurbished Interiorn $4000";
    }else{
        var pack2C=0;
    }
    if(document.getElementById("air").checked==true){
        var pack3C=700;
        pack3t = "After Market Cold Air Intake System $700";
    }else{
        var pack3C=0;
    }
    /*sum up all the costs*/
    var sum = carC + engC + pack1C+ pack2C + pack3C;
    
    /*set strings for all the options (used for printing in the alert box)*/
    if(car=="item1"){
        var CarT = "1992 Blazer $2000";
    }else if(car == "item2"){
        var CarT = "1985 Ford F250 $2500";
    }else if(car=="item3"){
        var CarT = "1976 S10 $1700";
    }else if(car=="item4"){
        var CarT = "1967 Challanger $10000";
    }
    
    if(eng=="v8"){
        var engT = "5.7l V8 $1000";
    }else if(eng=="v12"){
        var engT = "7l V12 $4000";
    }else if(eng=="v6"){
        var engT = "3.7l V6 $300";
    }
    
    
    
    window.alert("The total cost is: $"+sum + "\r\n You Selected: \r\n" + CarT + "\r\n" + engT + "\r\n" + pack1t + "\r\n"  + pack2t + "\r\n" + pack3t);
}

function calcCost(){
    var x = document.forms["sales"]["fname"].value;
    var y = document.forms["sales"]["lname"].value;
    var z = document.forms["sales"]["info"].value;
    if (x == "" || y == "" || z == ""){
        alert("Mising Required Information");
        return false;
    }
    
    var car = document.forms["sales"]["radio"].value;
    var eng = document.forms["sales"]["select"].value;
   
    
    /*Setting variables for the cost of all items*/
    switch (car){
        case  "item1":
            var carC = 2000;
            break;
        case "item2":
            var carC = 2500;
            break;
        case "item3":
            var carC = 1700;
            break;
        case "item4":
            var carC = 10000;
            break;
    }
    switch (eng){
        case "v8":
            var engC = 1000;
            break;
        case "v12":
            var engC = 4000;
            break;
        case "v6":
            var engC = 300;
            break;
    }
    
    var pack1t="";
    var pack2t="";
    var pack3t="";
    
    if (document.getElementById("lift").checked == true){
        var pack1C=5000;
        pack1t = "Lift and Wheel Package $5000";
    }else{
        var pack1C=0;
    }
    if (document.getElementById("int").checked==true){
        var pack2C=4000;
        pack2t = "Refurbished Interiorn $4000";
    }else{
        var pack2C=0;
    }
    if(document.getElementById("air").checked==true){
        var pack3C=700;
        pack3t = "After Market Cold Air Intake System $700";
    }else{
        var pack3C=0;
    }
    /*sum up all the costs*/
    var sum = carC + engC + pack1C+ pack2C + pack3C;
    
    
    /*set strings for all the options (used for printing in the alert box)*/
    if(car=="item1"){
        var CarT = "1992 Blazer $2000";
    }else if(car == "item2"){
        var CarT = "1985 Ford F250 $2500";
    }else if(car=="item3"){
        var CarT = "1976 S10 $1700";
    }else if(car=="item4"){
        var CarT = "1967 Challanger $10000";
    }
    
    if(eng=="v8"){
        var engT = "5.7l V8 $1000";
    }else if(eng=="v12"){
        var engT = "7l V12 $4000";
    }else if(eng=="v6"){
        var engT = "3.7l V6 $300";
    }
    
    document.getElementById("jp").innerHTML= "Total Cost: $"+sum+"\r\n You Selected: \r\n"+CarT+", "+engT+", "+pack1t+", "+pack2t+", "+pack3t;
}