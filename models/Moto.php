<?php

namespace Models;
use interfaces\Locavel;

//classe que representa uma moto

class Moto extends Veiculo implements Locavel {
    public function calculoAluguel(int $dias): float{
            return $dias * DIARIA_MOTO;
    }
    
    public function alugar(): string{
        if ($this->disponivel){
            $this->disponivel = false;
            return "Moto'{$this->modelo}' alugado com sucesso!";
        }
        return "Moto '{$this->modelo}' não esta disponivel";
    }

        public function devolver(): string{
            if ($this->disponivel){
                $this->disponivel = true ;
                return "Moto'{$this->modelo}' devolvido com sucesso!";
            }
            return "Moto'{$this->modelo}' já esta disponivel";
        }   
}
?>