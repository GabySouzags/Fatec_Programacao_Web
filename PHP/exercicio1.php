<?php 

class Teste 
{
    private int $a;
    private int $b;



    public function __construct(int $a, int $b)
    {
        $this-> a = $a;
        $this-> b = $b;
    }
    public function soma($valor){
        echo $this->a + $this->b +$valor;
    }
    
    
        
}

echo  "<br> SOMA <br>";
$t1 = new Teste(30, 10);
$t1->soma(50);

