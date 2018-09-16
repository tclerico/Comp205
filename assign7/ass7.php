
<?php 
        //Sci Fi
$scifiB[] = "Dune";
$scifiA[] = "Frank Herbert";
$scifiB[] = "The Hitchhikers Guide to the Galaxy";
$scifiA[] = "Douglas Adams";
$scifiB[] = "Enders Game";
$scifiA[] = "Orson Scott Card";
$scifiB[] = "Speaker for the Dead";
$scifiA[] = "Orson Scott Card";
$scifiB[] = "The Foundation Trilogy";
$scifiA[] = "Isaac Asimov";
$scifiB[] = "Neuromancer";
$scifiA[] = "William Gibson";
$scifiB[] = "I Robot";
$scifiA[] = "Isaac Asimov";
$scifiB[] = "Stranger in a Strange Land";
$scifiA[] = "Robert Heinlein";
        
// Historical Fiction
$histB[] = "The Nightingale";
$histA[] = "Kristin Hannah";
$histB[] = "I, Claudius";
$histA[] = "Robert Graves";
$histB[] = "The Twentieth Wife";
$histA[] = "Indu Sundaresan";
$histB[] = "Wolf Hall";
$histA[] =  "Hilary Mantel";
$histB[] = "The Three Muskateers";
$histA[] = "Alexandre Dumas";
$histB[] = "A Tale of Two Cities";
$histA[] = "Charles Dickens";
$histB[] = "David Copperfield";
$histA[] = "Charles Dickens";
$histB[] = "War and Peace";
$histA[] = "Leo Tolstoy";
// Mysteries
$mystB[] = "The Girl with the Dragon Tattoo";
$mystA[] =  "Stieg Larsson";
$mystB[] = "And Then There Were None";
$mystA[] = "Agatha Christie";
$mystB[] = "Murder on the Orient Express";
$mystA[] = "Agatha Christie";
$mystB[] = "Angels & Demons";
$mystA[] = "Dan Brown";
$mystB[] = "Rebecca";
$mystA[] = "Daphne du Maurier";
$mystB[] = "In Cold Blood";
$mystA[] = "Truman Capote";
$mystB[] = "The Godfather";
$mystA[] = "Mario Puzo";
// NonFiction
$nonfB[] = "I Know Why the Caged Bird Sings";
$nonfA[] = "Maya Angelou";
$nonfB[] = "And Still I Rise";
$nonfA[] = "Maya Angelou";
$nonfB[] = "The Omnivore's Dilemma: A Natural History of Four Meals";
$nonfA[] = "Michael Pollan";
$nonfB[] = "Maus: A Survivor's Tale : My Father Bleeds History";
$nonfA[] = "Art Spiegelman";
$nonfB[] = "Silent Spring";
$nonfA[] = "Rachel Carson";
$nonfB[] = "Guns, Germs, and Steel: The Fates of Human Societies";
$nonfA[] = "Jared Diamond";
$nonfB[] = "The Autobiography of Malcolm X";
$nonfA[] = "Malcolm X";
$nonfB[] = "Zen and the Art of Motorcycle Maintenance: An Inquiry Into Values";
$nonfA[] = "Robert M. Pirsig";
$nonfB[] = "The Godfather";
$nonfA[] = "Mario Puzo";
        
        /*$scifiB = array("Dune","The Hitchhikers Guide to the Galaxy","Enders Game","Speaker for the Dead","The Foundation Trilogy","Neuromancer","I Robot","Stranger in a Strange Land");
        
        $scifiA = array("Frank Herbert","Douglas Adams","Orson Scott Card","Orson Scott Card","Isaac Asimov","William Gibson","Isaac Asimov","Robert Heinlein");*/
        
        $genre = $_REQUEST["genre"];
        $search = $_REQUEST["search"];
        $BoA = $_REQUEST["BoA"];
        
       
        $fin = array(); 
            
        array_push($fin,$scifiB[0],$scifiA[0]);
        
        
        $myJSON = json_encode($fin);
        echo $myJSON;    
        
        
    ?>
