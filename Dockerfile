FROM nginx:alpine

COPY . /usr/share/nginx/html
COPY /docker/default.conf /etc/nginx/conf.d/

RUN adduser -D myuser
USER myuser

CMD gunicorn --bind 0.0.0.0:$PORT 
