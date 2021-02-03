### Requirement

- php (8.0)
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

$window = new Window(WindowEnum::topLevel());
$window->show();

$gtk->main();

return 0;
```