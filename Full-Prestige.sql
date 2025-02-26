CREATE DATABASE IF NOT EXISTS full_prestige;
USE full_prestige;

-- Crear la tabla para cargos
CREATE TABLE IF NOT EXISTS Cargo(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    salario DECIMAL(10,2) NOT NULL
);

-- Crear la tabla para servicios
CREATE TABLE IF NOT EXISTS Servicio(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nombre VARCHAR(50) NOT NULL,
    precio DECIMAL(10,2) NOT NULL
);

-- Crear la tabla para empleados
CREATE TABLE IF NOT EXISTS Empleado(
    cedula VARCHAR(10) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    contrasena VARCHAR(255) NOT NULL,
    cargo INT NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(15) NOT NULL UNIQUE,
    estado BOOLEAN NOT NULL CHECK (estado IN (0,1)),
    direccion VARCHAR(100) NOT NULL,
    FOREIGN KEY (cargo) REFERENCES Cargo(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Crear la tabla para pagos
CREATE TABLE IF NOT EXISTS Pago(
    id INT PRIMARY KEY AUTO_INCREMENT,
    empleado VARCHAR(10) NOT NULL,
    fecha DATE NOT NULL,
    monto DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (empleado) REFERENCES Empleado(cedula) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Crear la tabla para asistencias
CREATE TABLE IF NOT EXISTS Asistencia(
    id INT PRIMARY KEY AUTO_INCREMENT,
    empleado VARCHAR(10) NOT NULL,
    fecha DATE NOT NULL,
    hora_entrada TIME NOT NULL,
    hora_salida TIME NOT NULL,
    observaciones VARCHAR(255) DEFAULT NULL,
    FOREIGN KEY (empleado) REFERENCES Empleado(cedula) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Crear la tabla para clientes
CREATE TABLE IF NOT EXISTS Cliente(
    cedula VARCHAR(10) PRIMARY KEY,
    nombre VARCHAR(50) NOT NULL,
    correo VARCHAR(100) NOT NULL UNIQUE,
    telefono VARCHAR(15) NOT NULL UNIQUE,
    direccion VARCHAR(100) NOT NULL,
    estado BOOLEAN NOT NULL CHECK (estado IN (0,1))
);

-- Crear la tabla para vehículos
CREATE TABLE IF NOT EXISTS Vehiculo(
    placa VARCHAR(10) PRIMARY KEY,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(50) NOT NULL,
    anio INT NOT NULL CHECK (anio >= 1900 AND anio <= YEAR(CURDATE())),
    propietario VARCHAR(10) NOT NULL,
    estado BOOLEAN NOT NULL CHECK (estado IN (0,1)),
    fecha_registro DATE NOT NULL,
    fecha_salida DATE DEFAULT NULL,
    FOREIGN KEY (propietario) REFERENCES Cliente(cedula) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Crear la tabla para los servicios de los vehículos
CREATE TABLE IF NOT EXISTS Servicio_Vehiculo(
    id INT PRIMARY KEY AUTO_INCREMENT,
    vehiculo VARCHAR(10) NOT NULL,
    servicio INT NOT NULL,
    fecha DATE NOT NULL,
    hora TIME NOT NULL,
    monto DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (vehiculo) REFERENCES Vehiculo(placa) ON DELETE CASCADE ON UPDATE CASCADE,
    FOREIGN KEY (servicio) REFERENCES Servicio(id) ON DELETE CASCADE ON UPDATE CASCADE
);

-- Índices adicionales para optimizar búsquedas
CREATE INDEX idx_cliente_correo ON Cliente(correo);
CREATE INDEX idx_cliente_telefono ON Cliente(telefono);
CREATE INDEX idx_empleado_correo ON Empleado(correo);
CREATE INDEX idx_empleado_telefono ON Empleado(telefono);
CREATE INDEX idx_vehiculo_marca ON Vehiculo(marca);
CREATE INDEX idx_vehiculo_modelo ON Vehiculo(modelo);