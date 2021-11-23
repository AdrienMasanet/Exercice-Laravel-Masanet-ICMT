<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DashboardMenuItem;
use App\Models\Computer;
use App\Models\User;
use App\Models\Lend;

class AdminController extends Controller
{
    private $menuItems;

    public function __construct()
    {
        $this->menuItems = [
            new DashboardMenuItem('Vue d\'ensemble', '/admin', 'fas fa-chart-pie'),
            new DashboardMenuItem('separator'),
            new DashboardMenuItem('Ordinateurs', '/admin/ordinateurs', 'fas fa-laptop', Computer::class),
            new DashboardMenuItem('Comptes', '/admin/comptes', 'fas fa-user-friends', User::class),
            new DashboardMenuItem('Locations', '/admin/locations', 'far fa-handshake', Lend::class),
            new DashboardMenuItem('separator'),
            new DashboardMenuItem('Paramètres', '/admin/parametres', 'fas fa-cogs'),
        ];
    }

    public function index()
    {
        $menuItems = $this->menuItems;

        return view('admin.index', compact('menuItems'));
    }

    public function computersDataTable()
    {
        $menuItems = $this->menuItems;
        $computers = Computer::all();

        return view('admin.computers', compact('menuItems', 'computers'));
    }
}
