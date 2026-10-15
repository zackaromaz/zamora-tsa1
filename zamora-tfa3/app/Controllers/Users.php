<?php

namespace App\Controllers;

use App\Models\UserModel;

class Users extends BaseController
{
    public function index()
    {
        return view('users', ['title' => 'Users | POS', 'users' => (new UserModel())->orderBy('id', 'DESC')->findAll()]);
    }

    public function new()
    {
        if ($this->request->getMethod() === 'post') {
            $rules = ['username' => 'required|alpha_numeric|min_length[3]', 'full_name' => 'required|min_length[2]', 'email' => 'required|valid_email'];
            if ($this->validate($rules)) {
                $model = new UserModel();
                if ($model->where('username', trim($this->request->getPost('username')))->first()) {
                    session()->setFlashdata('error', 'That username is already in use.');
                } else {
                    $model->insert(['username' => trim($this->request->getPost('username')), 'full_name' => trim($this->request->getPost('full_name')), 'email' => trim($this->request->getPost('email')), 'created_at' => date('Y-m-d H:i:s')]);
                    return redirect()->to('/users')->with('message', 'User created successfully.');
                }
            }
        }
        return view('user_form', ['title' => 'New User | POS', 'user' => null]);
    }

    public function edit(int $id)
    {
        $model = new UserModel();
        $user = $model->find($id);
        if (! $user) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('User not found');
        }
        if ($this->request->getMethod() === 'post') {
            $rules = ['username' => 'required|alpha_numeric|min_length[3]', 'full_name' => 'required|min_length[2]', 'email' => 'required|valid_email'];
            $avatar = $this->request->getFile('avatar');
            if ($avatar && $avatar->getError() !== UPLOAD_ERR_NO_FILE) {
                $rules['avatar'] = 'is_image[avatar]|mime_in[avatar,image/jpg,image/jpeg,image/png]|max_size[avatar,2048]';
            }
            if ($this->validate($rules)) {
                $username = trim($this->request->getPost('username'));
                $existing = $model->where('username', $username)->where('id !=', $id)->first();
                if ($existing) {
                    session()->setFlashdata('error', 'That username is already in use.');
                } else {
                    $data = ['username' => $username, 'full_name' => trim($this->request->getPost('full_name')), 'email' => trim($this->request->getPost('email'))];
                    if ($avatar && $avatar->isValid() && ! $avatar->hasMoved()) {
                        $filename = bin2hex(random_bytes(12)) . '.' . strtolower($avatar->getExtension());
                        $destination = FCPATH . 'uploads/avatars/' . $filename;
                        $avatar->move(FCPATH . 'uploads/avatars', $filename);
                        service('image')->withFile($destination)->fit(300, 300)->save($destination);
                        $data['avatar'] = $filename;
                    }
                    $model->update($id, $data);
                    return redirect()->to('/users')->with('message', 'User updated successfully.');
                }
            }
        }
        return view('user_form', ['title' => 'Edit User | POS', 'user' => $user]);
    }
}
