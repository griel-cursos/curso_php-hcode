<?php


$Hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//Inicio: Diretor Comercial
			array(
				'nome_cargo'=>'Diretor Comercial',
				'subordinados'=>array(
					//Inicio: Gerente de Vendas
					array(
						'nome_cargo'=>'Gerente de Vendas'
					)
					//Término: Gerente de Vendas
				)
			),
			//Término: Diretor Comercial
			//Inicio: Diretor Financeiro
			array(
				'nome_cargo'=>'Diretor Financeiro',
				'subordinados'=>array(
					//Início: Gerente de Contas a Pagar
					array(
						'nome_cargo'=>'Gerente de Contas a Pagar',
						'subordinados'=>array(
							//Inicio: Supervisor de Pagamentos
							array(
								'nome_cargo'=>'Supervisor de Pagamentos'
							)
							//Término: Supervisor de Pagamentos
						)
					),
					//Término: Gerente de Contas a Pagar
					//Inicio: Gerente de Compras
					array(
						'nome_cargo'=>'Supervisor de Compras',
						'subordinados'=>array(
							//Início: Supervisor de Suprimentos
							array(
								'nome_cargo'=>'Supervisor de Suprimentos',
								'subordinados'=>array(
									array(
										'nome_cargo'=>'Funcionario'
									)
								)
							)
							//Término: Supervisor de Suprimentos
						)
						
					)
					//Término: Gerente de Compras
				)
			),
			//Término: Diretor Financeiro
			
		)
	)
);


function Exibe($Cargos) {
//Função para exibir o parâmetro $Cargos
	
	$html = '<ul>';
	//Crio uma HTML chamando a tag UL
	
	foreach ($Cargos as $Cargo) {
	//Para cada CARGOS eu crio o indice CARGO
		
		$html .= '<li>';
		//Crio uma HTML chamadando a tag LI
		
		$html .= $Cargo['nome_cargo'];
		//Concateno chamando no Array um índice do CARGO
		
		if (isset($Cargo['subordinados']) && count($Cargo['subordinados']) > 0) {
		//Se CARGO tiver SUBORDINADOS e se a contagem for maior que ZERO	
			
			$html .= exibe($Cargo['subordinados']);
			//Concatena chamando no Array um índice de SUBORDINADOS
		}
		
		$html .= '</li>';
		//Concateno fechando a tag LI
	}
	
	$html .= '</ul>';
	//Concateno fechando a tag UL
	
	return $html;
	//Retorno tudo isso em uma variavel de função $HTML
	
}


echo Exibe($Hierarquia);


?>