<?php
session_start();
// session_unset();
// session_destroy();


$con = new mysqli("localhost", "root", "", "db_prediksi");
if (isset($_GET['logout'])) {
	session_unset();
	header("Location:index.php");
} else if (isset($_SESSION['username'])) {

	if ($_SESSION['role'] == "1") {
		if ((isset($_SESSION['username']) && isset($_GET['inputdata']))) {
			require('conttroler/dosen/inputdata.php');
		} else if ((isset($_SESSION['username']) && isset($_GET['doInputMhs']))) {
			require_once 'conttroler/dosen/InputMhs.php';
		} else if ((isset($_SESSION['username']) && isset($_GET['editMhs']))) {
			require_once 'conttroler/dosen/editMhs.php';
		} else if ((isset($_SESSION['username']) && isset($_GET['doUpdateMhs']))) {
			require_once 'conttroler/dosen/UpdateMhs.php';
		} else if ((isset($_SESSION['username']) && isset($_GET['hapusMhs']))) {
			require_once 'conttroler/dosen/HapusMhs.php';
		} else if ((isset($_SESSION['username']) && isset($_GET['datamhs']))) {
			require('conttroler/dosen/datamhs.php');
		} else if ((isset($_SESSION['username']) && isset($_GET['export']) && isset($_GET['excel']) && isset($_GET['mhs'])  )) {
			require('conttroler/dosen/excelmhs.php');
		} else if ((isset($_SESSION['username']) && isset($_GET['training']))) {
			require('conttroler/dosen/training.php');
		} else if (isset($_SESSION['username']) && isset($_GET['testing'])) {
			require('conttroler/dosen/testing.php');
		} else if (isset($_SESSION['username'])) {
			require('conttroler/dosen/dashboard.php');
		}
	} else if ($_SESSION['role'] == "2") {
		if ((isset($_SESSION['username']) && isset($_GET['prediksi']))) {
			require('conttroler/mahasiswa/prediksi.php');
		} else if (isset($_SESSION['username']) && isset($_GET['perencanaan'])) {
			require('conttroler/mahasiswa/perencanaan.php');
		} else if (isset($_SESSION['username'])) {
			require('conttroler/mahasiswa/dashboard.php');
		}
	} else if ($_SESSION['role'] == "3") {
		if ((isset($_SESSION['username']) && isset($_GET['prediksi']))) {
			require('conttroler/admin/dashboard.php');
		} else if (isset($_SESSION['username']) && isset($_GET['perencanaan'])) {
			require('conttroler/admin/dashboard.php');
		} else if (isset($_SESSION['username'])) {
			require('conttroler/admin/dashboard.php');
		}
	}
} else if (isset($_GET['lupa_password'])) {
	require('conttroler/auth/lupa_password.php');
} else if (isset($_GET['register'])) {
	require('conttroler/auth/register.php');
} else {
	require('conttroler/auth/login.php');
}
