<?php include_once("../../Model/item.php");
	  include_once("../../Persistence/Connection.php");
	  include_once("../../Persistence/itemDAO.php");

    $umId = $_GET['IdItem'];

					    $conexao = new Connection("localhost","root","","jg_confeccoes");
					  	$conexao->conectar();

					    $itemDAO = new itemDAO();
					    $itemDAO->excluirItem($umId,$conexao->getLink());


							header('Location: ../../View/PerfilAdm.php');
?>