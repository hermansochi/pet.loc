#Hints & Tricks

- При разработке в WSL процесс Vmmem со временем отьедает много памяти. Попробовать исправить можно в консоли WSL
  при помощи команды sudo sh -c "echo 3 > /proc/sys/vm/drop_caches" или make memory из корня проекта.

- Если закомитили что то, что должно было игнорироваться
  - Правим .gitignore
  - сбрасываем кеш git rm -rf --cached .
  - git add .
  - git commit -m 'removed gitignored files'

- Лог docker:
  - docker compose logs -f
  - docker logs pet-vue-node-1

#show swarms
docker node ls

#show services
docker service ls

#show list of task for one service
docker service ps SERVICE

#stop all containers:
docker stop $(docker ps -a -q)

#stop all containers by force
docker kill $(docker ps -q)

#remove all containers
docker rm $(docker ps -a -q)

#remove all docker images
docker rmi $(docker images -q)

#purge the rest
docker system prune --all --force --volumes

#list all docker stacks
docker stack ls

#remove stack
docker stack rm NAME

#list all networks
docker network ls

#Leave the swarm
docker swarm leave --force