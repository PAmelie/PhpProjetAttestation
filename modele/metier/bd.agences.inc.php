
<?php

    
    class Agence{
        private $idA;
        private $ville;
        private $mail;
        
        function __construct($ville,$mail) {
			
			$this->ville = $ville;
			$this->mail = $mail;
		}
      public function getidA() {
          return $this->idA;
      }         
      
      public function setidA($idA) {
          $this->idA = $idA;
          return $this;
      } 
      
      public function getville() {
          return $this->ville;
      }         
      
      public function setville($ville) {
          $this->ville = $ville;
          return $this;
      } 
      
       public function getmail() {
          return $this->mail;
      }         
      
      public function setmail($mail) {
          $this->mail = $mail;
          return $this;
      } 
      
    }
    
