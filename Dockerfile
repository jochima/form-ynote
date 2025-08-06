FROM php:8.3-fpm

RUN apt-get clean && apt-get update

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    curl \
    libzip-dev \
    libpq-dev \
    libcurl4-openssl-dev \
    nano

RUN docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd zip

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN useradd -m ynote && chown -R ynote:ynote /var/www

WORKDIR /var/www

COPY . .

COPY entrypoint.sh /usr/local/bin/entrypoint.sh

RUN chmod +x /usr/local/bin/entrypoint.sh
RUN mkdir -p var/cache var/log && \
RUN chown -R ynote:ynote /var/www && \
RUN chmod -R 775 var

USER ynote

ENTRYPOINT ["/usr/local/bin/entrypoint.sh"]

EXPOSE 9000

EXPOSE 8000

CMD ["php", "-S", "0.0.0.0:8080", "-t", "public"]
