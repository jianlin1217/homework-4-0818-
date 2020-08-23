<?php
    //$_SESSION['memberPass']為資料庫中密碼
    //$_SESSION['memberName']為資料庫中使用者名稱
    //$_SESSION['loginUserName']存現在登入的使用者名稱
    session_start();
    $who = "Guest";
    $goWeb= "login.php";
    $loginState="登入";
    // $_SESSION['loginUserName']="Guest";
    
    if(isset($_GET['btnHome']))
    {
        echo("123456789");
    }
    //測試SESSION有沒有抓到值
    if(isset($_SESSION['loginUserName'])&&$_SESSION['loginUserName']!=NULL)
    {
        global $who;
        $who = $_SESSION['loginUserName'];
        // echo  $_SESSION['loginUserName']."1234";
        $loginState="登出";
        // echo $who;
        // echo "123 + ".$_SESSION['loginUserName'];
    }
    else
    {
        // echo "1230";
        $who="Guest";
    }

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lab - index</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 首頁</font></td>
  </tr>
  <tr>
    <td align="center" valign="baseline"><a id="loginInOut" href=<?=$goWeb?>><?=$loginState?></a> | <a href="secret.php">會員專用頁</a></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC">&nbsp;Hello!! <?=$who?></td>
  </tr>
</table>

<script>
    $("#loginInOut").on("click",function(){
      // alert("!!!!");
        if(<?php echo  $who;?>!="Guest")
        {
          
          alert("登出");
          
        }
        else
        {

        }

    });
</script>
</body>
</html>