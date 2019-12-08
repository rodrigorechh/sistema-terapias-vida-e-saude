
<body>
	<div class='container box-mensagem-crud'>
		<?php 
		require 'conexao.php';

		// Atribui uma conexão PDO
		$conexao = conexao::getInstance();

		// Recebe os dados enviados pela submissão
		$acao  = (isset($_POST['acao'])) ? $_POST['acao'] : '';
		$nome  = (isset($_POST['nome'])) ? $_POST['nome'] : '';
		$genero  = (isset($_POST['genero'])) ? $_POST['genero'] : '';
		$data_nascimento  = (isset($_POST['data_nascimento'])) ? $_POST['data_nascimento'] : '';
		$cpf   = (isset($_POST['cpf'])) ? str_replace(array('.','-'), '', $_POST['cpf']): '';
		$email = (isset($_POST['email'])) ? $_POST['email'] : '';
		$foto_atual		  = (isset($_POST['foto_atual'])) ? $_POST['foto_atual'] : '';
		$telefone  		  = (isset($_POST['telefone'])) ? str_replace(array('-', ' '), '', $_POST['telefone']) : '';
		$celular   		  = (isset($_POST['celular'])) ? str_replace(array('-', ' '), '', $_POST['celular']) : '';


		// Valida os dados recebidos
		$mensagem = '';
		if ($acao == 'editar' && $cpf == ''):
		    $mensagem .= '<li>CPF do registros desconhecido.</li>';
	    endif;

	    // Se for ação diferente de excluir valida os dados obrigatórios
	    if ($acao != 'excluir'):
			if ($nome == '' || strlen($nome) < 3):
				$mensagem .= '<li>Favor preencher o Nome.</li>';
		    endif;

		    if ($data_nascimento == ''): 		
				$mensagem .= '<li>Favor preencher a Data de Nascimento.</li>';
			endif;

			if ($genero == ''): 		
				$mensagem .= '<li>Favor Informar o Genero.</li>';
			endif;

			if ($cpf == ''):
			   $mensagem .= '<li>Favor preencher o CPF.</li>';
		    elseif(strlen($cpf) < 11):
				  $mensagem .= '<li>Formato do CPF inválido.</li>';
		    endif;

			if ($email == ''):
				$mensagem .= '<li>Favor preencher o E-mail.</li>';
			elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)):
				  $mensagem .= '<li>Formato do E-mail inválido.</li>';
			endif;

			if ($telefone == ''): 
				$mensagem .= '<li>Favor preencher o Telefone.</li>';
			elseif(strlen($telefone) < 10):
				  $mensagem .= '<li>Formato do Telefone inválido.</li>';
		    endif;

			if ($celular == ''):
				$mensagem .= '<li>Favor preencher o Celular.</li>';
			elseif(strlen($celular) < 11):
				  $mensagem .= '<li>Formato do Celular inválido.</li>';
			endif;

			if ($mensagem != ''):
				$mensagem = '<ul>' . $mensagem . '</ul>';
				echo "<div class='alert alert-danger' role='alert'>".$mensagem."</div> ";
				exit;
			endif;

		endif;



		// Verifica se foi solicitada a inclusão de dados
		if ($acao == 'incluir'):

			$nome_foto = 'padrao.jpg';
			if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0):  

				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome_foto)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;  
			endif;

			$sql = 'INSERT INTO tab_clientes (nome, genero, data_nascimento, email, cpf, telefone, celular, foto)
							   VALUES(:nome, :genero, :data_nascimento, :email, :cpf, :telefone, :celular, :foto)';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nome', $nome);
			$stm->bindValue(':genero', $genero);
			$stm->bindValue(':data_nascimento', $data_nascimento);
			$stm->bindValue(':email', $email);
			$stm->bindValue(':cpf', $cpf);
			$stm->bindValue(':telefone', $telefone);
			$stm->bindValue(':celular', $celular);
			$stm->bindValue(':foto', $nome_foto);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro inserido com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao inserir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=clientes.php'>";
		endif;


		// Verifica se foi solicitada a edição de dados
		if ($acao == 'editar'):
			
			if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0): 

				// Verifica se a foto é diferente da padrão, se verdadeiro exclui a foto antiga da pasta
				if ($foto_atual <> 'padrao.jpg'):
					unlink("fotos/" . $foto_atual);
				endif;

				$extensoes_aceitas = array('bmp' ,'png', 'svg', 'jpeg', 'jpg');
			    $extensao = strtolower(end(explode('.', $_FILES['foto']['name'])));

			     // Validamos se a extensão do arquivo é aceita
			    if (array_search($extensao, $extensoes_aceitas) === false):
			       echo "<h1>Extensão Inválida!</h1>";
			       exit;
			    endif;
 
			     // Verifica se o upload foi enviado via POST   
			     if(is_uploaded_file($_FILES['foto']['tmp_name'])):  
			             
			          // Verifica se o diretório de destino existe, senão existir cria o diretório  
			          if(!file_exists("fotos")):  
			               mkdir("fotos");  
			          endif;  
			  
			          // Monta o caminho de destino com o nome do arquivo  
			          $nome_foto = date('dmY') . '_' . $_FILES['foto']['name'];  
			            
			          // Essa função move_uploaded_file() copia e verifica se o arquivo enviado foi copiado com sucesso para o destino  
			          if (!move_uploaded_file($_FILES['foto']['tmp_name'], 'fotos/'.$nome_foto)):  
			               echo "Houve um erro ao gravar arquivo na pasta de destino!";  
			          endif;  
			     endif;
			else:

			 	$nome_foto = $foto_atual;

			endif;

			$sql = 'UPDATE tab_clientes SET nome=:nome, email=:email, cpf=:cpf, telefone=:telefone, celular=:celular, foto=:foto ';
			$sql .= 'WHERE cpf=:cpf';

			$stm = $conexao->prepare($sql);
			$stm->bindValue(':nome', $nome);
			$stm->bindValue(':email', $email);
			$stm->bindValue(':cpf', $cpf);
			$stm->bindValue(':telefone', $telefone);
			$stm->bindValue(':celular', $celular);
			$stm->bindValue(':foto', $nome_foto);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro editado com sucesso, aguarde você está sendo redirecionado ...</div> ";
		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao editar registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=clientes.php'>";
		endif;


		// Verifica se foi solicitada a exclusão dos dados
		if ($acao == 'excluir'):

			// Captura o nome da foto para excluir da pasta
			$sql = "SELECT foto FROM tab_clientes WHERE cpf = :cpf AND foto <> 'padrao.jpg'";
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':cpf', $cpf);
			$stm->execute();
			$cliente = $stm->fetch(PDO::FETCH_OBJ);

			if (!empty($cliente) && file_exists('fotos/'.$cliente->foto)):
				unlink("fotos/" . $cliente->foto);
			endif;

			// Exclui o registro do banco de dados
			$sql = 'DELETE FROM tab_clientes WHERE cpf = :cpf';
			$stm = $conexao->prepare($sql);
			$stm->bindValue(':cpf', $cpf);
			$retorno = $stm->execute();

			if ($retorno):
				echo "<div class='alert alert-success' role='alert'>Registro excluído com sucesso, aguarde você está sendo redirecionado ...</div> ";

		    else:
		    	echo "<div class='alert alert-danger' role='alert'>Erro ao excluir registro!</div> ";
			endif;

			echo "<meta http-equiv=refresh content='3;URL=clientes.php'>";
		endif;
		?>

	</div>
</body>
</html>