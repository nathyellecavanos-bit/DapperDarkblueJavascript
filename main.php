<?php
//  class circulo{
//      public $radio;
//      public function __construct($radio){
//          $this->radio = $radio;
//      }
//      public function calcularArea(){
//          return 3.14 * $this->radio * $this->radio;
      
//      }
//      public function calcularCircunferencia(){
//          return 2 * 3.14 * $this->radio;
//      }
//  }
// $circulo = new circulo(8);
// echo $circulo->calcularArea() . "\n";
// echo $circulo->calcularCircunferencia() . "\n";

class Contabancaria {
    public $numeroConta;
    public $nomeTitular;
    public $saldodaconta;

    public function __construct($numeroConta, $nomeTitular, $saldodaconta = 0) {
        $this->numeroConta = $numeroConta;
        $this->nomeTitular = $nomeTitular;
        $this->saldodaconta = $saldodaconta;
    }

    public function depositarvalor($valor) {
        if ($valor > 0) {
            $this->saldodaconta += $valor;
            return "Depósito realizado com sucesso.";
        } else {
            return "Não é possível depositar um valor negativo ou zero.";
        }
    }

    public function sacarvalor($valor) {
        if ($valor <= 0) {
            return "Não é possível sacar um valor negativo ou zero.";
        }

        if ($valor > $this->saldodaconta) {
            return "Saldo insuficiente.";
        }

        $this->saldodaconta -= $valor;
        return "Saque realizado com sucesso.";
    }

    public function consultarsaldo() {
        return $this->saldodaconta;
    }
}

$ana = new Contabancaria("00000-A", "Ana", 6000);
echo $ana->sacarvalor(650) . "\n";
echo $ana->depositarvalor(1000) . "\n";
echo "Saldo atual: R$ " . $ana->consultarsaldo() . "\n";
echo $ana->depositarvalor(-100) . "\n";
echo $ana->sacarvalor(100000) . "\n";

?>
