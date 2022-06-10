<?php

declare(strict_types=1);


class Produto{
    public string $nome;
    public float $price;
    private string $descricao;
    private readonly Categoria $categoria;

    
    public function __construct(string $novoNome, float $novoPrice, Categoria $categoria)
    {
        $this->nome = $novoNome;
        $this->price = $novoPrice;
        $this->categoria = $categoria;
    }

    
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
    
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    public function setDescricao(string $novaDescricao): void
    {
        $this->descricao = $novaDescricao;
    }

    public function setCategoria(Categoria $categoria): void
    {
        $this->categoria = $categoria;
    }

}

