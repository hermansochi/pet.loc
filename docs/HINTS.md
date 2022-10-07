#Hints & Tricks

- При разработке в WSL процесс Vmmem со временем отьедает много памяти. Попробовать исправить можно в консоли WSL
  при помощи команды sudo sh -c "echo 3 > /proc/sys/vm/drop_caches" или make memory из корня проекта.

- Если закомитили что то, что должно было игнорироваться
  - Правим .gitignore
  - сбрасываем кеш git rm -rf --cached .
  - git add .
  - git commit -m 'removed gitignored files'