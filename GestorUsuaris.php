<?php
session_start();



    require_once("ObjecteUsuari.php");
    class GestorUsuaris{
        
        public static $usuariActiu;
        private $contrasenyaUsuariActiu;
        private $NomArxiuUsuaris;

        private $trobat = false;

        private $usuarisCSV = array();


        public function __construct(){

          
            /**Obtenim els diferents arguments */
            $arguments = func_num_args();

            $this->llegeixCSV();

            if($arguments==1){
                $this->comprobaUsuari(func_get_arg(0));
            }
        }

        public function selfUsuari(){
            echo self::$usuariActiu;
        }



        public function getTrobat(){
            return $this->trobat;
        }

        /**Comprobem que l'usuari està registrat */
        public  function comprobaUsuari($usuari){

           
            
            
            foreach($this->usuarisCSV as $u){
                if($u == $usuari){
                    echo "Iguals";
                    $_SESSION["nom"] = $usuari->getName();
                    $this->trobat = true;
                }

                else{
                    
                }
                
                
            }

           
        }

        /**Llegim la llista d'usuaris emmagatzemats a l'arxiu */
        public function llegeixCSV(){
            $file = fopen("usuaris.csv", "r") or die ("Error al llegir l'arxiu");

            for($i = 0; $i = fgetcsv($file); $i++){
                $nouUsuari = new Usuari($i[0], $i[1]);
               
                $this->usuarisCSV[] =$nouUsuari;
            }

            fclose($file);

            
        }
    }


?>