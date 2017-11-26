-- before user running migrations
CREATE USER 'FitTaste'@'localhost' IDENTIFIED BY 'chilapalex';
-- create db before running migrations
create database FitTasteDB;
grant all privileges on FitTasteDB.* TO 'FitTaste'@'localhost';
