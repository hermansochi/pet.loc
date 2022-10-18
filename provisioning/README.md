### Provisioning on VM fro Ubuntu 22.04

0. Rename & edit all *.dist files:
	/provisioning/hosts.yml
	/provisioning/site.yml
	/provisioning/docker-login.yml
	/provisioning/authorize.yml
	/provisioning/roles/site/defaults/main.yml

1. cd provisioning && make site

2. make authorize

3. make docker-login

