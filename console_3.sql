create table baoming
(
	id int auto_increment
		primary key,
	name char(10) null,
	age int(2) null,
	sex char(2) null,
	grade tinyint(1) null,
	major char(50) null,
	phone char(15) null,
	regdate date null
)
;

INSERT INTO crudtest.baoming (name, age, sex, grade, major, phone, regdate) VALUES ('用户名	', 11, '女', 1, '专业', null, '2017-10-25');
INSERT INTO crudtest.baoming (name, age, sex, grade, major, phone, regdate) VALUES ('李晓明', 23, '男', 1, '机械工程', null, '2017-10-25');
INSERT INTO crudtest.baoming (name, age, sex, grade, major, phone, regdate) VALUES ('李晓明', 23, '男', 1, '机械工程', null, '2017-10-25');
INSERT INTO crudtest.baoming (name, age, sex, grade, major, phone, regdate) VALUES ('123', 23, '男', 2, '打算的', null, '2017-10-25');