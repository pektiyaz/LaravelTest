
# Laravel Comments API

АПИ для комментарий 




## Framework

 - [Laravel 8.83.26](https://laravel.com/docs)


## Установка



```bash
  git clone https://github.com/pektiyaz/LaravelTest.git
  cd LaravelTest
  composer install
```
Настроите .env 
```bash
  php artisan config:cache
  php artisan migrate --seed
  php artisan serve
```
Посетите http://localhost:8000
    
## API

#### Роутинг

```http
  GET /api/comments
```

| Параметр | Тип     | Объяснение                |
| :-------- | :------- | :------------------------- |
| `sort` | `string` |       Параметр для сортировки  |
| `page` | `integer` |      Параметр для пагинации  |

#### Параметры sort 
| Параметр | Объяснение                |
| :-------- | :------------------------- |
| `id` |       Сортировка по ид DESC  |
| `-id` |       Сортировка по ид ASC  |
| `created_at` |       Сортировка по даты DESC  |
| `-created_at` |       Сортировка по даты ASC  |
| `likes_count` |       Сортировка по лайкам DESC  |
| `-likes_count` |       Сортировка по лайкам ASC  |




Ответ от сервера будет в JSON


## Например

`/api/comments?sort=-likes_count&page=2`


## Структура ответа

```javascript
{
    data:[
        {
            id: //Ид коммента,
            comment: //Коммент,
            user:{ //Автор 
                id: //Ид Пользователя,
                name: //Имя Пользователя,
                email: //Емайл Пользователя
            },
            liked_users:[ //Пользователи которые лайкнули комментарий
                {
                    id: //Ид Пользователя,
                    name: //Имя Пользователя,
                    email: //Емайл Пользователя
                }
            ],
            likes: // Количество лайков,
            created_at: //Вермя создание,
            updated_at: //Вермя изменение
        }
    ]
}
```

## Автор

- [@pektiyaz](https://www.github.com/pektiyaz)

