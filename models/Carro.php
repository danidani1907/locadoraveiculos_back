<?php

namespace Models;
use interfaces\Locavel;

//classe que representa um carro

class Carro extends Veiculo implements Locavel {
    public function calculoAluguel(int $dias): float{
            return $dias * DIARIA_CARRO;
    }
    
    public function alugar(): string{
        if ($this->disponivel){
            $this->disponivel = false;
            return "Carro'{$this->modelo}' alugado com sucesso!";
        }
        return "Carro '{$this->modelo}' não esta disponivel";
    }

        public function devolver(): string{
            if ($this->disponivel){
                $this->disponivel = true ;
                return "Carro'{$this->modelo}' devolvido com sucesso!";
            }
            return "Carro '{$this->modelo}' já esta disponivel";
        }   
}
?>