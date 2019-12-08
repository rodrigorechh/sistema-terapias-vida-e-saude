
<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require 'conexao.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$id  = (isset($_POST['id'])) ? $_POST['id'] : '';
		$tag  = (isset($_POST['tag'])) ? $_POST['tag'] : '';
		$descricao  = (isset($_POST['descricao'])) ? $_POST['descricao'] : '';
		$data_pagamento  = (isset($_POST['data_pagamento'])) ? $_POST['data_pagamento'] : '';
		$valor = (isset($_POST['valor'])) ? $_POST['valor'] : '';
		$fornecedor = (isset($_POST['fornecedor'])) ? $_POST['fornecedor'] : '';

		// Valida os dados recebidos
		$mensagem = '';
		if ($acao == 'editar' && $id == ''):
		    $mensagem .= '<li>Id do registros desconhecido.</li>';
	    endif;

	    // Se for ação diferente de excluir valida os dados obrigatórios
	    if ($acao != 'excluir'):

		    if ($data_pagamento == ''): 		
				$mensagem .= '<li>Favor preencher a Data de Pagamento.</li>';
			endif;

			if ($descricao == ''): 		
				$mensagem .= '<li>Favor Informar a Descrição.</li>';
			endif;

			if ($valor == ''): 		
				$mensagem .= '<li>Favor Informar O Valor.</li>';
			endif;

			if ($mensagem != ''):
				$mensagem = '<ul>' . $mensagem . '</ul>';
				echo "<div class='alert alert-danger' role='alert'>".$mensagem."</div> ";
				exit;
			endif;

		endif;



		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$sql = 'INSERT INTO gastos (tag, descricao, valor, fornecedor, data)
					VALUES(:tag, :descricao, :valor, :fornecedor, :data_pagamento)';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':tag', $tag);
			$stm->bindValue(':descricao', $descricao);
			$stm->bindValue(':valor', $valor);
			$stm->bindValue(':fornecedor', $fornecedor);
			$stm->bindValue(':data_pagamento', $data_pagamento);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=gastosMensais.php'>";
		endif;


		// Verifica se foi solicitada a edição de dados
		if ($acao == 'editar'):

			$sql = 'UPDATE gastos SET tag=:tag, descricao=:descricao, valor=:valor, fornecedor=:fornecedor, data=:data_pagamento';
			$sql .= 'WHERE cpf=:cpf';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':tag', $tag);
			$stm->bindValue(':descricao', $descricao);
			$stm->bindValue(':valor', $valor);
			$stm->bindValue(':fornecedor', $fornecedor);
			$stm->bindValue(':data_pagamento', $data_pagamento);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=gastosMensais.php'>";
		endif;


		// Verifica se foi solicitada a exclusão dos dados
		if ($acao == 'excluir'):

			// Exclui o registro do banco de dados
			$sql = 'DELETE FROM gastos WHERE id = :id';
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':id', $id);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro excluído com sucesso, aguarde você está sendo redirecionado ...</div> ";

		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao excluir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=gastosMensais.php'>";
		endif;
		?>

	</div>
</body>
</html>