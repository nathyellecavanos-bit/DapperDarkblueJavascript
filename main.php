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
//1
// class Contabancaria {
//     public $numeroConta;
//     public $nomeTitular;
//     public $saldodaconta;

//     public function __construct($numeroConta, $nomeTitular, $saldodaconta = 0) {
//         $this->numeroConta = $numeroConta;
//         $this->nomeTitular = $nomeTitular;
//         $this->saldodaconta = $saldodaconta;
//     }

//     public function depositarvalor($valor) {
//         if ($valor > 0) {
//             $this->saldodaconta += $valor;
//             return "Depósito realizado com sucesso.";
//         } else {
//             return "Não é possível depositar um valor negativo ou zero.";
//         }
//     }

//     public function sacarvalor($valor) {
//         if ($valor <= 0) {
//             return "Não é possível sacar um valor negativo ou zero.";
//         }

//         if ($valor > $this->saldodaconta) {
//             return "Saldo insuficiente.";
//         }

//         $this->saldodaconta -= $valor;
//         return "Saque realizado com sucesso.";
//     }

//     public function consultarsaldo() {
//         return $this->saldodaconta;
//     }
// }

// $ana = new Contabancaria("00000-A", "Ana", 6000);
// echo $ana->sacarvalor(650) . "\n";
// echo $ana->depositarvalor(1000) . "\n";
// echo "Saldo atual: R$ " . $ana->consultarsaldo() . "\n";
// echo $ana->depositarvalor(-100) . "\n";
// echo $ana->sacarvalor(100000) . "\n";

//2
// class Funcionario {
//     public $nome;
//     public $cargo;
//     public $salario;

//     public function __construct($nome, $cargo, $salario = 0) {
//         $this->nome = $nome;
//         $this->cargo = $cargo;

//         if ($salario < 0) {
//             $this->salario = 0;
//         } else {
//             $this->salario = $salario;
//         }
//     }

//     public function calcularSalarioAnual() {
//         return $this->salario * 12;
//     }

//     public function aplicarAumento($percentual) {
//         if ($percentual < 0) {
//             return "Não é possível aplicar um percentual negativo.";
//         }

//         $this->salario += $this->salario * ($percentual / 100);
//         return "Aumento aplicado com sucesso.";
//     }
// }

// $funcionario = new Funcionario("Ana", "Desenvolvedora", 5000);

// echo "Salário atual: R$ " . $funcionario->salario . "\n";
// echo "Salário anual: R$ " . $funcionario->calcularSalarioAnual() . "\n";
// echo $funcionario->aplicarAumento(10) . "\n";
// echo "Novo salário: R$ " . $funcionario->salario . "\n";
// echo "Novo salário anual: R$ " . $funcionario->calcularSalarioAnual() . "\n";
// echo $funcionario->aplicarAumento(-5) . "\n";

// $funcionario2 = new Funcionario("João", "Analista", -3000);
// echo "Salário do João: R$ " . $funcionario2->salario . "\n";

//3
// class Produto {
//     public $nome;
//     public $preco;
//     public $quantidade;

//     public function __construct($nome, $preco, $quantidade) {
//         $this->nome = $nome;

//         if ($preco < 0) {
//             $this->preco = 0;
//         } else {
//             $this->preco = $preco;
//         }

//         if ($quantidade < 0) {
//             $this->quantidade = 0;
//         } else {
//             $this->quantidade = $quantidade;
//         }
//     }

//     public function atualizarPreco($novoPreco) {
//         if ($novoPreco < 0) {
//             return "Preço inválido.";
//         }

//         $this->preco = $novoPreco;
//         return "Preço atualizado com sucesso.";
//     }

//     public function aplicarDesconto($percentual) {
//         if ($percentual < 0 || $percentual > 100) {
//             return "Percentual inválido.";
//         }

//         $this->preco -= $this->preco * ($percentual / 100);
//         return "Desconto aplicado com sucesso.";
//     }

