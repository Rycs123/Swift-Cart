<?php

namespace App\Http\Livewire\Shop;

use Livewire\Component;

class Checkout extends Component
{
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $address;
    public $city;
    public $postalCode;
    public $formCheckout;


    public function mount()
    {
        $this->formCheckout = true;
    }
    public function render()
    {
        return view('livewire.shop.checkout');
    }

    public function checkout()
    {
        $this->validate(
            [
                'firstName' => 'required',
                'lastName' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'address' => 'required',
                'city' => 'required',
                'postalCode' => 'required',
            ]
        );
    }
}
