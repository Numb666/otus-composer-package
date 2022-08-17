# Пакет перемешивания символов в строке

Производит перемешивание символов в переданной в функцию строки

## Требования

- PHP 7.4

## Установка

```bash
$ composer require Numb666/otus-composer-package
```

## Использование

```php
<?php
$processor = new StringShuffle();
echo $processor->shuffle('my string');
```