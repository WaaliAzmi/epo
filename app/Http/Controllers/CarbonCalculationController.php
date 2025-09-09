<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarbonCalculationController extends Controller
{
    public function calculate(Request $request)
    {
        $request->validate([
            'activity_type' => 'required|string',
            'quantity' => 'required|numeric|min:0.01',
        ]);

        $credits = $this->calculateCarbonCredits(
            $request->activity_type,
            $request->quantity
        );

        return response()->json([
            'status' => 'success',
            'credits' => $credits,
        ]);
    }

    private function calculateCarbonCredits($type, $quantity)
    {
        $creditsPerUnit = match ($type) {
            'tree_planting' => 0.022,
            'electricity' => 0.000475,
            'transportation' => 0.239,
            'shipping' => 0.020,
            'solar_installation' => 0.060,
            default => 0,
        };

        return round($quantity * $creditsPerUnit, 3);
    }
}
