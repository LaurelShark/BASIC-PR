docker rm -f $(docker ps -a -q)
docker run -d --name my-running-app -p 8080:80 my-php-app

