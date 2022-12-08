<?php
session_start();
require_once("includes/conexao.inc");
$logon = new AUSU();
$logon->Logado();

require_once("includes/cad_cam.inc");
$cad_cam = new Acam();

$IdLojaForm = $_POST ['IdLoja'];
$NomeCamForm = $_POST ['NomeCamera'];
$VisaoCamForm = $_POST ['VisaoCamera'];
$UrlCamForm = $_POST ['Url'];


$cad_cam->Cadastrar($IdLojaForm, $NomeCamForm, $VisaoCamForm, $UrlCamForm);

echo "<script>alert('Cadastro efeutado com sucesso!');</script>";
echo "<script>location.href='listar_lj_novacam.php';</script>";

?>
