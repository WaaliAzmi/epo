<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarbonActivity;
use App\Models\CreditSaleRequest;
use App\Models\BuyRequest;

class CarbonActivityController extends Controller
{
    public function buyCredits()
    {
        return view('trading.buy');
    }

    public function submitBuyCredits(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'credits' => 'required|numeric|min:0.01',
        'reason' => 'required|string',
        'organization' => 'nullable|string|max:255',
        'verification_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('verification_image')) {
        $imageName = time() . '_' . $request->verification_image->getClientOriginalName();
        $request->verification_image->storeAs('verification_images', $imageName, 'public');
        $validated['verification_image'] = 'verification_images/' . $imageName;
    }

    BuyRequest::create(array_merge($validated, [
        'user_id' => auth()->id()
    ]));

    return redirect()->back()->with('success', 'Buy credits request submitted successfully!');
}


    public function sellCredits()
    {
        return view('trading.sell');
    }

    public function submitSellRequest(Request $request)
    {
        $validated = $request->validate([
            'credits' => 'required|numeric|min:0.01',
            'verification_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'contact' => 'required|string',
            'bank' => 'required|string',
        ]);

        // Save image
        $path = $request->file('verification_image')->store('verifications', 'public');

        CreditSaleRequest::create([
            'credits' => $validated['credits'],
            'verification_image' => $path,
            'contact' => $validated['contact'],
            'bank' => $validated['bank'],
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Sell request submitted successfully!');
    }

    public function create()
    {
        return view('carbon.create');
    }

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

        return view('carbon.create', [
            'calculatedCredits' => $carbonCredits
        ])->with('success', 'Activity added and credits calculated!');
    }

    public function index()
    {
        $activities = CarbonActivity::latest()->get();
        return view('carbon.index', compact('activities'));
    }

    /**
     * Core carbon credit calculation logic
     */
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

    /**
     * Handle AJAX carbon credits calculation (called dynamically).
     */
    public function ajaxCalculate(Request $request)
    {
        $request->validate([
            'activity_type' => 'required|string',
            'quantity' => 'required|numeric|min:0.01',
            'unit' => 'required|string|max:50',
        ]);

        $credits = $this->calculateCarbonCredits(
            $request->activity_type,
            $request->quantity
        );

        return response()->json([
            'status' => 'success',
            'credits' => $credits
        ]);
    }

    /**
     * API endpoint for submitting buy requests
     */
    public function apiSubmitBuyCredits(Request $request)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email',
                'phone' => 'required|string|max:20',
                'credits' => 'required|integer|min:1',
                'reason' => 'required|string|max:500',
                'organization' => 'nullable|string|max:255',
            ]);

            // Save validated data into the database
            BuyRequest::create(array_merge($validated, [
                'user_id' => auth()->id()
            ]));

            return response()->json([
                'success' => true,
                'message' => 'Buy request submitted successfully!'
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while submitting the request'
            ], 500);
        }
    }

    /**
     * API endpoint for submitting sell requests
     */
    public function apiSubmitSellRequest(Request $request)
    {
        try {
            $validated = $request->validate([
                'credits' => 'required|numeric|min:0.01',
                'verification_image' => 'required|string', // Base64 encoded image
                'contact' => 'required|string',
                'bank' => 'required|string',
            ]);

            // Decode base64 image and save it
            $imageData = base64_decode($validated['verification_image']);
            $imageName = 'verification_' . time() . '.jpg';
            $path = 'verifications/' . $imageName;
            
            // Save the image to storage
            \Storage::disk('public')->put($path, $imageData);

            CreditSaleRequest::create([
                'credits' => $validated['credits'],
                'verification_image' => $path,
                'contact' => $validated['contact'],
                'bank' => $validated['bank'],
                'user_id' => auth()->id(),
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Sell request submitted successfully!'
            ], 201);
        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'An error occurred while submitting the request'
            ], 500);
        }
    }

    /**
     * API endpoint to get authenticated user's buy requests
     */
    public function apiUserBuyRequests(Request $request)
    {
        $userId = auth()->id();
        $buyRequests = \App\Models\BuyRequest::where('user_id', $userId)->get();
        return response()->json(['buy_requests' => $buyRequests]);
    }

    /**
     * API endpoint to get authenticated user's sell requests
     */
    public function apiUserSellRequests(Request $request)
    {
        $userId = auth()->id();
        $sellRequests = \App\Models\CreditSaleRequest::where('user_id', $userId)->get();
        return response()->json(['sell_requests' => $sellRequests]);
    }
}
