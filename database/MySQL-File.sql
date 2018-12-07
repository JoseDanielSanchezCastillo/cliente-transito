CREATE TABLE tokens (
  id int PRIMARY KEY AUTO_INCREMENT,
  token varchar(255) NOT NULL,
  usuario_id int(10) NOT NULL,
  fecha_creacion date NOT NULL
) ;



CREATE TABLE usuarios (
  id int PRIMARY KEY AUTO_INCREMENT,
  correo varchar(100) NOT NULL,
  nombre varchar(100) NOT NULL,
  apellidos varchar(100) NOT NULL,
  rol varchar(10) NOT NULL,
  contrasena text NOT NULL,
  ultimo_inicio_sesion varchar(100) NOT NULL,
  bloqueo_usuario varchar(100) NOT NULL
);


INSERT INTO usuarios (id, correo, nombre , apellidos , rol, contrasena, ultimo_inicio_sesion, bloqueo_usuario) VALUES
(1, 'admin@gmail.com', 'Admin', 'Admin', '1', 'sha256:1000:UJxHaaFpM44Bj1ka7U58GiSHUx3zRWid:Hq86/PHYj0utJLz2ciHzSehsidHAZX+A', '2017-11-22 09:19:26 PM', 'desbloqueado');

