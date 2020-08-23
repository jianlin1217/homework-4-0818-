# homework0818

需要使用ＳＥＳＳＩＯＮ

設定成ＭＶＣ架構(加分)
# 測試帳號:Duo    Jian-lin
# 測試密碼:Chungyo0818  Chungyo0727

# 1.加入hello 

# 2.有guest 和登入者的切換

# 3.創一個資料庫loginSys和兩筆資料，並確保可以連上資料庫


CREATE DATABASE loginSys DEFAULT CHARACTER SET UTF8;

USE loginSys;

CREATE TABLE userInfo 
(
  memberId int PRIMARY key AUTO_INCREMENT,
  uName varchar(30) default "null",
  uPassword varchar(16) NOT null
    
);

insert into userInfo 
(uName,uPassword)
VALUES
("Duo","Chungyo0818"),("Jian-lin","Chungyo0727");

#4.從資料庫撈資料並存放到SESSION中

先require   connectdb.php

使用連好的$link  透過  mysqli_query和mymysqli_fetch_assoc函式來讀取資料庫的值


# 4.將登入所輸入的資料和資料庫的帳戶作比對，若有相符則輸可以登入

將資料庫讀到的值存到陣列之中
使用者輸入的內容和陣列做比對，若有相符則通過  沒有就停留該頁面並顯示訊息

# 5.將密碼也加入比對的選項之中

把step4的東西改放到SESSION中  方便其他頁面使用
將名稱以及密碼做為比對，兩者皆相符者可以登入
並且在首頁中顯示使用者的名稱

# 6.更改secret.php，判斷是不是有會員進到這個網頁

用前面步驟的SESSION做資料的讀取，若是當前的使用者並非為GUEST的話
則顯示歡迎進去會員設定網頁



