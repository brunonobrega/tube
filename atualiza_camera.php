<?php
session_start();
require_once("includes/conexao.inc");
$logon = new AUSU();
$logon->Logado();

require_once("includes/cad_cam.inc");
$alt_cam = new Acam();

$idCamForm = $_POST ['IdCam'];
$idLojaForm = $_POST ['IdLoja'];
$nomeCamForm = $_POST ['NomeCamera'];
$visaoCamForm = $_POST ['VisaoCamera'];
$urlCamForm = $_POST ['Url'];


$alt_cam->Atualizar($idCamForm, $idLojaForm, $nomeCamForm, $visaoCamForm, $urlCamForm);

echo "<script>alert('Atualização efetuada com sucesso!');</script>";
echo "<script>location.href='listar_lj_altcam.php';</script>";

?>