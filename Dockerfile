FROM webdevops/php-nginx:7.4
COPY . /app
WORKDIR /app
RUN rm -rf Dockerfile
RUN ln -sf /usr/share/zoneinfo/Asia/anghai /etc/localtime
RUN [ "sh", "-c", "composer install --ignore-platform-reqs" ]
RUN [ "sh", "-c", "mv laravel-queue.conf /opt/docker/etc/supervisor.d/laravel_queue.conf" ]
RUN [ "sh", "-c", "chmod -R 777 /app" ]
