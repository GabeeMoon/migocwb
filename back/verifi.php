<?php
    function verifi($path)
    {
        if (!$_SESSION['id']) {
            header('Location: '.$path);
            exit;
        }
    }
?>
