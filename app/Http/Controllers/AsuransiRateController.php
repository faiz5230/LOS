<?php

namespace App\Http\Controllers;

use App\Models\TableCount;
use Illuminate\Http\Request;

class AsuransiRateController extends Controller
{
    public function getRate(Request $request)
    {
        $request->validate([
            'usia' => 'required|integer|min:18|max:65',
            'jangka_waktu' => 'required|integer|min:1|max:240',
        ]);

        $usia = (int) $request->usia;
        $jangka_waktu = (int) $request->jangka_waktu;

        // Query exact match; jika tidak ada, fallback ke nearest (misalnya, rate terdekat berdasarkan age range)
        $rate = TableCount::where('age', $usia)
                          ->where('jangka_waktu', $jangka_waktu)
                          ->value('rate');

        if (!$rate) {
            // Fallback: Cari nearest age (misalnya, age terdekat <= usia aktual)
            $rate = TableCount::where('age', '<=', $usia)
                              ->where('jangka_waktu', $jangka_waktu)
                              ->orderBy('age', 'desc')
                              ->value('rate') ?? 0;
        }

        return response()->json($rate ?? 0); // Return sebagai JSON untuk AJAX
    }
}