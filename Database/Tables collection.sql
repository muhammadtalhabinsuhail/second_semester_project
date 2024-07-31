CREATE DATABASE srs_company;
USE srs_company;

CREATE TABLE electric_products(product_id INT AUTO_INCREMENT PRIMARY KEY, 
                              product_name VARCHAR(255), 
                              product_desc VARCHAR(255),
                              product_price DECIMAL(10,0),
                              pr_features VARCHAR(255),
                              pr_usage VARCHAR(255),
                              warranty VARCHAR(255));




CREATE TABLE order_manager(id INT AUTO_INCREMENT PRIMARY KEY,
                           Full_Name VARCHAR(255),
                           Phone_No INT,
                           Address VARCHAR(255),
                           Pay_Mode VARCHAR(255));
                           
-- table for reports

CREATE TABLE reports(report_id INT,
                     report_name VARCHAR(255),
                     report_desc VARCHAR(255));
                     
-- table for user orders

CREATE TABLE user_order(id INT AUTO_INCREMENT PRIMARY KEY,
						Order_Id INT,
                        Item_Name VARCHAR(255),
                        Price INT,
                        Quantity INT);
                        
-- table for users
CREATE TABLE users(srno INT AUTO_INCREMENT PRIMARY KEY,
                   username VARCHAR(255),
                   passwords VARCHAR(255),
                   dt INT DEFAULT CURRENT_TIMESTAMP());