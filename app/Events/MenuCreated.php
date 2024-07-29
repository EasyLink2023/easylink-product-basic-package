<?php
namespace App\Events;

use App\Models\Menu;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class MenuCreated
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $menu;

    public function __construct(Menu $menu)
    {
        $this->menu = $menu;
    }
}