<?php
	class Person {
		private $title;
        private $language;
        private $genre;

        //COSTRUTTORE
        public function __construct($titolo, $genere, $lingua){
            $this->setTitle($titolo);
            $this->setGenre($genere);
            $this->setLanguage($lingua);
            
        }

        //METODI SET
        public function setTitle($titolo){
            if(is_string($titolo)){
                $this->title = $titolo;
            }else{
                echo "Errore! <br>";
            }
        }


        public function setGenre($genere){
            if(is_string($genere) || is_array($genere)){
                $this->genre = $genere;
            }else{
                echo "Errore! <br>";
            }
        }


        public function setLanguage($lingua){
            if(is_string($lingua) || is_array($lingua)){
                $this->language = $lingua;
            }else{
                echo "Errore! <br>";
            }
        }


        //METODI GET

        public function getTitle(){
            return $this->title;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function getLanguage(){
            return $this->language;
        }
	}




    $HungerGames = new movie("HungerGames","Avventure","Inglese");
    echo "<b>Titolo :</b>" . " " . $HarryPotter->getTitle() . "<br>";
    echo "<b>Genere:</b>" . " " . $HarryPotter->getGenre() . "<br>";
    echo "<b>Lingue:</b>" . " " . $HarryPotter->getLanguage() . "<br>";


    $AdamProject = new movie("The Adam Project","Azione","Inglese");
    echo "<b>Titolo :</b>" . " " . $AdamProject->getTitle() . "<br>";
    echo "<b>Genere:</b>" . " " . $AdamProject->getGenre() . "<br>";
    echo "<b>Lingue:</b>" . " " . $AdamProject->getLanguage() . "<br>";
   
?>