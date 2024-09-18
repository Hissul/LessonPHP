# PHPLesson


<!-- генерирует ssh ключ  -->
ssh-keygen -t rsa 
<!--  -->
ls .ssh/
<!--  -->
cat .ssh/id_rsa.pub
mkdir Progects
cd Progects
git clone git@github.com:Hissul/PHPLesson.git

<!-- удаление старого .git -->
sudo rm -r .git

<!-- перемещение нового .git в корневую папку  -->
mv LessonPHP/.git/.

<!-- удаление ненужной папки -->
rmdir LessonPHP

<!--  -->
cat ~/.ssh/id_rsa.pub


chmod +x docker-entrypoint.sh
ls -la docker-entrypoint.sh


docker compose build
docker compose up


sudo chown alexander:alexander app

mkdir app/public
nano app/public/index.php
cat app/public/index.php


git status
git checkout -b base
it add .docker/app/docker-compose.yaml
git commit . -m "base Base docker compose container. app and webserver"
git config --global user.email "masstadontt@rambler.ru'
git config --global user.name "Hissul"
git commit . -m "base Base docker compose container. app and webserver"
git push origin base


docker ps - список контейнеров
docker exec -it lesson_20240710_app bash - в контейнер


echo "Hello world!" >  newFile.txt - создаем файл в контейнере

env | sort - в контейнере (список переменных)

env | grep DATABASE - в контейнере (поиск)




php artisan  - в контейнере ( создаем новый контролер)
php artisan make:controller - создаем новый контролер


psql -U db_user app - захоодим в базу (в терминале)

composer require orchid/platform - в контейнере - загрузка доп. пакетов

php artisan orchid:install - доустановка, после команды выше

php artisan orchid:admin -создаем админа (name:admin / password: admin / email : admin@admin.com)

composer require orchid/crud - доп. библиотека для orchid (в контейнере)

php artisan make:model Post --migration - создаем модель

php artisan orchid:resource PostResource- создаем ресурс

php artisan install:api - дом библиотека ( + методы в User... createToken)




sudo chown student: -R frontend/ - меняем влядельца
ls -la frontend/
mv my-app/* .
mv my-app/.* .
rmdir my-app/



1  sudo docker run hello-world
    2  [sudo] пароль для alexander: 
    3  newgrp docker
    4  sudo groupadd docker
    5  newgrp docker
    6  sudo docker run hello-world
    7  cd Progects
    8  cd PHPLesson
    9  ls -la
   10  touch app/index.php
   11  sudo chown alexander:alexander app
   12  ls -la
   13  mkdir app/public
   14  nano app/public/index.php
   15  cat app/public/index.pxp
   16  cat app/public/index.php
   17  nano app/public/index.php
   18  git status
   19  git checkout -b base
   20  git status
   21  git add .docker/app/docker-compose.yaml
   22  git status
23  git add .docker/app/docker-compose.yaml
   24  git add .docker/ app/ docker-compose.yaml
   25  git status
   26  git commit . =m "base Base docker compose container. app and webserver"
   27  git commit . -m "base Base docker compose container. app and webserver"
   28  git config --global user.email "masstadontt@rambler.ru'
   29  git config --global user.email "masstadontt@rambler.ru"
   30  git config --global user.name "Hissul"
   31  git commit . -m "base Base docker compose container. app and webserver"
   32  git push origin base
   33  history | les
   34  history | less

