<?php
    session_start();
    require("connectdb.php");
    $syscomment="This page for member only.";
    $identifyName= array();
    $identifyPass= array();

    $_SESSION['memberPass']=array();        
    $_SESSION['memberName']=array();
    $setresult= mysqli_query($link,"set names UTF8");
    $askName=<<<End
    select * from userinfo;
    End;
    $result= mysqli_query($link,$askName);
    
    if(isset($_POST['btnHome']))
    {
        echo("123456789");
        header("Location: index.php");
    }
    //將使用者名稱以及密碼存放到SESSION當中
    while($row=mysqli_fetch_assoc($result))
    {
      array_push($_SESSION['memberPass'],$row['uPassword']);
      array_push($_SESSION['memberName'],$row['uName']);
    }
    $identifyPass=($_SESSION['memberPass']);
    $identifyName=($_SESSION['memberName']);
    //以下註解測試名稱密碼是否正確讀取
    // for($j=0;$j<count($identifyName);$j++)
    // {
    //   echo "$identifyName[$j] + $identifyPass[$j]";
    // }

    //接收使用者輸入的值並且判斷是不是會員
    if(isset($_POST['btnOK']))
    {
        $uName=$_POST['txtUserName'];
        $uPass=$_POST['txtPassword'];

       for($i=0;$i<count($identifyName);$i++)
       {
         if(($uName==$identifyName[$i])&&($uPass==$identifyPass{$i}))
         {
            // echo $_SESSION['loginUserName'];
            $_SESSION['loginUserName']=$uName;
            header("location: index.php");
         }
       }
      echo "抱歉!您輸入可能有誤或還沒成為我們的會員!";
        
    }
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Lab - Login</title>
</head>
<body>
<form id="form1" name="form1" method="post" action="login.php">
  <table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 - 登入</font></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">帳號</td>
      <td valign="baseline"><input type="text" name="txtUserName" id="txtUserName" /></td>
    </tr>
    <tr>
      <td width="80" align="center" valign="baseline">密碼</td>
      <td valign="baseline"><input type="password" name="txtPassword" id="txtPassword" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#CCCCCC">
      <input type="submit" name="btnOK" id="btnOK" value="登入" />
      <input type="reset" name="btnReset" id="btnReset" value="重設" />
      <input type="submit" name="btnHome" id="btnHome" value="回首頁" />
      </td>
    </tr>
  </table>
</form>
</body>
</html>