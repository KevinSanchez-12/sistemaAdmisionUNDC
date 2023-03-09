<?php 
    session_start();
    unset($_SESSION['id']);
    unset($_SESSION['correo']);
    unset($_SESSION['password']);
    session_destroy();
    echo "
    <script> 
        location.href= 'index';
    </script>
    ";
    exit;
?>
