### Provisioning on VM fro Ubuntu 22.04

0. Rename & edit all *.dist files:
	/provisioning/hosts.yml
	/provisioning/site.yml
	/provisioning/docker-login.yml
	/provisioning/authorize.yml
	/provisioning/roles/site/defaults/main.yml

1. Make production docker images

REGISTRY=private_docker_registry IMAGE_TAG=1 make build

2. Add credentials for access to private_docker_registry (once)

docker login -u registry -p username private_docker_registry

3. Push images ro private docker hub

REGISTRY=private_docker_registry IMAGE_TAG=1 make push

4. Images saves in /var/lib/docker/volumes/registry_registry on server

5. Switch docker to swarm 