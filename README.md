# To-Do List API

Простой RESTful API для управления списком задач (To-Do List), реализованный с использованием Laravel 11 и MySQL. 
Проект создан как тестовое задание для Junior PHP Developer.

##  Возможности 

-  Создание задач
-  Просмотр списка всех задач
-  Просмотр одной задачи
-  Обновление задачи
-  Удаление задачи
-  Валидация данных
-  Документация API через Swagger (L5-Swagger)
-  Поддержка MySQL
-  Удобное тестирование через Postman

---

##  Технологии

- PHP 8.3
- Laravel 11
- MySQL
- OpenServer (локальный сервер)
- Postman
- L5-Swagger (для автогенерации API-документации)

---

##  Установка и запуск

1. Клонируй репозиторий

        git clone https://github.com/Bozdakhov/todo-list-api.git
       
        cd todo-list-api

3. Установи зависимости

        composer install

4. Создай .env файл
   
        cp .env.example .env
        Настрой файл .env

6. Укажи параметры подключения к MySQL
   
        DB_CONNECTION=mysql
        DB_HOST=127.0.0.1
        DB_PORT=3306
        DB_DATABASE=todo_list_api
        DB_USERNAME=root
        DB_PASSWORD=

8. Сгенерируй ключ приложения
   
        php artisan key:generate

10. Запусти миграции
    
        php artisan migrate

12. Запусти локальный сервер

        php artisan serve

## 🔗 Маршруты API

## Метод	URI	Описание
    POST	/api/tasks	Создать задачу
    GET	/api/tasks	Получить все задачи
    GET	/api/tasks/{id}	Получить одну задачу
    PUT	/api/tasks/{id}	Обновить задачу
    DELETE	/api/tasks/{id}	Удалить задачу

## Пример тела запроса для создания задачи:

    {
      "title": "Купить хлеб",
      "description": "Не забыть взять белый и чёрный",
      "status": true
    }
 ## Swagger Документация
    Документация автоматически генерируется с помощью L5-Swagger.

Доступна по адресу:

    http://localhost:8000/api/documentation
    
## Тестирование через Postman
    Запусти проект php artisan serve
    Используй Postman и URL http://127.0.0.1:8000/api/tasks
    Убедись, что Content-Type установлен в application/json

## Структура проекта
    app/Models/Task.php — модель задачи
    app/Http/Controllers/TaskController.php — логика CRUD
    routes/api.php — маршруты API
    database/migrations/ — миграции таблицы tasks

## Автор:
    Bozdakhov Jenis
    [GitHub — Bozdakhov](https://github.com/Bozdakhov)
