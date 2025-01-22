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
    $randomString = Random::alpha_num(['salt1', 'salt2'], 16);
    echo $randomString;
} catch (Exception $e) {
    echo 'Error: ' . $e->getMessage();
}
```

### Parameters
- **`$salts` (array):** Optional. An array of strings to enhance randomness.
- **`$length` (int):** Required. The length of the generated string (default: 32).

### Exceptions
- **`InvalidArgumentException:`** Thrown when the specified length is less than or equal to 0.
- **`RuntimeException:`** Thrown when the character pool is empty due to insufficient entropy.

---

## Example Output

```text
fG9aX2kL3QcT5WdR8uNy1jVpZ7Bo6MHt
```

---

## Methods

### `alpha_num(array $salts = [], int $length = 32): string`
Generates a random alphanumeric string.

- **Input:**
  - `$salts` (array): Additional strings to increase randomness.
  - `$length` (int): Length of the output string.
- **Output:**
  - Returns a secure, random alphanumeric string.

---

## Requirements

- PHP 7.4+
- No external libraries required
