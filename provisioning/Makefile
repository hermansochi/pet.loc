site:
	ansible-playbook -i hosts.yml site.yml

authorize:
	ansible-playbook -i hosts.yml authorize.yml

generate-deploy-key:
	ssh-keygen -q -t rsa -N '' -f files/deploy_rsa

authorize-deploy:
	ansible-playbook -i hosts.yml authorize-deploy.yml

docker-login:
	ansible-playbook -i hosts.yml docker-login.yml