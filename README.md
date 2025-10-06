<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Code Quality Setup

This project includes an automated code quality system that helps maintain clean, consistent code by detecting unused variables and preventing commits with code quality issues.

### 🛠️ Tools Used

- **PHP_CodeSniffer (PHPCS)** - Detects unused variables
- **PHPStan** - Static analysis for type safety
- **GrumPHP** - Git hooks integration for automated checks

### 📁 Scanning Scope

The code quality tools scan the following directories:
- `app/` - Application logic
- `config/` - Configuration files
- `routes/` - Route definitions

### 🚀 Features

- ✅ **Unused Variable Detection** - Automatically finds unused variables in your code
- ✅ **Git Integration** - Prevents commits with code quality issues
- ✅ **Pre-commit Hooks** - Runs checks automatically before each commit
- ✅ **Focused Scanning** - Only scans relevant directories (excludes vendor, storage, etc.)

### 🔧 Configuration Files

- **`phpcs.xml`** - PHP_CodeSniffer configuration for unused variable detection
- **`phpstan.neon`** - PHPStan configuration for static analysis
- **`grumphp.yml`** - GrumPHP configuration for git hooks

### 📋 Usage

#### Manual Code Quality Checks

```bash
# Run PHP_CodeSniffer
vendor/bin/phpcs

# Run PHPStan
vendor/bin/phpstan analyse

# Run all GrumPHP tasks
vendor/bin/grumphp run
```

#### Git Integration

The system automatically runs when you commit:

```bash
# This will trigger code quality checks
git commit -m "Your commit message"
```

**If there are unused variables or other issues:**
- ❌ Commit will be **blocked**
- 📋 Error details will be displayed
- 🔧 Fix the issues and try committing again

**If code is clean:**
- ✅ Commit proceeds normally

#### Bypassing Checks (Not Recommended)

If you need to commit despite warnings:

```bash
git commit -m "Your message" --no-verify
```

### 🎯 Ignoring Specific Rules

You can ignore specific PHP_CodeSniffer rules using comments:

```php
// Ignore unused variable on next line
// phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable
$unusedVariable = 'This will be ignored';

// Ignore unused variable on current line
$unusedVariable = 'This will be ignored'; // phpcs:ignore VariableAnalysis.CodeAnalysis.VariableAnalysis.UnusedVariable

// Ignore all rules in a block
// phpcs:disable
$unusedVariable1 = 'ignored';
$unusedVariable2 = 'ignored';
// phpcs:enable
```

### 🔄 Setup Instructions

The code quality system is already configured, but if you need to reinstall:

1. **Install dependencies:**
   ```bash
   composer install
   ```

2. **Initialize git hooks:**
   ```bash
   vendor/bin/grumphp git:init
   ```

3. **Test the setup:**
   ```bash
   vendor/bin/grumphp run
   ```

### 📊 What Gets Detected

- **Unused Variables** - Variables that are declared but never used
- **Basic Static Analysis** - Type-related issues and undefined variables
- **Laravel-specific Context** - Understands Laravel patterns and conventions

### 🎨 IDE Integration

For better development experience, consider installing these VS Code extensions:
- **PHP Sniffer & Beautifier** - Real-time PHPCS integration
- **Error Lens** - Inline error highlighting
- **PHP Intelephense** - Advanced PHP language support

### 🚨 Common Issues

**Issue:** PHPStan reports "Undefined variable: $this" in routes/console.php
**Solution:** This is a false positive. Laravel's Artisan command closures provide `$this` context, but PHPStan doesn't understand this Laravel-specific pattern.

**Issue:** Want to exclude additional files/folders
**Solution:** Update the `excludePaths` in `phpstan.neon` and `exclude-pattern` in `phpcs.xml`

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
