<?php

	class Pessoa{
		//atributos
		public $nome;
		public $email;
		public $cpf;
		public $sexo;
		public $data_nascimento;
		
		public function __construct($nome,$email,$cpf,$sexo,$data_nascimento){
			$this->nome = $nome;		
			$this->email = $email;		
			$this->cpf = $cpf;		
			$this->sexo = $sexo;		
			$this->data_nascimento = $data_nascimento;		
		}
		
		public function exibe_dados(){
			echo "
				<b>Nome:</b>$this->nome<br />
				<b>Email:</b>$this->email<br />
				<b>CPF:</b>$this->cpf<br />
				<b>Sexo:</b>$this->sexo<br />
				<b>Data Nascimento:</b>$this->data_nascimento<br />
			";	
			
		}
		
	}

?>