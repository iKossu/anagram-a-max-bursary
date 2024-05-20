# Installation instructions

The following steps should result in a functioning localhost environment. However, your mileage may vary.

## Prerequisites

- composer 2.7.6
- php 8.3.7

## Steps

1. Install dependencies.

```sh
composer install
```

1. Run tests.

```sh
.\vendor\bin\phpunit .\tests\AnagramTest.php
```

```sh
.\vendor\bin\phpunit .\tests\MaxSubArrayTest.php
```
