# 🧠 API REST - Gestión de Empleados (Laravel)

Este proyecto proporciona un backend en **Laravel** para gestionar empleados mediante una **API RESTful**.  
Permite registrar y listar desde peticiones HTTP (GET y POST).

---

## 🚀 Requisitos previos

Asegúrate de tener instalado:

- [PHP ^ 8.2.12](https://www.php.net/downloads)
- [Composer](https://getcomposer.org/download/)
- [MySQL](https://www.mysql.com/)
- [Laravel ^11](https://laravel.com/)
- [XAMPP](https://www.apachefriends.org/)

---

## ⚙️ Instalación del proyecto

1️⃣ **Clonar el repositorio**

```bash
https://github.com/Nando-Fenix/ExamenBackend.git
cd ExamenBackend

2️⃣ **Instalar dependencias**

```bash
composer install

3️⃣ Configurar el entorno

Copia el archivo de ejemplo ".env.example" y renómbralo a .env

Edita el archivo .env para configurar tu base de datos:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=examenbackend <- Modificar
DB_USERNAME=root
DB_PASSWORD=

🧱 Migraciones y Seeders
ejecuta los comandos:

php artisan migrate
php artisan db:seed

uno despues del otro

▶️ Ejecutar el servidor

php artisan serve

