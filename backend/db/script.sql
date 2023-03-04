drop database ona;
create database ona;
use ona;


DROP TABLE IF EXISTS PROJECT;
DROP TABLE IF EXISTS TEACHER_QUALIFICATION;
DROP TABLE IF EXISTS PROJECT_TEACHER;
DROP TABLE IF EXISTS CHARGE_RATE;
DROP TABLE IF EXISTS TEACHER;
DROP TABLE IF EXISTS ACADEMIC_GROUP_MEMBER;
DROP TABLE IF EXISTS MEMBER;
DROP TABLE IF EXISTS WEEKDAY;
DROP TABLE IF EXISTS TEACHER_STATE;
DROP TABLE IF EXISTS SEX;
DROP TABLE IF EXISTS PROJECT_STATE;
DROP TABLE IF EXISTS NEWNESS;
DROP TABLE IF EXISTS TYPES;
DROP TABLE IF EXISTS TEACHING_MATERIAL;
DROP TABLE IF EXISTS STATE;
DROP TABLE IF EXISTS ROOM;
DROP TABLE IF EXISTS ROLE;
DROP TABLE IF EXISTS QUALIFICATION;
DROP TABLE IF EXISTS CLIENT;
DROP TABLE IF EXISTS ACADEMIC_GROUP;

CREATE TABLE ACADEMIC_GROUP
(
	id int PRIMARY KEY auto_increment,
    title VARCHAR(255)
);

CREATE TABLE CLIENT
(
	id int PRIMARY KEY auto_increment,
	name varchar (255),
	additional_info text,
	manager_id int
);

CREATE TABLE QUALIFICATION
(
	name varchar (255),
	PRIMARY KEY(name)
);

CREATE TABLE ROLE
(
	name varchar (255),
	PRIMARY KEY(name)
);

INSERT INTO ROLE(id, name) VALUES('manager');
INSERT INTO ROLE(id, name) VALUES('teacher');
INSERT INTO ROLE(id, name) VALUES('student');

CREATE TABLE ROOM
(
	title varchar (255),
	url varchar (255),
	PRIMARY KEY(title)
);

CREATE TABLE STATE
(
	id_STATE integer PRIMARY KEY auto_increment
);

CREATE TABLE TEACHING_MATERIAL
(
	id int PRIMARY KEY auto_increment,
	title varchar (255),
	url varchar (255)
);

CREATE TABLE TYPES
(
	id int PRIMARY KEY auto_increment
);

CREATE TABLE NEWNESS
(
	id_NEWNESS int PRIMARY KEY auto_increment,
	name char (11) NOT NULL
);

INSERT INTO NEWNESS(id_NEWNESS, name) VALUES(1, 'new');
INSERT INTO NEWNESS(id_NEWNESS, name) VALUES(2, 'mix');
INSERT INTO NEWNESS(id_NEWNESS, name) VALUES(3, 'in progress');

CREATE TABLE PROJECT_STATE
(
	id_PROJECT_STATE int PRIMARY KEY auto_increment,
	name char (11) NOT NULL
);
INSERT INTO PROJECT_STATE(id_PROJECT_STATE, name) VALUES(1, 'planning');
INSERT INTO PROJECT_STATE(id_PROJECT_STATE, name) VALUES(2, 'negotiating');
INSERT INTO PROJECT_STATE(id_PROJECT_STATE, name) VALUES(3, 'confirmed');
INSERT INTO PROJECT_STATE(id_PROJECT_STATE, name) VALUES(4, 'active');
INSERT INTO PROJECT_STATE(id_PROJECT_STATE, name) VALUES(5, 'finished');
INSERT INTO PROJECT_STATE(id_PROJECT_STATE, name) VALUES(6, 'stopped');
INSERT INTO PROJECT_STATE(id_PROJECT_STATE, name) VALUES(7, 'terminated');
INSERT INTO PROJECT_STATE(id_PROJECT_STATE, name) VALUES(8, 'not bought');

CREATE TABLE SEX
(
	id_SEX int primary key auto_increment,
	name char (6) NOT NULL
);

CREATE TABLE MEMBER
(
	id int PRIMARY KEY AUTO_INCREMENT,
	name varchar (255),
	surname varchar (255),
	age smallint,
	phone_number varchar(20),
	country varchar (255),
	email varchar (255),
	city varchar (255),
	sex integer,
	fk_ROLE_name varchar (255) NOT NULL,
	fk_CLIENT_id integer NOT NULL,
	FOREIGN KEY(sex) REFERENCES SEX (id_SEX),
	CONSTRAINT is_part_of FOREIGN KEY(fk_ROLE_name) REFERENCES ROLE (name),
	CONSTRAINT belongs_for FOREIGN KEY(fk_CLIENT_id) REFERENCES CLIENT (id)
);

INSERT INTO SEX(id_SEX, name) VALUES(1, 'male');
INSERT INTO SEX(id_SEX, name) VALUES(2, 'female');
INSERT INTO SEX(id_SEX, name) VALUES(3, 'other');

