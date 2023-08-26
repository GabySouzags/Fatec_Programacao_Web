<?php
class Pessoa
{
    protected string $nome;
    protected int $cpf;
    protected string $email;

    public function __construct(string $nome, int $cpf, string $email)
    {

    }

}

class Professor extends Pessoa{
    private float $salario;
    private int $matricula;
    private float $cargaHoraria;
    private string $departamento;

    public function __construct(string $nome, int $cpf, string $email, float $salario, int $matricula, float $cargaHoraria, string $departamento)
    {
        parent:: __construct($cpf, $nome, $email);
        
        
    }

    public function AtualizarSalario(){
        
    }
}
class Funcionario{
    private string $matricula;
    private string $regime; 
    private float $salario;


    public function AtualizarSalario(){

    }
}

class Aluno extends Pessoa{
    private string $ra;
    private string $curso;
    private int $termo;


    public function AlterarTermo($termoatual){


    }
}