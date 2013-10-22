<html>
<head>
    <title>Les classes d'animaux</title>
</head>
<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<body>
<?php
abstract class Animal {
    public  $manger = "Y manger! votre animal";
    public  $dormir ="ZzzzzZzzz";
    public  $courir = "Run Forest runnn";
    public  $energieChat = 100;
    public $energieChien = 100;

    public function Manger(){
        $this->energieChat += 20;
        $this->energieChien += 20;
        echo $this->manger;
    }
    public function dormir(){
        $this->energieChat = 100;
        $this->energieChien= 100;
        echo $this->dormir;
    }
    public function Courir(){
        $this->energieChat -= 40;
        $this->energieChien -= 40;
        echo $this->courir;
    }
}

class chat extends Animal{
    private $miauler="MIIIAAAAooouuuuuu!!";
    private $ronronner="ROoonnnnROOONnnnn";

    //class animal abstrait
    function miauler($miauler){
        echo $miauler;
        $this->energieChat -= 40;
        if($this->energieChat<=0)
        {
            echo'<br>'.$this->dormir;
            $this->dormir();
            echo $this->energieChat;
        }
    }
    function ronronner($ronronner){
        echo $ronronner;
        $this->energieChat -= 40;
        if($this->energieChat<=0)
        {
            echo'<br>'.$this->dormir;
            $this->dormir();
            echo $this->energieChat;
        }
    }

}

class chien extends Animal{
    private $japper="WWoooooouuuuAAAAFFF";
    private $Grognier="GRGGRRRRRRRRrrrrrr!";
    private $nom;
    private $couleur;

    function Japper($japper){
        echo $japper;
        $this->energieChien -= 40;
        if($this->energieChien<=0)
        {
            echo'<br>'.$this->dormir;
            $this->dormir();
            echo $this->energieChien;
        }
    }
    function Grognier($Grognier){
        echo $Grognier;
        $this->energieChien -= 40;
        if($this->energieChien<=0)
        {
            $this->dormir();
            echo'<br>'.$this->dormir;
            echo $this->energieChien;
        }
    }
}
 $chat1 = new chat();
 $chat2 = new chat();
 $chien1 = new chien();
 $chien2 = new chat();
 $chien3 = new chat();

 //Nom chat et chien


 $chien1->$nom;

echo '<br> Je mappel $chien1->$nom';

?>
</body>
</html>