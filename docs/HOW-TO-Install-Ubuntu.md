1. 
2. 

3. sudo apt update

4. sudo apt-get install \
    ca-certificates \
    curl \
    gnupg \
    lsb-release
5. sudo mkdir -p /etc/apt/keyrings
6. curl -fsSL https://download.docker.com/linux/ubuntu/gpg | sudo gpg --dearmor -o /etc/apt/keyrings/docker.gpg
7. echo \
  "deb [arch=$(dpkg --print-architecture) signed-by=/etc/apt/keyrings/docker.gpg] https://download.docker.com/linux/ubuntu \
  $(lsb_release -cs) stable" | sudo tee /etc/apt/sources.list.d/docker.list > /dev/null
8. sudo apt-get update
9. sudo apt-get install docker-ce docker-ce-cli containerd.io docker-compose-plugin
10. sudo groupadd docker
11. sudo usermod -aG docker $USER
12. newgrp docker
13. sudo systemctl enable docker.service
14. sudo systemctl enable containerd.service
15. sudo docker run hello-world #Проверка

16. mkdir projects
17. cd projects
18. gir clone https://github.com/hermansochi/pet.loc.git
19. cd pet.loc
20. скопировать .env в /api
21. make init 