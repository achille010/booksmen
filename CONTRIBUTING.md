# Contributing to Booksmen

Thanks for your interest in contributing to **Booksmen** — a PHP library management program. Every improvement, bug fix, or idea helps make this project more solid. 💪

---

## Table of Contents

- [Getting Started](#getting-started)
- [How to Contribute](#how-to-contribute)
  - [Reporting Bugs](#reporting-bugs)
  - [Suggesting Features](#suggesting-features)
  - [Submitting Pull Requests](#submitting-pull-requests)
- [Development Setup](#development-setup)
- [Code Style](#code-style)
- [Commit Messages](#commit-messages)

---

## Getting Started

1. **Fork** the repository on GitHub
2. **Clone** your fork locally:
   ```bash
   git clone https://github.com/your-username/booksmen.git
   cd booksmen
   ```
3. **Create a branch** for your work:
   ```bash
   git checkout -b feature/your-feature-name
   ```

---

## How to Contribute

### Reporting Bugs

Found something broken? Open an issue and include:

- A clear, descriptive title
- Steps to reproduce the issue
- What you expected vs. what actually happened
- Your PHP version and server environment (e.g. Apache, Nginx, XAMPP)
- Screenshots or error logs if available

### Suggesting Features

Got a feature idea? Open an issue and describe:

- The problem your feature solves
- How you'd like it to work
- Any alternatives you've considered

### Submitting Pull Requests

1. Make sure your branch is up to date with `main`:
   ```bash
   git pull origin main
   ```
2. Test your changes locally and verify nothing is broken
3. Push your branch and open a Pull Request against `main`
4. Write a clear PR description — what changed and why
5. A maintainer will review your PR and may request changes

---

## Development Setup

### Prerequisites

- PHP 7.4 or higher
- A local server environment — any of the following work great:
  - [XAMPP](https://www.apachefriends.org/) (Windows/macOS/Linux)
  - [Laragon](https://laragon.org/) (Windows)
  - PHP's built-in dev server (see below)

### Running Locally

**Option 1 — PHP built-in server (quickest):**
```bash
cd booksmen
php -S localhost:8000
```
Then open `http://localhost:8000` in your browser.

**Option 2 — XAMPP/Laragon:**

Place the project folder inside your `htdocs` (XAMPP) or `www` (Laragon) directory, then access it via `http://localhost/booksmen`.

---

## Code Style

Keep the codebase clean and consistent:

- Use **4 spaces** for indentation (no tabs)
- Follow standard **PHP naming conventions**:
  - `camelCase` for variables and functions
  - `PascalCase` for classes
  - `UPPER_SNAKE_CASE` for constants
- Keep functions **small and focused** — one responsibility per function
- Add **comments** for any non-obvious logic
- Avoid mixing PHP and HTML excessively — keep logic and presentation as separate as possible
- Never commit credentials, API keys, or sensitive config values

---

## Commit Messages

Use clear, descriptive commit messages following this format:

```
<type>: <short description>

Examples:
feat: add book search functionality
fix: resolve incorrect book count on dashboard
chore: clean up unused variables in index.php
docs: add contributing guide
refactor: extract database connection into separate function
```

Common types: `feat`, `fix`, `docs`, `refactor`, `chore`, `style`, `test`

---

By contributing, you agree that your contributions will be licensed under the same license as this project.