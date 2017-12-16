# Laravel Repository

## Installtion

```bash
$ composer require tuxboy/laravel-repository
```

And run `composer update` or `composer install -o`

Then add Service provider to `config/app.php`

```php
'providers' => [
    // ...
    
];
```

## Quick start

In your project, create a Repository file that is BaseRepository:

```php
namespace App\Repositories;

use App\Models\Ticket;
use TuxBoy\Repository\Repositories\BaseRepository;

class TicketRepository extends BaseRepository
{
    use Sortable;

    /**
     * @var Ticket
     */
    protected $model;

    /**
     * TicketRepository constructor.
     * @param Ticket $ticket
     */
    public function __construct(Ticket $ticket)
    {
        $this->model = $ticket;
    }
}    
```

So in your controller, you can use it via Laravel DI : 

```php
namespace App\Http\Controllers;

use App\Repositories\TicketRepository;

class TicketsController extends Controller
{
    /**
     * @var TicketRepository
     */
    private $ticketRepository;

    public function __construct(TicketRepository $ticketRepository)
    {
        $this->ticketRepository = $ticketRepository;
    }
    
    // ...
}   
```
