# Booksmen

<div align="center">

<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/php/php-original.svg" alt="PHP" width="100" height="100"/>

**Built with PHP**

</div>
A lightweight library management system demonstrating fundamental PHP concepts for tracking books and member borrowing.

## Overview

Booksmen is a single-file PHP application that provides a simple interface for managing a small library catalog. It allows users to view available books, track which member has borrowed each book, and process new borrowings through a straightforward web interface.

## How It Works

The application uses two in-memory arrays to store data:

**Members Array**: Stores library members with their ID and name
```php
['id' => 1, 'name' => 'Alice Johnson']
```

**Books Array**: Stores books with title and current borrower (null if available)
```php
['id' => 1, 'title' => 'Harry Potter...', 'borrowed_by' => 1]
```

### Core Functionality

1. **Display Books**: Shows all books in a table with their availability status
2. **Check Status**: Displays whether a book is available or borrowed (and by whom)
3. **Borrow Books**: Processes borrowing via URL parameters (`?borrow=1&book_id=X&member_id=Y`)
4. **Member Lookup**: Matches borrower IDs to member names for display

### The Borrowing Process

When a user clicks "Borrow as Alice":
1. The URL passes book and member IDs as GET parameters
2. PHP validates the book ID and checks if it's available (`borrowed_by === null`)
3. If available, the book's `borrowed_by` field is updated with the member ID
4. The page reloads, showing the updated status

### Key PHP Concepts Demonstrated

- **Data structures**: Associative arrays for entities
- **Control flow**: `if` statements and `foreach` loops
- **HTML/PHP integration**: Embedding PHP logic in HTML templates
- **GET parameters**: URL-based state management
- **Reference variables**: Using `&$book` to modify array elements
- **XSS prevention**: `htmlspecialchars()` for safe output

## Installation

1. Clone the repository:
```bash
git clone https://github.com/achille010/booksmen.git
cd booksmen
```

2. Start a PHP development server:
```bash
php -S localhost:8000
```

3. Open your browser to `http://localhost:8000`

## Limitations

- No persistent storage (data resets on page refresh after initial borrow)
- No return functionality
- Hardcoded member options
- No authentication or validation
- Single-user simultaneous access only

This is intentionally minimal to showcase basic PHP web development patterns.

## Requirements

- PHP 7.4 or higher
- Web browser

## Contributing

Contributions are welcome! Feel free to fork this repository and submit pull requests for improvements.

## License

MIT License - Read details from the LICENSE file

---

*Built as a demonstration of fundamental PHP web development*