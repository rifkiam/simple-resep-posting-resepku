<?php

namespace App\Controllers;
use App\Models\ResepModel;
use CodeIgniter\CodeIgniter;

class Resep extends BaseController
{
    protected $resepModel;
    public function __construct()
    {
        $this->resepModel = new ResepModel();        
    }

    public function index()
    {
        $data = [
            'title' =>  'Judul Resep',
            'resep' => $this->resepModel->getResep(),
        ];
        
        return view('mainpages/dashboard', $data);
    }

    public function detail($slug)
    {
        $data = [
            // 'title' => 'Detail Resep',
            'resep' => $this->resepModel->getResep($slug),
        ];

        //jika komik tidak ada dalam tabel
        if (empty($data['resep'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Resep ' . $slug . ' tidak ditemukan');
            
        }
        return view('mainpages/detail', $data);
    }


    public function saveresep() 
        {
            //validasi form
                if (!$this->validate([
                    'judul' => [ // string 'judul' ini
                        'rules' => 'required',
                        'errors' => [
                            'required' => 'Title field must be filled',
                            // 'is_unique' => 'Title is already addded' //dapat menggunakan field untuk me refer ke string 'judul'
                        ]
                    ],
                    'foto' => [
                        'rules' => 'max_size[foto,8192]|is_image[foto]|mime_in[foto,image/jpg,image/jpeg,image/png]',
                        'errors' => [
                            'max_size' => 'File max size is 1MB',
                            'is_image' => 'File must be an image',
                            'mime_in' => 'Image format not supported',
                        ]
                    ] // key 'sampul' didapat dari name di page html, arti rulesnya adalah sampul wajib di upload
                    ])) 
                    {
                        // $validation = \Config\Services::validation();
                        // dd($validation);
                        // return redirect()->to('/comics/create')->withInput()->with('validation', $validation);
                        return redirect()->to('/addresep')->withInput();
                    }

            //ambil gambar
            $file_sampul = $this->request->getFile('foto');
            
            //periksa apakah user upload gambar atau tidak
            
            //bisa ganti nama file gambar dengan nama random dengan:
            $nama_sampul = $file_sampul->getRandomName();
    
            //pindah gambar
            $file_sampul->move('img', $nama_sampul); //parameter kedua = nama sampul
            //ambil nama file
            //$nama_sampul = $file_sampul->getName();


            $slug = url_title($this->request->getVar('judul'), '-', true);
            // dd($this->request->getVar());
            // dd($nama_sampul);
            // dd("test");
            $this->resepModel->save([
                'judul' => $this->request->getVar('judul'),
                'slug' => $slug,
                'deskripsi' => $this->request->getVar('deskripsi'),
                'bahan' => $this->request->getVar('bahan'),
                'langkah' => $this->request->getVar('langkah'),
                'foto' => $nama_sampul,//$this->request->getVar('sampul')
                'suka' => 0,
                'id_user' => session()->get('id_user')
            ]);
            //getVar merujuk kepada html tag yang memiliki attr dengan nama yang sama
            session()->setFlashdata('pesan', 'Data successfully added');

            return redirect()->to('/dashboard');
        }
}