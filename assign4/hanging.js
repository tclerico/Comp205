// Tim Clerico
// 9/28/17
// JavaScript for Hangman game
// Comp 205

var letterarray = [];
var incorrectCount = 0;
var blankarr = [];
var guesstrack = [];


function Start(){
    //get player name
    var playername = document.forms["box"]["player"].value;
    //list of possible words
    var words = ["cow","goat","sheep","cattle","lama","alpaca","horse","boar","swine","chicken","rooster",""];

    window.alert("Thanks For Playing Hangman "+playername);
   
    //randomly select a word from the array
    var wordselect = words[Math.floor(Math.random()*words.length)];
    
    //split word into an array of letters
    var newletterarray = wordselect.split("");
    for(x=0;x<newletterarray.length;x++){
        letterarray.push(newletterarray[x]);
    }
    
    //populate the <p> tag in the HTML with the correct blank spaces
    var blanks="";
    for(x=0;x<letterarray.length;x++){
        if(letterarray[x]==" "){
            blanks=blanks+"/ ";
            blankarr.push("/ ");
        }
        else{
            blanks=blanks+"_ ";
            blankarr.push("_ ");
        }
    }
    document.getElementById("blanks").innerHTML=blanks;
    incorrectCount=0;
}



function Guess(){
    //get the letter guessed
    var guess = document.forms["box"]["guess"].value;
    guesstrack.push(guess + " ");
    
    //proccess the users guess
    if(letterarray.indexOf(guess) != -1){
        for(x=0;x<letterarray.length;x++){
            if(guess == letterarray[x]){
                blankarr[x] = guess;
            }
        }
    }else{
        incorrectCount = incorrectCount + 1;
    }
    
    if(incorrectCount == 6){
        window.alert("GAME OVER, YOU LOOSE!");
    }
    
    var letterstring = blankarr.join();
    var finalstring = letterstring.replace(/,/g , "");
    
    
    
    //draw out the guess
    document.getElementById("hangimg").src = "Hangman" + incorrectCount + ".jpg";
    
    document.getElementById("blanks").innerHTML = finalstring;
    
    document.getElementById("guesses").innerHTML = guesstrack.join().replace(/,/g,"");
    
    if (blankarr.join() == letterarray.join()){
        window.alert("YOU WON");
    }
    
}











