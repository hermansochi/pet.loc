1. 
2. 

3. sudo apt update
4.sudo apt-get install \
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
10. sudo service docker start
11. sudo docker run hello-world
12. VERSION=$(curl --silent https://api.github.com/repos/docker/compose/releases/latest | grep -Po '"tag_name": "\K.*\d')
13. DESTINATION=/usr/local/bin/docker-compose
sudo curl -L https://github.com/docker/compose/releases/download/${VERSION}/docker-compose-$(uname -s)-$(uname -m) -o $DESTINATION
sudo chmod 755 $DESTINATION

14. mkdir projects
15. cd projects
16. gir clone https://github.com/hermansochi/pet.loc.git
17. cd pet.loc
18. sudo usermod -aG docker $USER
19. скопировать .env в /api
20. sudo make init 