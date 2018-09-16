
function burn(){
    var x = new XMLHttpRequest();
    x.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            //deletes the post table when timer is up
        }
    };
    x.open("GET","php/burn.php",true);
    x.send();
}
            

function setEnd(){
    var xml = new XMLHttpRequest();
    xml.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
                 
        }
    };
    xml.open("GET","time.php",true);
    xml.send();
}
            
            
            
function timer(){
    var x = new XMLHttpRequest();
    x.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            var arr = JSON.parse(this.responseText);
            var t = arr[0].replace(/-/g,"/");
            secondTimer(t);
        }
    };
    x.open("GET","php/getEnd.php",true);
    x.send();
                
}
            
            

            
function secondTimer(time){            
    var end = new Date(time);
    var now = new Date().getTime();
                
    var dist = end-now;
               
                
    var x = setInterval(function(){
                    
    //get todays date + time
        var now = new Date().getTime();
                    
        //find the distance between now and end
        var dist = end - now;
                    
        //Time Calculations
        var days = Math.floor(dist / (1000 * 60 * 60 * 24));
        var hours = Math.floor((dist % (1000 * 60 * 60 *24)) / (1000 * 60 * 60));
        var minutes = Math.floor((dist % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((dist % (1000 * 60)) / 1000);
                    
        if(days!=0){var displayhours = Math.floor(hours/days);}else{var displayhours = hours;}
                    
                    
        document.getElementById("timer").innerHTML = days + "d " + displayhours + "h " + minutes + "m " + seconds +"s ";
                    
        //if the end time has been reached
        //delete table, reset end time and start timer again
        if(dist <= 0){
            clearInterval(x);
           
        }

    }, 1000);
    
    if(dist<=0){
        setEnd();
        burn();
        timer();
    }
    
                  
}
            