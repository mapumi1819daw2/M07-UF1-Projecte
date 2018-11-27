<?php


    class GestorUsuaris{
        
        private $usuariActiu;
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



        public function getTrobat(){
            return $this->trobat;
        }

        /**Comprobem que l'usuari està registrat */
        public  function comprobaUsuari($usuari){

           
            
            
            foreach($this->usuarisCSV as $u){
                if(!strcmp($u->getName(), $usuari->getName())){
                    /* echo "L'usuari: ".$usuari->getName()." existeix!"; */
                    if(!strcmp($u->getPass(), $usuari->getPass())){
                        /* echo "<BR><BR>La contrasenya coincideix!"; */

                        $this->trobat = true;
                    }
                    else{
                        echo "<BR><BR>La contrasenya és incorrecta o no coincideix!";
                    }

                    
                }

                /* else{
                    echo  "L'usuari: ".$usuari->getName()." no existeix!";
                } */
                
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