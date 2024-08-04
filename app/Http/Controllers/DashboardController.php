<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Penyewa;
use App\Models\Kendaraan;
use App\Models\Kwitansi;
use App\Models\Sewa;
use App\Models\Invoice;

class DashboardController extends Controller
{
    public function index()
    {
        $totalRenters = Penyewa::count();
        $totalVehicles = Kendaraan::count();
        $totalReceipts = Kwitansi::count();
        $totalRentals = Sewa::count();
        $totalInvoices = Invoice::count();

        return view('dashboard', [
            'totalRenters' => $totalRenters,
            'totalVehicles' => $totalVehicles,
            'totalReceipts' => $totalReceipts,
            'totalRentals' => $totalRentals,
            'totalInvoices' => $totalInvoices,
        ]);
    }
}


