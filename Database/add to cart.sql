create database company;
use company;

CREATE TABLE reports (
    report_id INT PRIMARY KEY,
    report_name VARCHAR(255),
    report_desc VARCHAR(255)
);
CREATE TABLE order_manager(Full_Name TEXT, Phone_No INT, Address TEXT, Pay_Mode TEXT);

CREATE TABLE user_orders(Order_Id INT, Item_Name TEXT, Price INT, Quantity INT);

CREATE TABLE electric_products (
    product_id INT AUTO_INCREMENT PRIMARY KEY,
    img_drc VARCHAR(255),
    product_name VARCHAR(255),
    product_desc VARCHAR(255),
    product_price DECIMAL(10, 2),
    pr_features VARCHAR(255),
    pr_usage VARCHAR(255),
    warranty VARCHAR(255)
);

CREATE TABLE user_order (
   id INT AUTO_INCREMENT PRIMARY KEY,
   Order_Id INT,
   Item_Name VARCHAR(255),
   Price INT,
   Quantity INT
   );


CREATE TABLE users (
   srno INT AUTO_INCREMENT PRIMARY KEY,
   username VARCHAR(255),
   passwords VARCHAR(255),
   dt TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

