<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CityController extends Controller
{
    public function index()
    {
        $cities = City::paginate(2);
        return view('cities.list', compact('cities'));
    }

    public function create()
    {
        return view('cities.create');
    }

    public function store(Request $request)
    {
        $city = new City();
        $city->name = $request->name;
        $city->save();
        return redirect()->route('cities.index');
    }

    public function edit($id)
    {
        $city = City::findOrFail($id);
        return view('cities.edit', compact('city'));
    }

    public function update(Request $request, $id)
    {
        $city = City::findOrFail($id);
        $city->name = $request->name;
        $city->save();
        return redirect()->route('cities.index');
    }

    public function show($id)
    {
        $city = City::findOrFail($id);
        return view('cities.show', compact('city'));
    }

    public function delete($id)
    {
        $city = City::findOrFail($id);
        return view('cities.delete', compact('city'));
    }

    public function destroy($id)
    {
        $city = City::findOrFail($id);
        $city->delete();
        return redirect()->route('cities.index');
    }

    public function listCustomers($id)
    {
        $city = City::findOrFail($id);
        $customers = $city->customers;
        return view('cities.listCustomer', compact('customers', 'city'));
    }

}
