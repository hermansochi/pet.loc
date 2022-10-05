# Laravel + ReactJS + VueJS Pet project

>**Документацию по проекту см. в папке /docs**

>**Rest API спроектирован максимально близко к спецификации [JSON:API v1.1](https://jsonapi.org/)

Учебный проект группы товарищей Lunch Brotherhood:
 - Herman Alexandrov (hermansochi@ya.ru): Software Architect, Lead fullstack developer, devops.

1. Ставим docker, docker-compose и make.
1. Форкаем репу.
1. git clone https://github.com/hermansochi/pet.loc.git
1. В каталоге с проектом делаем make.
1. Документация по Rest API проекта доступна по адресу [http://api.localhost/docs](http://api.localhost/docs)
1. Фронт на React открывается по адресу [http://react.localhost](http://react.localhost)
1. Фронт на React пишем в папке /react/src
1. Фронт на Vue открывается по адресу [http://vue.localhost](http://vue.localhost)
1. Фронт на Vue пишем в папке /vue/src
1. REST API бек на адресе api.localhost
1. Бек в /api
1. Шлем PR как [описано тут](https://rustycrate.ru/%D1%80%D1%83%D0%BA%D0%BE%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B0/2016/03/07/contributing.html).

# Полезные команды:
- `make init`     			- Полная пересборка проекта (с потерей данных)
- `make up`       			- Запуск тестовой среды разработки в фоне
- `make down`     			- Остановка тестовой среды разработки. 
- `make restart`  			- Перезапуск тестовой среды разработки.
- `make lint`						- Запустить линтеры по всем частям проекта.
- `make lint-fix`				- Исправить ошибки линтера по всем частям проекта.
- `make react-lint` 		- Запустить линтеры (eslint+stylelint) над файлами react проекта.
- `make react-lint-fix` - Исправить ошибки линтера eslint в react проекте.

Полный список команд см. Makefile в корне проекта.
