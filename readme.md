# trackable

> The easiest way to respect the "do not track" header in Laravel

[![](https://img.shields.io/travis/s360digital/trackable/master.svg?style=flat-square)](https://travis-ci.org/s360digital/trackable/builds)
[![](https://img.shields.io/packagist/dt/s360digital/trackable.svg?style=flat-square)](https://packagist.org/packages/s360digital/trackable)
[![](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)](https://opensource.org/licenses/MIT)
[![](https://img.shields.io/badge/PRs-welcome-brightgreen.svg?style=flat-square)](http://makeapullrequest.com)
[![](https://img.shields.io/badge/code_style-PSR_2-blue.svg?style=flat-square)](http://www.php-fig.org/psr/psr-2/)

### Installation
```bash
composer require s360digital/trackable
```

### API
`Trackable` will expose the following Blade directives and global helper functions to your Laravel app.

#### Blade directives
```blade
@trackable
  User allows tracking.
  Put Google Tag Manager and other tracking scripts here.
@endtrackable

@untrackable
  User have enabled "do not track" it their browser
@enduntrackable
```

#### Global functions
```php
if (trackable()) {
    // User is trackable
}

if (untrackable()) {
    // User have enabled "do not track" it their browser
}
```