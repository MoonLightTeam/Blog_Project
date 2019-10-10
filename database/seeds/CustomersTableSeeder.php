<?php

use App\Customer;
use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = new Customer();
        $customer->id = '1';
        $customer->name = 'a';
        $customer->dob = '01-01-2001';
        $customer->phone = '0123456789';
        $customer->email = 'a@gmail.com';
        $customer = new Customer();
        $customer->id = '2';
        $customer->name = 'b';
        $customer->dob = '01-01-2001';
        $customer->phone = '0123456789';
        $customer->email = 'b@gmail.com';
    }
}
