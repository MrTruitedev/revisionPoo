<?php
    class Article{
        protected $id_art;
        protected $nom_art;
        protected $content_art;

        public function __construct($nom_art, $content_art)
        {
            $this -> nom_art = $nom_art;
            $this -> content_art = $content_art;
        }

        public function getIdArt():int{
            return $this -> id_art;
        }
        public function getNomArt():string{
            return $this -> nom_art;
        }
        public function getContentArt():string{
            return $this -> content_art;
        }

        public function setIdArt($id):void{
            $this -> id_art = $id;
        }
        public function setNomArt($nom_art):void{
            $this -> nom_art = $nom_art;
        }
        public function setContentArt($content_art):void{
            $this -> content_art = $content_art;
        }

        public function showAllArticle($bdd):array{
            try{
                $req = $bdd -> prepare('SELECT * FROM article');
                $req -> execute();
                $data = $req -> fetchAll(PDO::FETCH_OBJ);
                return $data;
            }catch(Exception $e){
                die ('Erreur : '.$e->getMessage());
            }
        }
    }
?>