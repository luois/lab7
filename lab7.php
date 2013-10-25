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
        echo $this->manger.'<br>';
    }
    public function dormir(){
        $this->energieChat = 100;
        $this->energieChien= 100;
        echo $this->dormir.'<br>';
    }
    public function Courir(){
        $this->energieChat -= 40;
        $this->energieChien -= 40;
        echo $this->courir.'<br>';
    }
}

class chat extends Animal{
    public $miauler="MIIIAAAAooouuuuuu!!";
    public $ronronner="ROoonnnnROOONnnnn";

    //class animal abstrait
    function miauler(){
        echo $this->miauler.'<br>';
        $this->energieChat -= 40;
        if($this->energieChat<=0)
        {
            echo "Énergie= 0<br>";
            $this->dormir();
        }
        echo "Énergie= ".$this->energieChat.'<br>';
    }
    function ronronner($ronronner){
        echo $ronronner.'<br>';
        $this->energieChat -= 40;
        if($this->energieChat<=0)
        {
            echo "Énergie= 0<br>";
            $this->dormir();
        }
        echo "Énergie= ".$this->energieChat.'<br>';
    }

}

class chien extends Animal{
    public $japper="WWoooooouuuuAAAAFFF";
    public $Grognier="GRGGRRRRRRRRrrrrrr!";
    public $nom;
    public $couleur;

    function Japper(){
        echo $this->japper.'<br>';
        $this->energieChien -= 40;
        if($this->energieChien<=0)
        {
            echo "Énergie= 0<br>";
            $this->dormir();

        }
        echo "Énergie= ".$this->energieChien.'<br>';
    }
    function Grognier($Grognier){
        echo $Grognier.'<br>';
        $this->energieChien -= 40;
        if($this->energieChien<=0)
        {
            echo "Énergie= 0<br>";
            $this->dormir();

        }
        echo "Énergie= ".$this->energieChien.'<br>';
    }
}
 $chat1 = new chat();
 $chat2 = new chat();
 $chien1 = new chien();
 $chien2 = new chien();
 $chien3 = new chien();


$chat1->miauler();
$chat1->miauler();
$chat1->miauler();

$Chien1->Japper();
$Chien1->Japper();
$Chien1->Japper();



?>
</body>
</html>