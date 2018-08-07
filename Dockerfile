FROM nginx:alpine
COPY . /usr/share/nginx/html

RUN adduser -D myuser
USER myuser

