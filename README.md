# onefamilychapel.com
web portal for one family chapel church


##### setup

add mysql password to shell environment

manually `WP_DOCKER_DB_PW=supersecretpassword` to ~/.bashrc or ~/.bash_profile

```bash
echo 'export WP_DOCKER_DB_PW=supersecretpassword' >>~/.bash_profile
```



git clone this repository

```bash
docker-compose up
```

http://localhost:8080/ to install wordpress


##### cleanup

use these clean up commands to varying levels of removing wordpress stack from your host machine.


```bash
# stop containers (minimal, keeps all changes)
docker stop $(docker ps -aq)

# stop and remove containers (keeps database but removes file changes)
docker stop $(docker ps -aq) && docker rm $(docker ps -aq)

# stop and remove everything (fresh start)
docker stop $(docker ps -aq) && docker rm $(docker ps -aq)
docker rmi -f $(docker images -aq)
docker volume rm $(docker volume ls -qf dangling=true)
```




