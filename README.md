# Laravel + ReactJS + VueJS Pet project

Документацию по проекту см. в папке /docs

Учебный проект группы товарищей Lunch Brotherhood:
 - Herman Alexandrov (hermansochi@ya.ru): Software Architect, Lead fullstack developer, devops.

0. Ставим docker, docker-compose и make.
1. Форкаем репу.
2. git clone https://github.com/hermansochi/pet.loc.git
3. Запрашиваем у hermansochi файл .env и копируем его в /api/.env
4. В каталоге с проектом делаем make.
5. Фронт на React открывается по адресу react.localhost
6. Фронт на React пишем в папке /react/src
7. Фронт на Vue открывается по адресу vue.localhost
8. Фронт на Vue пишем в папке /vue/src
9. REST API бек на адресе api.localhost
10. Описание API api.localhost/api/docs
10. Бек в /api
11. Шлем PR как описано тут https://rustycrate.ru/%D1%80%D1%83%D0%BA%D0%BE%D0%B2%D0%BE%D0%B4%D1%81%D1%82%D0%B2%D0%B0/2016/03/07/contributing.html

# Полезные команды:
- make init     			Полная пересборка проекта (с потерей данных)
- make up       			Запуск тестовой среды разработки в фоне
- make down     			Остановка тестовой среды разработки. 
- make restart  			Перезапуск тестовой среды разработки.
- make lint						Запустить линтеры по всем частям проекта.
- make lint-fix				Исправить ошибки линтера по всем частям проекта.
- make react-lint 		Запустить линтеры (eslint+stylelint) над файлами react проекта.
- make react-lint-fix Исправить ошибки линтера eslint в react проекте.

Полный список команд см. Makefile в корне проекта.
