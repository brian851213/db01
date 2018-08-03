<?php
    require_once "sql.php";
    
    session_start();
    
    if(!isset($_SESSION["visitor"]))
    {
        mysqli_query($link, "update visit set count = count+1"); 
        $_SESSION["visitor"] = "1"; 
        header("location:index.php");  
    }
    
    if(isset($_GET["do"]))
    {
        if($_GET["do"] == "check")
        {
            $result = mysqli_query($link, "select * from admin where acc='".$_POST["acc"]."' && pass = '".$_POST["ps"]."'");
            $numb = mysqli_num_rows($result);
            if($numb == 1)
            {
                while($row = mysqli_fetch_array($result))
                {
                    $_SESSION["user"] = $row["type"];
                }
                
                header("location:admin.php");
            }    
            else{  
            ?>
            <script>
            alert("帳號或密碼輸入錯誤");
            document.location.href="login.php";
            </script>
            <?php
            }
        } 
        elseif($_GET["do"] == "logout")
        {
            unset($_SESSION["user"]);
        }
        
    }
    
    if(!isset($_SESSION["user"]))
    {
        $login_text = "管理登入";
        $login_url = "login.php";
    }
    else
    {
        $login_text = "回後台管理";
        $login_url = "admin.php";
    }
    
    
    
?>