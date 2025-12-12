<?php

namespace App\Controllers;

use App\Models\DBtable5_2;

class Table5_2 extends BaseController
{
    // ============================================
    // INDEX
    // ============================================
    public function index()
    {
        $model = new DBtable5_2();
        $data['prasarana'] = $model->findAll();

        return view('table5_2', $data);
    }

    // ============================================
    // CREATE
    // ============================================
    public function create()
    {
        $model = new DBtable5_2();
        
        if ($this->request->getMethod() === 'post') {
            $data = [
                'nama_prasarana' => $this->request->getPost('nama_prasarana'),
                'daya_tampung' => $this->request->getPost('daya_tampung'),
                'luas_ruang' => $this->request->getPost('luas_ruang'),
                'status_kepemilikan' => $this->request->getPost('status_kepemilikan'),
                'status_lisensi' => $this->request->getPost('status_lisensi'),
                'perangkat' => $this->request->getPost('perangkat'),
                'kolom7' => $this->request->getPost('kolom7'),
                'link_bukti' => $this->request->getPost('link_bukti'),
            ];

            $model->insert($data);

            return redirect()->to(base_url('table/table5_2'))->with('success', 'Data berhasil ditambahkan.');
        }

        return redirect()->to(base_url('table/table5_2'));
    }

    // ============================================
    // EDIT (GET + POST UPDATE)
    // ============================================
    public function edit($id = null)
    {
        $model = new DBtable5_2();
        
        // Jika submit POST, berarti update
        if ($this->request->getMethod() === 'post') {
            $data = [
                'nama_prasarana' => $this->request->getPost('nama_prasarana'),
                'daya_tampung' => $this->request->getPost('daya_tampung'),
                'luas_ruang' => $this->request->getPost('luas_ruang'),
                'status_kepemilikan' => $this->request->getPost('status_kepemilikan'),
                'status_lisensi' => $this->request->getPost('status_lisensi'),
                'perangkat' => $this->request->getPost('perangkat'),
                'kolom7' => $this->request->getPost('kolom7'),
                'link_bukti' => $this->request->getPost('link_bukti'),
            ];

            $model->update($id, $data);

            return redirect()->to(base_url('table/table5_2'))->with('success', 'Data berhasil diubah.');
        }

        // Tampilkan halaman edit
        $data['prasarana'] = $model->find($id);

        if (empty($data['prasarana'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Data Prasarana tidak ditemukan.');
        }

        return view('edittable5_2', $data);
    }

    // =======================================================
    // UPDATE (KHUSUS POST table/table5_2/{id}/update)
    // =======================================================
    public function update($id)
    {
        $model = new DBtable5_2();

        $data = [
            'nama_prasarana' => $this->request->getPost('nama_prasarana'),
            'daya_tampung' => $this->request->getPost('daya_tampung'),
            'luas_ruang' => $this->request->getPost('luas_ruang'),
            'status_kepemilikan' => $this->request->getPost('status_kepemilikan'),
            'status_lisensi' => $this->request->getPost('status_lisensi'),
            'perangkat' => $this->request->getPost('perangkat'),
            'kolom7' => $this->request->getPost('kolom7'),
            'link_bukti' => $this->request->getPost('link_bukti'),
        ];

        $model->update($id, $data);

        return redirect()->to(base_url('table/table5_2'))->with('success', 'Data berhasil diubah.');
    }

    // ============================================
    // DELETE
    // ============================================
    public function delete($id = null)
    {
        $model = new DBtable5_2();
        
        if ($model->delete($id)) {
            return redirect()->to(base_url('table/table5_2'))->with('error', 'Data berhasil dihapus.');
        }

        return redirect()->to(base_url('table/table5_2'))->with('error', 'Gagal menghapus data.');
    }
}
