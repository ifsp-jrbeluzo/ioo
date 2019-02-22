<?php

	include("Pessoa.php");

	class Aluno extends Pessoa{
		public $matricula;
		public $nota;
		
		
		public function __construct($nome,$email,$telefone,$idade,$sexo,$cpf,$matricula,$nota){
			
			parent::__construct($nome,$email,$telefone,$idade,$sexo,$cpf);
			$this->matricula = $matricula;
			$this->nota = $nota;
			
		}		
		
	}


?>