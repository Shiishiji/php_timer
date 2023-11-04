FROM php:8.2-cli-alpine
LABEL authors="Shiishiji"

COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

CMD [ "sh" ]
