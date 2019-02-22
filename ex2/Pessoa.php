<?php

	class Pessoa{
	
		public $nome;
		public $email;
		public $telefone;
		public $idade;
		public $sexo;
		public $cpf;
		
		public function __construct($nome,$email,$telefone,$idade,$sexo,$cpf){
			$this->nome = $nome;
			$this->email = $email;
			$this->telefone = $telefone;
			$this->idade = $idade;
			$this->sexo = $sexo;
			$this->cpf = $cpf;
		}
		
		
	}
	
?>