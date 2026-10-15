<?php

namespace App\Controllers;

use App\Models\CustomerModel;

class Customers extends BaseController
{
    public function index()
    {
        return view('customers', ['title' => 'Customers | POS', 'customers' => (new CustomerModel())->orderBy('id', 'DESC')->findAll()]);
    }

    public function new()
    {
        $model = new CustomerModel();
        if (strtolower($this->request->getMethod()) === 'post') {
            $rules = ['full_name' => 'required|min_length[2]', 'email' => 'required|valid_email', 'phone' => 'permit_empty|max_length[20]'];
            if ($this->validate($rules)) {
                $model->insert([
                    'full_name' => trim($this->request->getPost('full_name')),
                    'email' => trim($this->request->getPost('email')),
                    'phone' => trim((string) $this->request->getPost('phone')),
                    'created_at' => date('Y-m-d H:i:s'),
                ]);
                return redirect()->to('/customers')->with('message', 'Customer created successfully.');
            }
        }
        return view('customer_form', ['title' => 'New Customer | POS', 'customer' => null]);
    }

    public function edit(int $id)
    {
        $model = new CustomerModel();
        $customer = $model->find($id);
        if (! $customer) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Customer not found');
        }
        if (strtolower($this->request->getMethod()) === 'post') {
            $rules = ['full_name' => 'required|min_length[2]', 'email' => 'required|valid_email', 'phone' => 'permit_empty|max_length[20]'];
            if ($this->validate($rules)) {
                $model->update($id, ['full_name' => trim($this->request->getPost('full_name')), 'email' => trim($this->request->getPost('email')), 'phone' => trim((string) $this->request->getPost('phone'))]);
                return redirect()->to('/customers')->with('message', 'Customer updated successfully.');
            }
        }
        return view('customer_form', ['title' => 'Edit Customer | POS', 'customer' => $customer]);
    }
}
