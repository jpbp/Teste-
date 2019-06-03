<?php
	class Funcionario{
		var $nome,$cpf,$celular,$residencial,$email,$cep,$logradouro,$bairro,$cidade,$numero,$estado,$username,$complemento,$senha;
		
		
		function __construct($nomev,$cpfv,$celularv,$residencialv,$emailv,$cepv,$logradourov,$bairrov,$cidadev,$numerov,$estadov,$usernamev,$complementov,$senhav){
			$this->cpf = $cpfv;
			$this->nome = $nomev;
			$this->celular=$celularv;
			$this->residencial=$residencialv;
			$this->email=$emailv;
			$this->cep=$cepv;
			$this->logradouro=$logradourov;
			$this->bairro=$bairrov;
			$this->cidade=$cidade;
			$this->numero=$numerov;
			$this->estado=$estadov;
			$this->username=$usernamev;
			$this->complemento=$complementov;
			$this->senha=$senhav;
		}
		
		function getCpf(){
			return $this->cpf;
		}
		
		function setCpf($cpfv){
			$this->cpf = $cpfv;
		}
		
		function getNome(){
			return $this->nome;
		}
		
		function setNome($nomev){
			$this->nome = $nomev;
		}

		function getCelular(){
			return $this->celular;
		}
		
		function setCelular($celularv){
			$this->celular= $celularv;
		}
		function getResidencial(){
			return $this->residencial;
		}
		
		function setResidencial($residencialv){
			$this->nome = $residencialv;
		}
		function getEmail(){
			return $this->email;
		}
		
		function set($emailv){
			$this->email = $emailv;
		}

		function getCep(){
			return $this->cep;
		}
		
		function set($cepv){
			$this->cep = $cepv;
		}

		function getLogradouro(){
			return $this->logradouro;
		}
		
		function set($logradourov){
			$this->logradouro = $logradourov;
		}

		function getBairro(){
			return $this->Bairro;
		}
		
		function setBairro($bairrov){
			$this->bairro = $bairrov;
		}

		function getCidade(){
			return $this->cidade;
		}
		
		function setCidade($cidadev){
			$this->cidade = $cidadev;
		}

		function getNumero(){
			return $this->numero;
		}
		
		function setNumero($numerov){
			$this->numero = $numerov;
		}

		function getEstado(){
			return $this->estado;
		}
		
		function setEstado($estadov){
			$this->estado = $estadov;
		}

		function getUserName(){
			return $this->username;
		}
		
		function setUserName($v){
			$this->username = $usernamev;
		}
		function getComplemeto(){
			return $this->complemento;
		}
		
		function setComplemento($complementov){
			$this->complemento = $complementov;
		}
		function getSenha(){
			return $this->senha;
		}
		
		function setSenha($senhav){
			$this->senha = $senhav;
		}

		function imprimirFuncionario(){
			echo $this->cpf." , ".$this->nome; 
		}
	}


?>