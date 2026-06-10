<?php
namespace App\Controllers;
use App\Models\BukuModel;

class BukuController extends BaseController
{
    protected $bukuModel;

    public function __construct()
    {
        $this->bukuModel = new BukuModel();
    }

    public function index()
    {
        $data['buku'] = $this->bukuModel->findAll();
        return view('buku_index', $data);
    }

    public function create()
    {
        return view('buku_create');
    }

    public function store()
    {
        // Menyimpan data, validasi otomatis jalan dari Model
        if (!$this->bukuModel->save($this->request->getPost())) {
            return redirect()->back()->withInput()->with('errors', $this->bukuModel->errors());
        }
        return redirect()->to('/buku');
    }

    public function edit($id)
    {
        $data['buku'] = $this->bukuModel->find($id);
        return view('buku_edit', $data);
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        $data['id'] = $id; // Masukkan ID untuk diupdate

        if (!$this->bukuModel->save($data)) {
            return redirect()->back()->withInput()->with('errors', $this->bukuModel->errors());
        }
        return redirect()->to('/buku');
    }

    public function delete($id)
    {
        $this->bukuModel->delete($id);
        return redirect()->to('/buku');
    }
}