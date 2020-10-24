<?php
// 檢查是否有帶 Token 
$resetToken = $route->getParameter(2);
/**
 * 載入頁面
 */
//define page title
$title = 'Reset';
include('view/header/default.php'); // 載入共用的頁首
include('view/body/reset.php');     // 載入重置密碼的頁面
include('view/footer/default.php'); // 載入共用的頁尾
