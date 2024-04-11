# @source https://dockerfile.readthedocs.io/en/latest/content/DockerImages/dockerfiles/php-apache.html
FROM webdevops/php-apache:8.2-alpine

# Installation de Node.js et npm en utilisant les packages disponibles dans Alpine Linux
RUN apk add --no-cache nodejs npm

# Positionnement par défaut dans le répertoire /app
WORKDIR /app
