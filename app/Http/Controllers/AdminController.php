<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Helpers\DashboardMenuItem;
use App\Models\Computer;
use App\Models\Brand;
use App\Models\Component;
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
            new DashboardMenuItem('Comptes', '/admin/comptes', 'fas fa-user-friends', User::class),
            new DashboardMenuItem('Locations', '/admin/locations', 'far fa-handshake', Lend::class),
            new DashboardMenuItem('Demandes de location', '/admin/demandes-de-location', 'far fa-calendar', Request::class),
            new DashboardMenuItem('Ordinateurs', '/admin/ordinateurs', 'fas fa-laptop', Computer::class),
            new DashboardMenuItem('Composants', '/admin/composants', 'fas fa-puzzle-piece', Component::class),
            new DashboardMenuItem('Marques', '/admin/marques', 'far fa-copyright', Brand::class),
            new DashboardMenuItem('Réparations', '/admin/reparations', 'fas fa-tools', Repair::class),
            new DashboardMenuItem('Réparateurs', '/admin/reparateurs', 'fas fa-toolbox', Repairer::class),
            new DashboardMenuItem('separator'),
            new DashboardMenuItem('Paramètres', '/admin/parametres', 'fas fa-cogs'),
            new DashboardMenuItem('Se déconnecter', '/logout', 'fas fa-sign-out-alt'),
        ];
    }

    public function index()
    {
        $menuItems = $this->menuItems;

        return view('admin.index', compact('menuItems'));
    }

    public function parameters()
    {
        $menuItems = $this->menuItems;

        return view('admin.parameters', compact('menuItems'));
    }

    public function accountsDataTable()
    {
        $menuItems = $this->menuItems;

        return view('admin.accounts', compact('menuItems'));
    }

    public function lendsDataTable()
    {
        $menuItems = $this->menuItems;

        return view('admin.lends', compact('menuItems'));
    }

    public function requestsDataTable()
    {
        $menuItems = $this->menuItems;

        return view('admin.requests', compact('menuItems'));
    }

    public function computersDataTable()
    {
        $menuItems = $this->menuItems;

        return view('admin.computers', compact('menuItems'));
    }

    public function componentsDataTable()
    {
        $menuItems = $this->menuItems;

        return view('admin.components', compact('menuItems'));
    }

    public function brandsDataTable()
    {
        $menuItems = $this->menuItems;

        return view('admin.brands', compact('menuItems'));
    }

    public function repairsDataTable()
    {
        $menuItems = $this->menuItems;

        return view('admin.repairs', compact('menuItems'));
    }

    public function repairersDataTable()
    {
        $menuItems = $this->menuItems;

        return view('admin.repairers', compact('menuItems'));
    }
}
