The project is moved to https://github.com/PHP-GTK/gtk

### Requirement

- php (8.1)
- ext-FFI
- gtk-3

**Installation**

```bash
composer require kmaestro/gtk
```

**Linux**
```bash
sudo apt-get install libgtk-3-dev
```

**Example:**

```php
require __DIR__ . '/vendor/autoload.php';

use Gtk3\Gtk;
use Gtk3\Gtk\Window;
use Gtk3\Enum\WindowEnum;

$gtk = Gtk::getInstance();

$gtk->init();

$window = new Window(WindowEnum::topLevel);
$window->widget()->show();

$gtk->main();

return 0;
```
