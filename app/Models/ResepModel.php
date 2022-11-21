<?php

namespace App\Models;

use CodeIgniter\Model;

class ResepModel extends Model
{
    protected $table = 'resep';
    protected $useTimestamps = true;
    protected $allowedFields = ['judul', 'slug', 'deskripsi', 'bahan', 'langkah', 'foto', 'suka'];
    protected $judul = 'judul';
    protected $deskripsi = 'deskripsi';
    protected $bahan = 'bahan';
    protected $langkah = 'langkah';
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