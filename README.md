# PHP Developer Test


### Technology

- Valid PHP 7.1 or newer
- Persist data via Mysql(in the provided containers).
    - Mysql connection details:
        - host: `172.18.0.3`
        - port: `3306`
        - dbname: `hellofresh`
        - username: `root`
        - password: `admin123`
    - Redis connection details:
        - host: `redis`
        - port: `6379`

- Use the provided `docker-compose.yml` file in the root of this repository. 

## Instructions

1. Run the docker-compose up -d --build command to build the solution
2. To connect the PHP and mysql use the command docker exec -it {container_name} /bin/bash
3. Once started check the docker container status by docker ps -a

Run the site in browser using http://172.18.0.4