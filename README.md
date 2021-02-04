# PSR-8 Hug

This repository holds all interfaces/classes/traits related to [PSR-8](https://github.com/php-fig/fig-standards/blob/master/proposed/psr-8-hug/psr-8-hug.md).

Note that this is not a huggable of its own. 
It is merely an interface that describes a huggable. 
See the specification for more details.

## Installation

```bash
composer require astrotomic/psr-8
```

## Usage

If you need to hug, you can use the interface like this:

```php
use Astrotomic\Hug\Huggable;

class HugController
{
    public function __invoke(Huggable $hugger, Huggable $huggable)
    {
        $hugger->hug($huggable);
    }
}
```

## Credits

- 🧑‍💻 [Tom Witkowski](https://github.com/Gummibeer)
- 📝 [Larry Garfield](https://github.com/Crell) - Editor of original PSR
- ‍💌 [Tobias van Beek](https://github.com/tvbeek) - Idea for the package after a [postcard](https://twitter.com/devgummibeer/status/1357429609348874240)
- 🐶 Yoda - [Reason](https://gummibeer.dev/blog/2021/yoda) for [Tobias](https://github.com/tvbeek) to send a [postcard](https://twitter.com/devgummibeer/status/1357429609348874240)
- [All Contributors](https://github.com/Astrotomic/psr-8/graphs/contributors)