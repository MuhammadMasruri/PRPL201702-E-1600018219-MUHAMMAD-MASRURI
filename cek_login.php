 <?php
    
    ob_start();
    session_start();
    ob_end_clean();
    
    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="masruri" AND $password=="12345")
    {
        $_SESSION["username"]=$username;
        header("location:index.html");
    }else{
        header("location:form_login.php?login_error");
    }
?>