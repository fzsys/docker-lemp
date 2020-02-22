# docker-lemp

#### up bundle
> git clone https://github.com/fzsys/docker-lemp <PREFERER DIR>
> cd <PREFERER DIR>
> mv .env.exapmle .env
choose php version (only 7.2, 7.3, 7.4 available) in docker-compose.yml
>docker-compose up -d

* if you need to rebuild php container with diff parameters - use Dockerfile context for building
* to create new virtual host - add config to ./nginx/conf/conf.d by example, add ./www root folder, restart nginx cntainer
* create new database inside mysql container if you need
