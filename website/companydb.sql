create database record;
use record;

create table record_data (
	Name varchar(120) NOT NULL,
    orderId varchar(40),
    quantity int(10),
    phone_no int(10),
	address varchar(240)
);
