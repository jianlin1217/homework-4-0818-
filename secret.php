<?php
    session_start();
    // require("connectdb.php");
    $syscomment="This page for member only.";

    if($_SESSION['loginUserName']!="Guest")
    {
      $syscomment="Hello!". $_SESSION['loginUserName']."<br> Welcome to member Setting";
    }
    // $UNames=array();
    // $setresult= mysqli_query($link,"set names UTF8");
    // $askName=<<<End
    // select uName from userinfo;
    // End;
    // $result= mysqli_query($link,$askName);
    // while($row=mysqli_fetch_assoc($result))
    // {
    //     // var_dump($row);
    //     array_push($UNames,$row['uName']);
    //     // echo "$UNames <br>";
    // }
    // var_dump($UNames);
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Lag - Member Page</title>
</head>
<body>

<table width="300" border="0" align="center" cellpadding="5" cellspacing="0" bgcolor="#F2F2F2">
  <tr>
    <td align="center" bgcolor="#CCCCCC"><font color="#FFFFFF">會員系統 － 會員專用</font></td>
  </tr>
  <tr>
    <td align="center" valign="baseline"><?=$syscomment?></td>
  </tr>
  <tr>
    <td align="center" bgcolor="#CCCCCC"><a href="index.php">回首頁</a></td>
  </tr>
</table>


</body>
</html>