# Wedding
Adams and Rachels Wedding Website

References:
* https://hub.docker.com/r/bitnami/laravel (Docker-compose image)
* https://twill.io/ (CMS)
* https://startbootstrap.com/previews/agency (Website Boilerplate)
* https://uk.godaddy.com/community/VPS-Dedicated-Servers/How-to-install-Docker-docker-compose-and-Nginx-Proxy-Manager-on/td-p/175707 (Installing docker on GoDaddy)

# Starting Site Locally
```
cd myapp
docker-compose up
```

To access the site once loaded http://localhost:3000

# Issues
If composer returns exceeding maximum memory error. Set the follow ENV var in the **myapp** container:
`COMPOSER_MEMORY_LIMIT=-1 composer.phar`