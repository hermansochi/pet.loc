# Java Script Code style

Провеются js и jsx файлы в /src
Используется eslint с настройкой eslint:recommended со следующими соглашениями:

space-before-function-paren
 - [x] function name(arg) { ... }
 - [ ] function name (arg) { ... } 

eqeqeq
 - [x] if (name === 'John') 
 - [ ] if (name == 'John')

space-infix-ops
 - [x] var message = 'hello, ' + name + '!'
 - [ ] var message = 'hello, '+name+'!'

camelcase
 - [x] function myFunction () { }
 - [ ] function my_function () { }

comma-dangle
 - [x] let obj = { message: 'hello', }
 - [x] let obj = { message: 'hello' }

space-before-blocks
 - [x] if (admin) {...}
 - [ ] if (admin){...} 

space-in-parens
 - [x] getName(name)
 - [ ] getName( name )

template-curly-spacing
 - [x] const message = `Hello, ${name}`
 - [ ] const message = `Hello, ${ name }`

semi
 - [x] window.alert('hi');
 - [x] window.alert('hi')

# CSS Code style
Проверяются css файлы в /src и вложенных подпапках.
Правила проверки stylelint-config-standard.