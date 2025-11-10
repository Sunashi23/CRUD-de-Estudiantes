# 📚 CRUD de Estudiantes – Laravel 12 + Tailwind CSS

Este proyecto implementa un sistema completo **CRUD (Create, Read, Update, Delete)** para gestionar una **Lista de Estudiantes** y sus **Carreras**, desarrollado con **Laravel** y **Tailwind CSS**.

El objetivo es reforzar el uso del framework Laravel aplicando el patrón, manejo de rutas, validaciones y el flujo completo de un sistema web básico.

---

## 🎯 Objetivos del proyecto
- Practicar la creación de un CRUD completo en Laravel.
- Comprender la interacción entre modelos, controladores, vistas y rutas.
- Aplicar validaciones en formularios y mensajes de retroalimentación.
- Organizar correctamente las vistas utilizando un layout base.
- Mejorar la comprensión del flujo de datos en aplicaciones web.

---

### 👨‍🎓 Gestión de Estudiantes
- Registrar nuevos estudiantes con los campos:
  - **Nombre**
  - **Correo**
  - **Carrera** (relacionada)
  - **Semestre**
- Listar todos los estudiantes registrados.
- Editar la información de un estudiante.
- Eliminar estudiantes del registro.

### 🎓 Gestión de Carreras
- Crear, editar y eliminar carreras disponibles.
- Cada estudiante pertenece a una carrera.
- Una carrera puede tener varios estudiantes.

---

## 🏗️ Estructura principal del proyecto

```bash
app/
 ├── Http/
 │   └── Controllers/
 │       ├── EstudianteController.php
 │       └── CarreraController.php
 ├── Models/
 │   ├── Estudiante.php
 │   └── Carrera.php

database/
 ├── migrations/
 │   ├── create_carreras_table.php
 │   └── create_estudiantes_table.php
 └── seeders/
     ├── CarreraSeeder.php
     ├── EstudianteSeeder.php
     └── DatabaseSeeder.php

resources/
 ├── views/
 │   ├── layouts/app.blade.php
 │   ├── estudiantes/
 │   │   ├── index.blade.php
 │   │   ├── create.blade.php
 │   │   └── edit.blade.php
 │   └── carreras/
 │       ├── index.blade.php
 │       ├── create.blade.php
 │       └── edit.blade.php

routes/
 └── web.php
