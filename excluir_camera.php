<?php
session_start();
require_once("includes/conexao.inc");
$logon = new AUSU();
$logon->Logado();

require_once("includes/cad_cam.inc");
$del_cam = new Acam();

$idCamForm = $_GET ['cod'];

$del_cam->Excluir($idCamForm);

echo "<script>alert('Camera deleted!');</script>";
echo "<script>location.href='listar_lj_delcam.php';</script>";

?>