CREATE DATABASE addabase;
CREATE USER 'addauser'@'localhost' IDENTIFIED BY 'addapass';
GRANT ALL PRIVILEGES ON addabase.* TO 'addauser'@'localhost';
FLUSH PRIVILEGES;