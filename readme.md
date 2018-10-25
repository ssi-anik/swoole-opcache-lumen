# Lumen with Swoole + Opcache and separately

## How to
- `cp .env.example .env`
- Change the variables required. `SWOOLE_*` variables are required for `/.*swoole.*/ig` branches.
- `git checkout branchname` (i.e; opcache, swoole, opcache-swoole).
- change the `docker-compose.yml` if required.
- `composer install` to install required files.
- `composer dump-autoload -o` to optimize the classload dump.
- `docker-compose up -d --build`
