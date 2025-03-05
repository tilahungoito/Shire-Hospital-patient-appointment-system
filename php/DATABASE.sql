DROP TABLE IF EXISTS patients_info;

CREATE TABLE patients_info (
  id int NOT NULL AUTO_INCREMENT,
  fullname varchar(50) NOT NULL,
  case_type varchar(30) NOT NULL,
  phone varchar(70) NOT NULL,
  appointment_number varchar(7) NOT NULL,
  appointment_date varchar(70) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `appointment_number` (`appointment_number`)
);

DROP TABLE IF EXISTS users;

CREATE TABLE IF NOT EXISTS users (
  id int NOT NULL AUTO_INCREMENT,
  username varchar(50) NOT NULL,
  password varchar(255) NOT NULL,
  created_at datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (id),
  UNIQUE KEY username (username)
);