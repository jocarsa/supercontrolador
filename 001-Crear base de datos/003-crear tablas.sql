CREATE TABLE `supercontrolador`.`clientes` (`Identificador` INT(255) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(255) NOT NULL , `email` VARCHAR(255) NOT NULL , `telefono` VARCHAR(255) NOT NULL , PRIMARY KEY (`Identificador`)) ENGINE = InnoDB;

CREATE TABLE `supercontrolador`.`productos` (`Identificador` INT(255) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(255) NOT NULL , `precio` VARCHAR(255) NOT NULL , `descripcion` TEXT NOT NULL , PRIMARY KEY (`Identificador`)) ENGINE = InnoDB;

CREATE TABLE `supercontrolador`.`pedidos` (`Identificador` INT(255) NOT NULL AUTO_INCREMENT , `clientes_nombre` INT(255) NOT NULL , `productos_nombre` INT(255) NOT NULL , `fecha` DATE NOT NULL , PRIMARY KEY (`Identificador`)) ENGINE = InnoDB;

CREATE TABLE `supercontrolador`.`categorias` (`Identificador` INT(255) NOT NULL AUTO_INCREMENT , `nombredelacategoria` VARCHAR(255) NOT NULL , `descripcion` TEXT NOT NULL , PRIMARY KEY (`Identificador`)) ENGINE = InnoDB;