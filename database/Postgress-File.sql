CREATE TABLE settings (
  id SERIAL PRIMARY KEY,
  site_title varchar(50) NOT NULL,
  timezone varchar(100) NOT NULL,
  recaptcha varchar(5) NOT NULL,
  theme varchar(100) NOT NULL
);

INSERT INTO settings (id, site_title, timezone, recaptcha, theme) VALUES
(1, 'Dnato System Login', 'Asia/Makassar', 'no', 'https://maxcdn.bootstrapcdn.com/bootswatch/3.3.7/cosmo/bootstrap.min.css');

CREATE TABLE tokens (
  id SERIAL PRIMARY KEY,
  token varchar(255) NOT NULL,
  user_id SERIAL NOT NULL,
  created date NOT NULL
);

CREATE TABLE users (
  id SERIAL PRIMARY KEY,
  email varchar(100) NOT NULL,
  first_name varchar(100) NOT NULL,
  last_name varchar(100) NOT NULL,
  role varchar(10) NOT NULL,
  password text NOT NULL,
  last_login varchar(100) NOT NULL,
  status varchar(100) NOT NULL,
  banned_users varchar(100) NOT NULL
);

INSERT INTO users (id, email, first_name, last_name, role, password, last_login, status, banned_users) VALUES
(1, 'admin@gmail.com', 'Admin', 'Admin', '1', 'sha256:1000:UJxHaaFpM44Bj1ka7U58GiSHUx3zRWid:Hq86/PHYj0utJLz2ciHzSehsidHAZX+A', '2017-11-22 09:19:26 PM', 'approved', 'unban');

