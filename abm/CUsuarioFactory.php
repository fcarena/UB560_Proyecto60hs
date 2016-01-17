<?php
include ("CUsuario.php");

class CUsuarioFactory
{
	public function __construct()
	{

	}

	public function ConstruirUsuario($resultadoSQL)
	{
		$temp = new CUsuario("", "");
		$temp = CUsuario::ConNombrePila($resultadoSQL[$temp->GetColUsuario()], $resultadoSQL[$temp->GetColPassword()], $resultadoSQL[$temp->GetColNombrePila()]);
		$temp->SetPerfilId($resultadoSQL[$temp->GetColPerfil()]);
		return $temp;
	}
}
?>