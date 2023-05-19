<?php

    class Film{
        private $naslov;
        private $reziser;
        private $godinaIzdanja;

        //geteri
        public function getNaslov(){
            return $this->naslov;
        }
        public function getReziser(){
            return $this->reziser;
        }
        public function getGodinaIzdanja(){
            return $this->godinaIzdanja;
        }

        //seteri
        public function setNaslov($n){
            $this->naslov=$n;
        }
        public function setReziser($r){
            $this->reziser=$r;
        }
        public function setGodinaIzdanja($g){
            if($g>1800){
                $this->godinaIzdanja=$g;
            }
            else{
                $this->godinaIzdanja=1800;
            }
        }

        public function stampaj(){
            echo "
                <table>
                    <tr>
                        <td>Naslov filma: </td>
                        <td>$this->naslov </td>
                    </tr>
                    <tr>
                        <td>Reziser: </td>
                        <td>$this->reziser </td>
                    </tr>
                    <tr>
                        <td>Godina Izdanja : </td>
                        <td>$this->godinaIzdanja </td>
                    </tr>
                </table>
                
            ";
        }
    }

    $f1=new film();
    $f1->setGodinaIzdanja(2000);
    echo $f1->getGodinaIzdanja();

?>