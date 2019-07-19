<?php
class Usuarios extends model {

	/*
		Atributos
		nome,email,senha,telefone
	*/

	public function verificarLogin($var)
	{
		$sql = $this->db->prepare("SELECT id FROM usuarios WHERE id = :id");
		$sql->bindValue(":id", $var);
		return $sql->execute();

	}


	public function inserir($dados)
	{
		try {
			//print_r($dados);
			$sql = "INSERT INTO usuarios (nome,email,senha,telefone) VALUES 
			(:nome,:email,:senha,:telefone)";
					//$sql = $this->pdo->prepare('INSERT INTO proprietario (cpf,nome_propri,pais,estado,cidade,bairro,rua,numero,telefone)
					//VALUES (:cpf,:nome_propri,:pais,:estado,:cidade,:bairro,:rua,:numero,:telefone)');
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':nome' ,$dados['nome']);
			$sql->bindValue(':email' ,$dados['email']);
			$sql->bindValue(':senha' ,md5($dados['senha']));
			$sql->bindValue(':telefone' ,$dados['telefone']);
					
			if ($sql->execute()) {
				//echo "Dono cadaastrado com sucesso";
				return true;
			}else{
				return false;
			} 
					
		} catch (Exception $e) {
			echo 'Error: ' . $e->getMessage();
		}
	}

	public function getTotalUsuarios() {
		$sql = $this->db->query("SELECT COUNT(*) as c FROM usuarios");
		$row = $sql->fetch();

		return $row['c'];
	}

	public function cadastrar($nome, $email, $senha, $telefone) {
		$sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email");
		$sql->bindValue(":email", $email);
		$sql->execute();

		if($sql->rowCount() == 0) {

			$sql = $this->db->prepare("INSERT INTO usuarios SET nome = :nome, email = :email, senha = :senha, telefone = :telefone");
			$sql->bindValue(":nome", $nome);
			$sql->bindValue(":email", $email);
			$sql->bindValue(":senha", md5($senha));
			$sql->bindValue(":telefone", $telefone);
			$sql->execute();

			return true;

		} else {
			return false;
		}

	}

	public function login($email, $senha) {
		$sql = $this->db->prepare("SELECT id FROM usuarios WHERE email = :email AND senha = :senha");
		$sql->bindValue(":email", $email);
		$sql->bindValue(":senha", md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			//echo "Vai setar o id";
			return $dado['id'];
		} else {
			return false;
		}

	}

	public function getNomeUsuario($id)
	{
		$sql = $this->db->prepare("SELECT * FROM usuarios WHERE id =:id ");
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$dado = $sql->fetch();
			//print_r($dado);
			return $dado['nome'];;
		} else {
			return false;
		}
	}














}
?>