<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table = 'resep';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'deskripsi', 'bahan_dan_langkah', 'foto', 'suka'];
    protected $judul = 'judul';
    protected $deskripsi = 'deskripsi';
    protected $bahan_dan_langkah = 'bahan_dan_langkah';
    protected $foto = 'foto';
    protected $suka = 'suka';
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function getResep($slug = false) {
        if ($slug == false) {
            return $this->findAll();
        }
        return $this->where(['slug' => $slug])->first();
    }
}