# practice

An exercise in creating a simple MVC task app and a barebones, "core" framework from scratch...

__Includes basic:__
- Routing
- Namespacing
- Dependency Injection Container
- Composer Autoloading

## Installation

Update `config.php` for your environment.

Run `composer install`.

Create database table `tasks` with columns for `id` (INT), `description` (TEXT), and `completed` (TINYINT).

__Notes:__
- No, I do not typically roll a custom framework... this was an exercise. And it was fun. In a "production" project, I recommend and use Laravel.
- The frontend is non-existant at this point... I am using the Foundation framework for just basic formatting at this point.
- Hope to add more features soon.

__Credits:__
Source for this exercise is based on the excellent series ["The PHP Practitioner"](https://laracasts.com/series/php-for-beginners) by Laracasts.
