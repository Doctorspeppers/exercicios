<?php

	class data
	{
		public $dia;
		public $mes;
		public $ano;

		function __construct($dia, $mes, $ano)
		{
			$this->dia = $dia;
			$this->mes = $mes;
			$this->ano = $ano;
		}
		public function getData()
		{
			$string = $this->dia."/".$this->mes."/".$this->ano;
			return $string;
		}
	}

	class funcionario
	{
		private $departamento;
		private $salario;
		private $dataEntrada;
		private $CPF;
		
		function __construct($departamento, $salario, $dia, $mes, $ano, $CPF)
		{
			$this->departamento = (string)$departamento;
			$this->salario = 	(int)$salario;
			$this->dataEntrada = new data($dia, $mes, $ano);
			$this->CPF = (string)$CPF;
		}
		public function recebeAumento()
		{
			$this->salario = $this->salario*1.1;
		}
		public function calculaGanhoAnual()
		{
			$_salario_anual = $this->salario*12;
			return $_salario_anual;
		}
		function __toString()
		{
			return "O funcionario que usa o CPF:{$this->CPF}, que esta no departamento {$this->departamento} que recebe o salario {$this->salario} que entrou no dia {$this->dataEntrada->getData()}, foi invocado!!!";
		}
	}