# Custom Pagination for Astra Theme

This WordPress snippet is designed to customize the pagination for archives, search pages, blog pages, author pages, date pages, and custom taxonomy pages when using the Astra Theme.

## Prerequisites

- WordPress installation.
- Astra Theme installed and active.

## Installation

1. Open your WordPress theme or child theme directory.
2. Find the `functions.php` file.
3. Copy and paste the code snippet at the end of the `functions.php` file.

## How It Works

The snippet hooks into the Astra pagination, and displays numeric pagination links without ellipsis ("..."). It works only on archives, search pages, blog pages, author pages, date pages, and custom taxonomy pages.

## Customization

You can customize the number of page links displayed by modifying the `mid_size` parameter within the code.

```php
'mid_size' => 50, // Change this number