//     public function adicionarEstoque($quantidade) {
//         if ($quantidade < 0) {
//             return "Quantidade inválida.";
//         }

//         $this->quantidade += $quantidade;
//         return "Estoque atualizado.";
//     }

//     public function removerEstoque($quantidade) {
//         if ($quantidade < 0) {
//             return "Quantidade inválida.";
//         }

//         if ($quantidade > $this->quantidade) {
//             return "Estoque insuficiente.";
//         }

//         $this->quantidade -= $quantidade;
//         return "Produto removido do estoque.";
//     }
// }

// $produto = new Produto("Mouse", 100, 20);

// echo $produto->aplicarDesconto(10) . "\n";
// echo $produto->adicionarEstoque(5) . "\n";
// echo $produto->removerEstoque(10) . "\n";
// echo "Preço: R$ " . $produto->preco . "\n";
// echo "Estoque: " . $produto->quantidade . "\n";

//4
// class ConsultaMedica {
//     public $data;
//     public $hora;
//     public $paciente;
//     public $status;

//     public function __construct($data, $hora, $paciente) {
//         $this->data = $data;
//         $this->hora = $hora;
//         $this->paciente = $paciente;
//         $this->status = "Agendada";
//     }

//     public function cancelar() {
//         $this->status = "Cancelada";
//         return "Consulta cancelada.";
//     }

//     public function reagendar($novaData, $novaHora) {
//         if ($this->status == "Agendada") {
//             return "Conflito de agenda.";
//         }

//         $this->data = $novaData;
//         $this->hora = $novaHora;
//         $this->status = "Agendada";

//         return "Consulta reagendada.";
//     }
// }

// $consulta = new ConsultaMedica("10/07/2026", "14:00", "Ana");

// echo $consulta->cancelar() . "\n";
// echo $consulta->reagendar("15/07/2026", "09:00") . "\n";
// echo $consulta->status . "\n";

//5
// class Fatura {
//     public $numeroFatura;
//     public $valorOriginal;
//     public $valorFinal;
//     public $status;

//     public function __construct($numeroFatura, $valorOriginal) {
//         $this->numeroFatura = $numeroFatura;

//         if ($valorOriginal < 0) {
//             $this->valorOriginal = 0;
//         } else {
//             $this->valorOriginal = $valorOriginal;
//         }

//         $this->valorFinal = $this->valorOriginal;
//         $this->status = "Aberta";
//     }

//     public function aplicarDesconto($percentual) {
//         if ($percentual < 0 || $percentual > 100) {
//             return "Percentual inválido.";
//         }

//         $this->valorFinal = $this->valorOriginal - ($this->valorOriginal * ($percentual / 100));
//         return "Desconto aplicado.";
//     }

//     public function marcarPaga() {
//         $this->status = "Paga";
//         return "Fatura paga.";
//     }
// }

// $fatura = new Fatura("001", 1000);

// echo $fatura->aplicarDesconto(20) . "\n";
// echo $fatura->marcarPaga() . "\n";
// echo "Valor Final: R$ " . $fatura->valorFinal . "\n";
// echo "Status: " . $fatura->status . "\n";

//6
class PedidoVenda {
    public $total;

    public function __construct($total) {
        if ($total < 0) {
            $this->total = 0;
        } else {
            $this->total = $total;
        }
    }

    public function calcularTotal() {
        return $this->total;
    }
}

class RelatorioVendas {

    public function gerarTotal($listaPedidos) {
        $total = 0;

        foreach ($listaPedidos as $pedido) {
            $total += $pedido->calcularTotal();
        }

        return $total;
    }
}

$pedido1 = new PedidoVenda(500);
$pedido2 = new PedidoVenda(800);
$pedido3 = new PedidoVenda(250);

$lista = [$pedido1, $pedido2, $pedido3];

$relatorio = new RelatorioVendas();

echo "Total vendido: R$ " . $relatorio->gerarTotal($lista);

?>