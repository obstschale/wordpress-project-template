# WordPress Project Template

## Install

```sh
$ # Clone GIT repository
$ git clone https://github.com/obstschale/wordpress-project-template.git myawesomehost.com

$ # Navigate into new directory
$ cd myawesomehost.com

$ # install using composer
$ composer install
```

Point root url to `public/index.php`

## VVV

Das Repo kann als `htdocs` als neue Webseite geklont werden. Der Root path muss dennoch in der nginx config angepasst werden, sodass er auf `public/` zeigt.


- cp local-config-sample.php local-config.php
- cp serves-sample.yml servers.yml

- composer install
- composer update
