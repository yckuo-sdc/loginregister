<?php
if(UserVeridator::isLogin(isset($_SESSION['username']) ? $_SESSION['username'] : '')) {
    //define page title
    $title = 'Home';
	include('view/header/default.php'); // 載入共用的頁首
	include('view/body/home.php');     // 載入登入用的頁面
	include('view/footer/default.php'); // 載入共用的頁尾
}else{
	header('Location: logout');
}
