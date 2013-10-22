<?php
abstract class Animal {
    public  $manger = "Y manger! votre animal";
    public  $dormir ="ZzzzzZzzz";
    public  $courir = "Run Forest runnn";
    public  $energieChat = 100;
    public $energieChien = 100;

    public function Manger($manger){
        $this->energieChat += 20;
        $this->energieChien += 20;
        echo $manger;
    }
    public function dormir($dormir){
        $this->energieChat = 100;
        $this->energieChien= 100;
        echo $dormir;
    }
    public function Courir($courir){
        $this->energieChat -= 40;
        $this->energieChien -= 40;
        echo $courir;
    }
}

class chat extends Animal{
    private $miauler="MIIIAAAAooouuuuuu!!";
    private $ronronner;

    //class animal abstrait
    function miauler($miauler){
        $this->energieChat -= 40;
        if($this->energieChat>0)
        {
            $this->energieChat= $this->energieChat -40;
            echo $miauler.' Energie= '.$this->energieChat;
        }
    }
    function dormir(){
        echo 'Le chat dort vraiment longtemps contraire du chien';
    }
    function Energie(){

    }

    //class chat function
}

class chien extends Animal{
    private $japper;
    private $aboyer;
    private $grognier;
    //class animal abstrait
    function manger(){
        echo'Le chat mange de la mouler';
    }
    function dormir(){
        echo 'Le chien dort moins longtemps qu"un chat';
    }
    function Energie(){

    }

    //class chien function

}

?>

<html>
    <head>
        <title>Les classes d'animaux</title>
    </head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
<body>
<form method="post" action="lab7.php">
    <?php

?>

</body>
</html>