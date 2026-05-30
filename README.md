# API Login PHP MongoDB

## Descripción

Este proyecto consiste en una API desarrollada en PHP para realizar el registro e inicio de sesión de usuarios utilizando MongoDB como base de datos.

La API fue desarrollada como parte de la evidencia GA7-220501096-AA5-EV01.

## Tecnologías utilizadas

* PHP 8.2
* MongoDB
* MongoDB Compass
* Composer
* Apache (XAMPP)
* Postman
* Git y GitHub

## Base de datos

Base de datos:

```text
api_login
```

Colección:

```text
usuarios
```

## Endpoints

### Registro de usuario

Método:

```text
POST
```

URL:

```text
http://localhost/api-login/registro.php
```

Ejemplo de Body:

```json
{
  "usuario": "sebastian",
  "password": "123456"
}
```

Respuesta:

```json
{
  "mensaje": "Usuario registrado correctamente"
}
```

### Inicio de sesión

Método:

```text
POST
```

URL:

```text
http://localhost/api-login/login.php
```

Ejemplo de Body:

```json
{
  "usuario": "sebastian",
  "password": "123456"
}
```

Respuesta correcta:

```json
{
  "mensaje": "Autenticación satisfactoria"
}
```

Respuesta incorrecta:

```json
{
  "mensaje": "Error en la autenticación"
}
```

### Consultar usuarios

Método:

```text
GET
```

URL:

```text
http://localhost/api-login/listar_usuarios.php
```

## Autor

Sebastián González

Técnico en Análisis y Desarrollo de Software - SENA

