<?php

namespace App\Http\Controllers;
use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(Request $request){

//        Gọi hết toàn bộ dữ liệu
//        $customers = Customer::all();
        $customers = Customer::where('active',$request->query('active',1 ))->get();

        return view('customer.index',compact('customers'));
    }
    protected function create(){
//        dùng nếu cắt edit và create thành blade form
//        $customer = new Customer();

//        return view('customer.create', compact('customer'));
        return view('customer.create');

    }
    protected  function store(){
//        $data = request()->validate([
//            'name'  => 'required',
//            'email' =>  'required|email',
//            'note'  =>  ''
//
//        ]);

//        Customer::create($data);
        $customer = Customer::create($this->validatedData());
//        dd($data);

        return redirect('/customers/' .$customer->id);
    }
    public function show(Customer $customer){
//        Another way
//        $customer= Customer::findOrFail($customerId);

        return view('customer.show',compact('customer'));
    }

    protected function edit(Customer $customer){
        return view('customer.edit',compact('customer'));
    }

    protected  function update(Customer $customer){
//            $data = request()->validate([
//                'name'  => 'required',
//                'email' =>  'required|email',
//                'note'  =>  ''
//
//            ]);

            $customer->update($this->validatedData());

            return redirect('/customers');
        }

        protected function destroy(Customer $customer){
        $customer -> delete();
        return redirect('/customers');
        }

        protected function validatedData(){
            return request()->validate([
                'name'  => 'required',
                'email' =>  'required|email',
                'note'  =>  ''

            ]);
        }
}
