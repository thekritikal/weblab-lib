composer install

./vendor/bin/phplint

./vendor/bin/phpunit --testdox --colors=always tests
