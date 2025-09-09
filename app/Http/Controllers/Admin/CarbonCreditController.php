<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CarbonActivity;
class CarbonCreditController extends Controller
{

    public function create()
    {
        return view('carbon.create');
    }

    /**
     * Store activity and calculate carbon credits
     */
    public function store(Request $request)
    {
        $request->validate([
            'activity_type' => 'required|string',
            'quantity' => 'required|numeric|min:0.01',
            'unit' => 'required|string',
        ]);

        $carbonCredits = $this->calculateCarbonCredits(
            $request->activity_type,
            $request->quantity
        );

        CarbonActivity::create([
            'activity_type' => $request->activity_type,
            'quantity' => $request->quantity,
            'unit' => $request->unit,
            'carbon_credits' => $carbonCredits,
        ]);

        return redirect()->route('carbon.index')  // <-- REDIRECT TO INDEX PAGE
                         ->with('success', 'Activity added successfully!');
    }

    /**
     * Display list of carbon activities
     */
    public function index()
    {
         $activities = CarbonActivity::latest()->get();
            return view('carbon.index', compact('activities'));
    }

    /**
     * Calculate carbon credits based on activity
     */
    private function calculateCarbonCredits($type, $quantity)
    {
        $creditsPerUnit = match ($type) {
            'tree_planting' => 0.022,          // 1 tree absorbs ~22 kg CO₂/year = 0.022 tons
            'electricity' => 0.000475,         // 0.475 kg CO₂ per kWh (source: IEA global average)
            'transportation' => 0.239,         // 2.39 kg CO₂ per liter gasoline = 0.00239 tons → simplified: 0.239 per 10L = 0.0239 per L
            'shipping' => 0.020,               // 20 g CO₂ per ton-km = 0.00002 tons → realistic: 0.020 per ton/km in some heavy shipping
            'solar_installation' => 0.060,     // ~60 kg CO₂ saved per m²/year = 0.060 tons
            default => 0
        };

        return round($quantity * $creditsPerUnit, 3);
    }
    public function destroy($id)
{
    $activity = CarbonActivity::findOrFail($id);
    $activity->delete();

    return redirect()->route('carbon.index')
                     ->with('success', 'Carbon activity deleted successfully!');
}

}
