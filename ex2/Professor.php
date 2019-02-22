<?php

	include("Pessoa.php");

	class Professor extends Pessoa{
		public $salario;
		public $disciplina;
		
		
		public function __construct($nome,$email,$telefone,$idade,$sexo,$cpf,$salario,$disciplina){
			
			parent::__construct($nome,$email,$telefone,$idade,$sexo,$cpf);
			$this->nome = $salario;
			$this->nome = $disciplina;
			
		}
		
	}


?>