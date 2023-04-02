<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGuestRequest;
use App\Http\Requests\UpdateGuestRequest;
use App\Models\Guest;
use App\Services\AddressService;
use Illuminate\Support\Facades\Http;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('guest.index', [
            'guests' => Guest::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(AddressService $addressService)
    {
        $provinces = $addressService->getProvinces();
        $cities = $addressService->getCities();
        return view('guest.add', compact('provinces', 'cities'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreGuestRequest $request)
    {
        Guest::create($request->validated());
        return redirect()->route('guest.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateGuestRequest $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
