<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Repository\Admin\Customer\CustomerRepository;
use App\Repository\Admin\Phonezalo\PhonezaloRepository;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{


    protected $phonezaloRepository;

    protected $customerRepository;

    public function __construct(CustomerRepository $customerRepository, PhoneZaloRepository $phoneZaloRepository)
    {
        $this->customerRepository = $customerRepository;
        $this->phoneZaloRepository = $phoneZaloRepository;
    }
    public function index()
    {
        return view('admin.customer.index',[
            'customers' => $this->customerRepository->paginate(),
        ]);

    }

    public function create()
    {
        return view('admin.customer.form');
    }

    public function store(CustomerRequest $request)
    {
        $data = $request->all();
        $data['user_created'] = Auth::user()->name;
        $customer = $this->customerRepository->save($data);
        foreach ($data['phone_zalo'] as $phone) {
            $customer->phone_zalos()->create([
                'phone_zalo' => $phone,
        ]);
        }

        return redirect()->route('customer.index')->with(
            'success',
            'Creation completed successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        if (! $customer = $this->customerRepository->findById($id)) {
            abort(404);
        }
        return view('admin.customer.form', [
            'customer' => $customer,
        ]);
    }

    public function update(CustomerRequest $request, $id)
    {
        $data = $request->all();

        $customer = $this->customerRepository->save($request->all(), ['id' => $id]);

        $phones = [];
        foreach ($data['phone_zalo'] as $phone_zalo) {
            array_push($phones, ['phone_zalo' => $phone_zalo, 'customer_id'=> $id]);

        }
        $customer->phone_zalos()->delete();
        $customer->phone_zalos()->upsert($phones, 'phone_zalo');

        return redirect()->route('customer.index')->with(
            'success',
            'Updated completed successfully.'
        );
    }

    public function destroy($id)
    {
        $this->customerRepository->deleteById($id);

        return redirect()->route('customer.index');
    }
}
