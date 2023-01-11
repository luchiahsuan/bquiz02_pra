<?php
include_once 'base.php';

echo $User->count(['acc' => $_POST['acc'], 'pw' => $POST['pw']]);
if ($chk > 0) {
    echo $chk;
    $_SESSION['login'] = $_POST['acc'];
} else {
    echo $chk;
}
