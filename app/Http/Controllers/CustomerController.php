<?php

namespace App\Http\Controllers;

use App\City;
use App\Customer;
use App\Http\Requests\CustomerCityRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::paginate(2);
        $cities = City::all();
        return view('customers.list', compact('customers', 'cities'));
    }

    public function create()
    {
        $cities = City::all();
        Session::flash('message', 'Thêm mới khách hàng');
        return view('customers.create', compact('cities'));
    }

    public function store(CustomerCityRequest $request)
    {
        $customer = new Customer();
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        $customer->save();
        Session::flash('message', 'Thêm mới thành công');
        return redirect()->route('customers.index');
    }

    public function edit($id)
    {
        $customer = Customer::findOrFail($id);
        $cities = City::all();
        Session::flash('message', 'Chỉnh sửa khách hàng');
        return view('customers.edit', compact('customer', 'cities'));
    }

    public function update(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        $customer->name = $request->name;
        $customer->dob = $request->dob;
        $customer->phone = $request->phone;
        $customer->email = $request->email;
        $customer->city_id = $request->city_id;
        $customer->save();
        Session::flash('message', 'Chỉnh sửa thành công');
        return redirect()->route('customers.index');
    }

    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        Session::flash('message', 'Chi tiết khách hàng');
        return view('customers.show', compact('customer'));
    }

    public function delete($id)
    {
        $city = City::all();
        $customer = Customer::findOrFail($id);
        Session::flash('message', 'Xóa khách hàng');
        return view('customers.delete', compact('customer', 'city'));
    }

    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        Session::flash('message', 'Xóa thành công');
        return redirect()->route('customers.index');
    }

    public function search(Request $request)

    {

        $keyword = $request->input('search');

        if (!$keyword) {

            return redirect()->route('customers.index');

        }

        $customers = Customer::where('name', 'LIKE', '%' . $keyword . '%')->paginate(2);


        $cities = City::all();

        return view('customers.list', compact('customers', 'cities'));


    }

}
