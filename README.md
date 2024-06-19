# Prefix ID 

This is a PHP library for generating unique, URL-safe, alphanumeric IDs with a specified prefix. This is useful for generating unique identifiers for various resources in web applications.

## Installation

You can install the package via Composer:

```bash
composer require nicoorfi/prefix_id
```

## Usage

```php
<?php
require 'vendor/autoload.php';

$token = prefix_id(prefix: 'sgm', length: 24)

echo $token // sgm_MF0e5Ng0xJc1zMv3A0T4f0n2
```
