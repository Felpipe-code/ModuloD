<?php

require "Ex1.php";

///Exercicio 1

// $u = new Usuario();

// $u->nome = "Felipe";
// $u->email = "Felipao@email.com";
// $u->setSenha('123');

// $u->exibirDados();

// $u->trocarSenha();

// $u->exibirDados();

///Exercicio 2

class Produto {
    public $nome;
    public $preco;
    public $quantidadeEmEstoque;

    public function adicionarEstoque($unidades) {
        $this->quantidadeEmEstoque += $unidades;
    }

    public function removerEstoque($unidades) {
        if ($this->quantidadeEmEstoque >= $unidades) {
            $this->quantidadeEmEstoque -= $unidades;
        } else {
            echo "Erro: Estoque insuficiente para remover {$unidades} unidades.<br>";
        }
    }
}

//Exercicio 3

class ContaBancaria {
    public $titular;
    public $saldo = 0;

    public function depositar($valor) {
        $this->saldo += $valor;
    }

    public function sacar($valor) {
        if ($valor <= $this->saldo) {
            $this->saldo -= $valor;
            echo "Saque de R$ {$valor} realizado.<br>";
        } else {
            echo "Erro: Saldo insuficiente para o saque.<br>";
        }
    }
}

//Exercicio 4

class ItemCarrinho {
    public $nomeProduto;
    public $valorUnitario;
    public $quantidade;

    public function calcularTotalItem() {
        return $this->valorUnitario * $this->quantidade;
    }
}

//Exercicio 5 

class Carro {
    public $marca;
    public $modelo;
    public $ligado = false;

    public function ligar() {
        $this->ligado = true;
        echo "O carro foi ligado.<br>";
    }

    public function desligar() {
        $this->ligado = false;
        echo "O carro foi desligado.<br>";
    }

    public function status() {
        if ($this->ligado) {
            return "Status: Pronto para rodar!";
        } else {
            return "Status: Desligado.";
        }
    }
}

//Exercicio 6

class Funcionario {
    public $nome;
    public $cargo;
    public $salario;

    public function aumentarSalario($percentual) {
        $aumento = $this->salario * ($percentual / 100);
        $this->salario += $aumento;
        echo "Aumento de {$percentual}% aplicado. Novo salário: R$ {$this->salario}<br>";
    }
}