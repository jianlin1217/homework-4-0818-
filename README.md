# homework0818

需要使用ＳＥＳＳＩＯＮ

設定成ＭＶＣ架構(加分)


1.加入hello 

2.有guest 和登入者的切換

3.創一個資料庫loginSys和兩筆資料，並確保可以連上資料庫


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
