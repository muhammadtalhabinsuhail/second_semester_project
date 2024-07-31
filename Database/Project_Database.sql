CREATE DATABASE Project_Database;
USE Project_Database;

CREATE TABLE sign_up(Serialnumber INT PRIMARY KEY AUTO_INCREMENT, Username VARCHAR(20),Userid VARCHAR(20),Password VARCHAR(20),Phone VARCHAR(20), Registration_time timestamp) ;
SELECT * FROM sign_up;

CREATE TABLE test_type (Id INT auto_increment primary KEY,Test_Id varchar(12),Test_Name MEDIUMTEXT);


-- -----------------------------------------------------------------------------------------------------------------------------------------------------
CREATE TABLE new_products_table1(Product_Serial INT AUTO_INCREMENT PRIMARY KEY ,Product_Id VARCHAR(10) UNIQUE , Product_Name VARCHAR(30), Product_Category VARCHAR(30), Product_Price INT, Product_Registration DATE,
 Product_Status VARCHAR(20), Product_Description MEDIUMTEXT);
 
SELECT * FROM new_products_table1;

-- SELECT * FROM new_products_table1 WHERE Product_Status='Just Manufactured' OR Product_Status='In Process';

CREATE TABLE products_sender_table2(Product_Id VARCHAR(10) ,Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY , Product_Name VARCHAR(30), Product_Category VARCHAR(30), Product_Price INT, Product_Registration DATE,Product_Sending_Test_Date DATE,
 Product_Status VARCHAR(20),Product_Test_Type VARCHAR(50), Product_Description MEDIUMTEXT);
 SELECT * FROM products_sender_table2;
 
 


 

CREATE TABLE products_decline_table3(Product_Id VARCHAR(10) UNIQUE PRIMARY KEY,Product_Decline_Reason MEDIUMTEXT,Product_Decline_Test_Date DATE);



 SELECT * FROM products_decline_table3;
 
 CREATE TABLE successfully_tested_table4(Product_Id VARCHAR(10) UNIQUE PRIMARY KEY ,Product_Test_Id VARCHAR(20),Product_Name VARCHAR(20),Product_Category VARCHAR(30),Product_Price INT,Product_Registration DATE,Product_Sending_Test_Date DATE,
 Product_Report_Sending_Test_Date DATE,Product_Status VARCHAR(20),Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
 SELECT * FROM successfully_tested_table4;

 
 























-- -----------------------------------------------------------------------------------------------------------------------------------------------------

CREATE TABLE sign_up(Serialnumber INT PRIMARY KEY AUTO_INCREMENT, Username VARCHAR(20),Userid VARCHAR(20),Password VARCHAR(20),Phone VARCHAR(20), Registration_time timestamp) ;
SELECT * FROM sign_up;
CREATE TABLE test_type (Id INT auto_increment primary KEY,Test_Id varchar(12),Test_Name MEDIUMTEXT);



CREATE TABLE in_process_table1 (Product_Id VARCHAR(10) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Registration_Date DATE,Product_Description MEDIUMTEXT);
CREATE TABLE manufactured_products_table2 (Product_Id VARCHAR(10) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Manufactured_Date DATE,Product_Description MEDIUMTEXT);
CREATE TABLE products_sender_table3 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Sending_Test_Date DATE,Product_Status VARCHAR(20),Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE pending_testreceiving_table4 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Receiving_Test_Date DATE,Product_Status VARCHAR(20),Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE decline_reason_table5 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) ,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Decline_Test_Date DATE,Product_Status VARCHAR(20),Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT,Decline_Reason mediumtext);
CREATE TABLE decline_reasoncopy_table6 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Decline_Test_Date DATE,Product_Status VARCHAR(20),Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT,Decline_Reason mediumtext);
CREATE TABLE products_accepted_table7 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) ,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Accepted_Test_Date DATE,Product_Status VARCHAR(20),Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE product_acceptedcopy_table8 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Accepted_Test_Date DATE,Product_Status VARCHAR(20),Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE products_undertesting_table9 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Undertesting_Test_Date DATE,Product_Status VARCHAR(20),Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE tested_failed_table10 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) ,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Tested_Failed_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE reprocess_failedproducts_table11 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Receive_Failed_Reprocess DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE remanufactured_faliedproducts_table12 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Remanufactured_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
-- cpri activities
CREATE TABLE tested_successfully_table13 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) ,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Successfully_Tested_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);

CREATE TABLE failed_copy_table14 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Tested_Failed_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE success_copy_table15 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Successfully_Tested_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE CPRI_receiveproducts_table16 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Received_CPRI_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE CPRI_acceptproducts_table17 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Accepted_Test_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE CPRI_acceptfortest_table18 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Under_Test_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);

CREATE TABLE CPRI_approvefortest_table19 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) ,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Successfully_Tested_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE CPRI_approvefortestcopy_table20 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY ,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Successfully_Tested_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE CPRI_failedfortest_table21 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) ,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Tested_Failed_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE CPRI_failedfortestcopy_table22 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Tested_Failed_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE ApprovedProducts_Launch_table23 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Launch_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);
CREATE TABLE CPRI_demandfortest_table24 (Product_Id VARCHAR(10),Product_Test_Id VARCHAR(20) UNIQUE PRIMARY KEY,Product_Name VARCHAR(30),Product_Category VARCHAR(30),Product_Price INT,Product_Status VARCHAR(20),Demand_Date DATE,Product_Test_Type  VARCHAR(50),Product_Description MEDIUMTEXT);



-- ------------------------------------------------------
-- CREATE TABLE (,,,,,,,,);


-- drop table  tested_successfully_table13






