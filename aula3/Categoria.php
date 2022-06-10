<?php

declare(strict_types=1);

class Categoria
{
        public function __construct(
            private string $nome,
            private string $descricao
            )
            {

        }

        public function getNome(): string {
            return $this->nome;
        }

        public function setNome($nomeNovo):void{
            $this->nome = $nomeNovo;
        }


}