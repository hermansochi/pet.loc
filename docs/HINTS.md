#Hints & Tricks

- При разработке в WSL процесс Vmmem со временем отьедает много памяти. Попробовать исправить можно в консоли WSL
  при помощи команды sudo sh -c "echo 3 > /proc/sys/vm/drop_caches"