# Random

## Overview

The `Random` class is a lightweight and flexible utility designed to generate secure, random alphanumeric strings for various use cases. Whether you need unique identifiers, temporary tokens, or secure keys, this class provides a simple yet robust implementation.

## Installation

Simply include the `Random` class in your project. No external dependencies are required.

```php
require_once 'Random.php';
```

---

## Usage

### Generate a Random String

```php
require_once 'Random.php';

try {
    $randomString = Random::alpha_num(16, ['salt1', 'salt2']);
    echo $randomString;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
```

### Parameters
- **`$length` (int):** Required. The length of the generated string. **(max. 128)**
- **`$salts` (array):** Optional. An array of strings to enhance randomness.

### Exceptions
- **`InvalidArgumentException:`** Thrown when the specified length is less than 1 or greater than to 128.

---

## Example Output

```text
fG9aX2kL3QcT5WdR8uNy1jVpZ7Bo6MHt
```

---

## Methods

### `alpha_num(int $length, array $salts = []): string`
Generates a random alphanumeric string.

- **Input:**
  - `$length` (int): Length of the output string.
  - `$salts` (array): Additional strings to increase randomness.
- **Output:**
  - Returns a secure, random alphanumeric string.

---

## Requirements

- PHP 7.4+
- No external libraries required
