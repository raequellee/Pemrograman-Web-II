<?php
namespace App\Models;
use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table = 'buku';
    protected $primaryKey = 'id';
    protected $allowedFields = ['judul', 'penulis', 'penerbit', 'tahun_terbit'];

    protected $validationRules = [
        'judul'        => 'required|string',
        'penulis'      => 'required|string',
        'penerbit'     => 'required|string',
        'tahun_terbit' => 'required|numeric|greater_than[1800]|less_than[2024]'
    ];

    protected $validationMessages = [
        'judul'        => ['required' => 'Judul harus diisi.', 'string' => 'Judul harus berupa teks.'],
        'penulis'      => ['required' => 'Penulis harus diisi.', 'string' => 'Penulis harus berupa teks.'],
        'penerbit'     => ['required' => 'Penerbit harus diisi.', 'string' => 'Penerbit harus berupa teks.'],
        'tahun_terbit' => [
            'required'     => 'Tahun terbit harus diisi.',
            'numeric'      => 'Tahun terbit harus berupa angka.',
            'greater_than' => 'Tahun terbit harus lebih dari 1800.',
            'less_than'    => 'Tahun terbit harus kurang dari 2024.'
        ]
    ];
}