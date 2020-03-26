FROM docker.io/php:7.2.27

RUN curl https://getcomposer.org/download/1.10.1/composer.phar > /usr/local/bin/composer && \
    php -r "if (hash_file('sha384', '/usr/local/bin/composer') !== 'b6112e167c56731fe2c6b210f7a6c07da544ffe33d31d0e9676c411c59ffffbf55604f19b3ea49b6c43d2f6c54db52a2') { echo 'Installer corrupt' . PHP_EOL; exit(-1); }" && \
    chmod u+x /usr/local/bin/composer

