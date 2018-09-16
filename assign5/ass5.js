
function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i < ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function checkCookie() {
    var user=getCookie("name");
    var addr=getCookie("address");
    var maid=getCookie("mom");
	if (user != "" && title!="" && maid!="") {
        document.getElementById("cookie1").innerHTML=user;
        document.getElementById("cookie2").innerHTML=maid;
        document.getElementById("cookie3").innerHTML=addr;
    } else {
       user = prompt("Please enter your name:","");
       addr = prompt("Please enter your address:","");
       maid = prompt("eneter you mothers maiden name:","");
      
       setCookie("name", user, 30);
       setCookie("address", addr, 30);
       setCookie("mom",maid,30);
 
       document.getElementById("cookie1").innerHTML=user;
        document.getElementById("cookie2").innerHTML=maid;
        document.getElementById("cookie3").innerHTML=addr;
    }
    
}

function changeCookie(){
    setCookie("name",null,0);
    setCookie("address",null,0);
    setCookie("mom",null,0);
}

function addElements(){
    //get the selected elements and the text
    var radio = document.forms["ass5"]["element1"].value;
    var UItext = document.forms["ass5"]["stuffs"].value;
    
    //append the elements into the other div
    var newThings = document.createElement(radio);
    var text = document.createTextNode(UItext);
    newThings.appendChild(text);
    
    var element = document.getElementById("add");
    element.appendChild(newThings);
}



function addTable(){
    //get elements to be added
    var thing1 = document.forms["ass5"]["T1"].value;
    var thing2 = document.forms["ass5"]["T2"].value;
    var thing3 = document.forms["ass5"]["T3"].value;
    //check to make sure all text areas are full
    if(thing1=="" || thing2=="" || thing3=="" ){
        window.alert("One or more text areas are empty!");
        return false;
    }
    
    //create new tr
    var newRow = document.createElement("tr");
    //3 new td
    var td1 = document.createElement("td");
    var td2 = document.createElement("td");
    var td3 = document.createElement("td");
    
    //populate td with text
    var text1 = document.createTextNode(thing1);
    var text2 = document.createTextNode(thing2);
    var text3 = document.createTextNode(thing3);
    td1.appendChild(text1);
    td2.appendChild(text2);
    td3.appendChild(text3);
    
    //append td into the new tr
    newRow.appendChild(td1);
    newRow.appendChild(td2);
    newRow.appendChild(td3);
    
    //put tr in the table
    var table = document.getElementById("outTable");
    table.appendChild(newRow);

    
}

function allTd(){
    //var allTds = document.getElementsByTagName("TD").textContent;
    var allTds = document.getElementsByTagName("TD");
    var cat="";
    for(i=0;i<allTds.length;i++){
        cat+= (allTds[i].innerHTML + " - ");
    }
    
    var myWindow=window.open("","","width=200px,height=200px");
    myWindow.document.write("<div id='hello'>"+cat+"<div>");
    
    
}