CREATE TABLE TEACHER_STATE
(
	id_TEACHER_STATE integer,
	name char (13) NOT NULL,
	PRIMARY KEY(id_TEACHER_STATE)
);
INSERT INTO TEACHER_STATE(id_TEACHER_STATE, name) VALUES(1, 'confirmed');
INSERT INTO TEACHER_STATE(id_TEACHER_STATE, name) VALUES(2, 'in discussion');
INSERT INTO TEACHER_STATE(id_TEACHER_STATE, name) VALUES(3, 'searching');
INSERT INTO TEACHER_STATE(id_TEACHER_STATE, name) VALUES(4, 'confirmed+');

CREATE TABLE WEEKDAY
(
	id_WEEKDAY int PRIMARY KEY AUTO_INCREMENT,
	name char (3) NOT NULL
);
INSERT INTO WEEKDAY(id_WEEKDAY, name) VALUES(1, 'Mon');
INSERT INTO WEEKDAY(id_WEEKDAY, name) VALUES(2, 'Tue');
INSERT INTO WEEKDAY(id_WEEKDAY, name) VALUES(3, 'Wed');
INSERT INTO WEEKDAY(id_WEEKDAY, name) VALUES(4, 'Thu');
INSERT INTO WEEKDAY(id_WEEKDAY, name) VALUES(5, 'Fri');
INSERT INTO WEEKDAY(id_WEEKDAY, name) VALUES(6, 'Sat');
INSERT INTO WEEKDAY(id_WEEKDAY, name) VALUES(7, 'Sun');



CREATE TABLE ACADEMIC_GROUP_MEMBER
(
	id int PRIMARY KEY AUTO_INCREMENT,
	fk_MEMBER_id int,
    fk_ACADEMIC_GROUP_id int,
	FOREIGN KEY(fk_ACADEMIC_GROUP_id) REFERENCES ACADEMIC_GROUP (id),
	FOREIGN KEY(fk_MEMBER_id) REFERENCES MEMBER (id)
);

CREATE TABLE TEACHER
(
	id int PRIMARY KEY AUTO_INCREMENT,
	additional_info text,
	fk_MEMBER_id int NOT NULL,
	FOREIGN KEY(fk_MEMBER_id) REFERENCES MEMBER (id)
);

CREATE TABLE CHARGE_RATE
(
	id int primary key auto_increment,
	price double,
	name varchar (255),
	fk_TEACHER_id int NOT NULL,
	FOREIGN KEY(fk_TEACHER_id) REFERENCES TEACHER (id)
);

CREATE TABLE PROJECT_TEACHER
(
	id int PRIMARY key AUTO_INCREMENT,
	fk_TEACHER_id int NOT NULL,
    fk_PROJECT_id int NOT NULL,
	FOREIGN KEY(fk_TEACHER_id) REFERENCES TEACHER (id)
	FOREIGN KEY(fk_PROJECT_id) REFERENCES PROJECT (id)
);

CREATE TABLE TEACHER_QUALIFICATION
(
	id int primary key AUTO_INCREMENT,
	fk_QUALIFICATION_name varchar (255),
    fk_TEACHER_id int,
	FOREIGN KEY(fk_TEACHER_id) REFERENCES TEACHER (id),
	FOREIGN KEY(fk_QUALIFICATION_name) REFERENCES QUALIFICATION (name)
);

CREATE TABLE PROJECT
(
	classroom_url varchar (255),
	id int PRIMARY KEY AUTO_INCREMENT,
	start_date date,
	end_date date,
	academic_hours_per_project int,
	academic_hours_per_session int,
	additional_info text,
	city varchar (255),
	newness integer,
	teacher_state integer,
	project_state integer,
	fk_QUALIFICATION_name varchar (255) NOT NULL,
	fk_TEACHING_MATERIAL_id int NOT NULL,
	fk_ACADEMIC_GROUP_id int NOT NULL,
	fk_PROJECT_TEACHER_id int NOT NULL,
	fk_ROOM_title varchar (255) NOT NULL,
	FOREIGN KEY(newness) REFERENCES NEWNESS (id_NEWNESS),
	FOREIGN KEY(teacher_state) REFERENCES TEACHER_STATE (id_TEACHER_STATE),
	FOREIGN KEY(project_state) REFERENCES PROJECT_STATE (id_PROJECT_STATE),
	CONSTRAINT subject_is FOREIGN KEY(fk_QUALIFICATION_name) REFERENCES QUALIFICATION (name),
	CONSTRAINT is_taught_according FOREIGN KEY(fk_TEACHING_MATERIAL_id) REFERENCES TEACHING_MATERIAL (id),
	FOREIGN KEY(fk_ACADEMIC_GROUP_id) REFERENCES ACADEMIC_GROUP (id),
	CONSTRAINT is_organized_at FOREIGN KEY(fk_ROOM_title) REFERENCES ROOM (title)
);

CREATE TABLE SCHEDULE
(
	id int PRIMARY KEY AUTO_INCREMENT,
	start_time time,
	end_time time,
	day_of_week integer,
	fk_PROJECT_id int NOT NULL,
	FOREIGN KEY(day_of_week) REFERENCES WEEKDAY (id_WEEKDAY),
	CONSTRAINT is_scheduled_according FOREIGN KEY(fk_PROJECT_id) REFERENCES PROJECT (id)
);
