<?php

declare(strict_types=1);

class Produto{
    public string $nome;
    public float $price;
   

   
 

    
    public function getNome(): string
    {
        return $this->nome;
    }

    public function setNome(string $novoNome): void
    {
        if(strlen($novoNome) < 3){
            die ('Não é possivel cadastrar um nome com apenas 3 caracteries');
        }
               $this->nome = $novoNome;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $novoPrice): void
    {
        if($novoPrice < 0){
           die ('O valor não pode ser negativo');
        }
        $this->price = $novoPrice;
    }    

}

