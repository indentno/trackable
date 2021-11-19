# trackable

> The easiest way to respect the "do not track" header in Laravel

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