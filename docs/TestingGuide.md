# Testing guide

## React Unit tests

Тестирование производится при помощи библиотеки JEST:
https://jestjs.io/ru/

Объекты, отсутствующие на этапе юнит тестирования (например window), эмулируются
"виртуальным браузером" jsdom - https://github.com/jsdom/jsdom

### Соглашение о именах файлов.

Тесты пишутся с суффиксом test.js в той же папке, где находится тестируемый юнит.
Например для компонента Bar.jsx тест будет называться Bar.test.jsx.

### Запуск тестов

Для запуска в обычном режиме можно использовать команду:
make react-test

Для запуска в интерактивном режиме можно использовать команду:
make react-test-watch
