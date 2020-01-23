<?php




  abstract class DAO
    {  
    
     abstract function read($id);

     abstract function update($objet);

     abstract function delete($objet);

     abstract function create($objet);
		
     protected $key;

     protected $table;

        function __construct($key, $table)
        {
            $this->key = $key;
            $this->table = $table;
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }
    
        function getLastKey()
        {
            
            return Connexion::getInstance()->lastInsertId();
            
            /* Version à la main qui récupère le max de la clé, qui n'assure pas que ce soit la bonne clé !
            $sql = "SELECT Max($this->key) as max FROM $this->table";
            $stmt = Connexion::getInstance()->prepare($sql);
            $stmt->execute();

            $row = $stmt->fetch();
            $newKey = $row["max"];
            return $newKey;*/
        }
        
    }




   // use DB\Connexion\Connexion;

    class DAOAgences extends \DAO
    {

        function __construct()
        {
			//Constructeur parent IDENTIQUE à la BDD soit : CLE PRIMAIRE, TABLE
			parent::__construct("idA", "agences");
            // echo "constructeur de DAO ", __NAMESPACE__,"<br/>";
        }

        public function read($idA)
        {
            // On utilise le prepared statemet qui simplifie les typages
            $sql = "SELECT * FROM $this->table WHERE $this->key=:idA";
            $stmt = Connexion::getInstance()->prepare($sql);
            $stmt->bindParam(':idA', $idA);
            $stmt->execute();

            $row = $stmt->fetch();
            $idA = $row["idA"];
            $ville = $row["ville"];
            $mail = $row["mail"];
            // rep est une new agence dans la table agence de la bdd competence;
            $rep = new \competence\agences\Agence($idA, $ville, $mail);
            $rep->setidA($idA);
            return $rep;
        }

        public function update($objet)
        {
            // On utilise le prepared statemet qui simplifie les typages
            $sql = "UPDATE $this->table SET ville = :ville, mail = :mail WHERE $this->key=:idA";
            $stmt = Connexion::getInstance()->prepare($sql);
            $idA = $objet->getidA();
            $ville = $objet->getville();
            $mail = $objet->getmail();
            $stmt->bindParam(':idA', $idA);
            $stmt->bindParam(':ville', $ville);
            $stmt->bindParam(':mail', $mail);
            $stmt->execute();
        }

        public function delete($objet)
        {
			//code d'origine :
			//$sql = "DELETE FROM $this->table WHERE $this->key=:id";
			//Les pilotes sont liés aux vols ! On désactive temporairement les "key constraint" et on réactive :
			$sql = "SET FOREIGN_KEY_CHECKS=0; DELETE FROM $this->table WHERE $this->key=:idA; SET FOREIGN_KEY_CHECKS=1";
            $stmt = Connexion::getInstance()->prepare($sql);
            $idA = $objet->getidA();
            $stmt->bindParam(':idA', $idA);
            $stmt->execute();
			
			//  retour de l'erreur SQL
			//
			//  if($stmt->errorCode() > 0) {
			//		$errors = $stmt->errorInfo();
			//		die($errors[2]);
			//  }
			//
			
        }

        public function create($objet)
        {
            $sql = "INSERT INTO $this->table (ville, mail) VALUES (:ville, :mail)";
            $stmt = Connexion::getInstance()->prepare($sql);
            $ville = $objet->getville();
            $mail = $objet->getmail();
            $stmt->bindParam(':ville', $ville);
            $stmt->bindParam(':mail', $mail);
            $stmt->execute();
            $objet->setidA(parent::getLastKey());
        }

        static function getAgences()
        {
            $sql = "SELECT * FROM agences";
            $rep = "<table class=\"table table-striped\">";			
            $rows = Connexion::getInstance()->query($sql);
            foreach ($rows as $row) {
                $rep .= "<tr><td>" . $row["idA"];
                $rep .= "</td><td>" . $row["ville"];
                $rep .= "</td><td>" . $row["mail"]. "</td></tr>";
              
            }
            return $rep . "</table>";
        }
    }



            
