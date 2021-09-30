<?php 

namespace App\Controllers;
 
class Detail extends BaseController{
    protected $db, $builder;
    public function __construct()
    {
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
    public function laporan($id){
        $data = [
            'title' => 'Detail Laporan',
            'pengaturan' => '',
            'laporan' => 'active',
            'pelajar' => '',
            'sekolah' => '',
            'guru'  => '',
            'insert' => '',
        ];

        //nama pelajar, nis pelajar, jenis kelamin, no hp, 
        //nama perusahaan, nama pembimbing, nama sekolah, nama guru
        //hari/tanggal laporan, kegiatan,keterangan, status

        //laporan->pelajar | pelajar->pembimbing_groups | pelajar->perusahaan_groups | pelajar->guru_groups | pelajar->sekolah_groups
        //perusahaan_groups->perusahaan | pembimbing_groups->pembimbing 
        //sekolah_groups->sekolah | guru_groups->guru


        $this->builder->select('pelajar.full_name as nama_pelajar, pelajar.nis, pelajar.jenis_kelamin, pelajar.no_hp, perusahaan.nama_pt, pembimbing.full_name as nama_pembimbing, sekolah.nama_sekolah, guru.full_name as nama_guru, laporan.hari, laporan.tanggal, laporan.kegiatan, laporan.keterangan, laporan.approve_guru as status_guru, laporan.approve_pembimbing as status_pembimbing, laporan.id');
        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        // $this->builder->join('pembimbing', 'users.id = pembimbing.user_id');
        // $this->builder->join('guru', 'users.id = guru.user_id');
        // $this->builder->join('pembimbing_perusahaan_groups', 'pembimbing.id = pembimbing_perusahaan_groups.pembimbing_id');
        // $this->builder->join('pembimbing_groups', 'pelajar.id = pembimbing_groups.')
        // $this->builder->join('perusahaan', 'pembimbing_perusahaan_groups.perusahaan_id = perusahaan.id');
        $this->builder->join('laporan', 'pelajar.id = laporan.pelajar_id');
        $this->builder->join('pembimbing_groups', 'pelajar.id = pembimbing_groups.pelajar_id');
        $this->builder->join('perusahaan_groups', 'pelajar.id = perusahaan_groups.user_id');
        $this->builder->join('guru_groups', 'pelajar.id = guru_groups.user_id');
        $this->builder->join('sekolah_groups', 'pelajar.id = sekolah_groups.user_id');
        $this->builder->join('pembimbing', 'pembimbing_groups.pembimbing_id = pembimbing.id');
        $this->builder->join('perusahaan', 'perusahaan_groups.perusahaan_id = perusahaan.id');
        $this->builder->join('guru', 'guru_groups.guru_id = guru.id');
        $this->builder->join('sekolah', 'sekolah_groups.sekolah_id = sekolah.id');
        $query = $this->builder->getWhere(['laporan.id' =>  $id]);

        $data['laporans'] = $query->getFirstRow('array');


        return view('user/detail/laporan', $data);
    }
    public function pembimbing(){
        $this->builder->select('pembimbing.id');
        $this->builder->join('pembimbing', 'users.id = pembimbing.user_id');
        $query = $this->builder->getWhere(['users.id' => user()->id]);

        $builderlaporan = $this->db->table('laporan');
        $data = [
            'approve_pembimbing' => $this->request->getVar('pembimbing'),
            'id_pembimbing' => $query->getFirstRow('array'),
        ];
        $builderlaporan->update($data, ['id' => $this->request->getVar('id_laporan')]);
        return redirect()->to(base_url('pembimbing/laporan'));
    }
    public function guru(){
        $this->builder->select('guru.id');
        $this->builder->join('guru', 'users.id = guru.user_id');
        $query = $this->builder->getWhere(['users.id' => user()->id]);

        $builderlaporan = $this->db->table('laporan');
        $data = [
            'approve_guru' => $this->request->getVar('gurupembimbing'),
            'id_guru'   => $query->getFirstRow('array')
        ];
        $builderlaporan->update($data, ['id' => $this->request->getVar('id_laporan')]);
        return redirect()->to(base_url('guru/laporan'));
    }
    public function pelajar($id){
        
        $data = [
            'title' => 'Detail Laporan',
            'pengaturan' => '',
            'laporan' => '',
            'pelajar' => 'active',
            'sekolah' => '',
            'guru'  => '',
            'insert' => '',
        ];

        //users, pelajar, sekolah, 
        //username, email, no hp, asal sekolah, kelas, jurusan, nama, jenis kelamin, nis, agama, alamat, kelahiran
        $this->builder->select('users.username, users.email, pelajar.no_hp, sekolah.nama_sekolah, pelajar.kelas, pelajar.jenis_kelamin, pelajar.jurusan, pelajar.full_name as nama_pelajar, pelajar.nis, pelajar.agama, pelajar.alamat, kelahiran.tempat, kelahiran.waktu');
        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->join('kelahiran', 'pelajar.id = kelahiran.user_id');
        $this->builder->join('sekolah_groups', 'pelajar.id = sekolah_groups.user_id');
        $this->builder->join('sekolah', 'sekolah_groups.sekolah_id = sekolah.id');
        $query = $this->builder->getWhere(['pelajar.id' => $id]);

        $data['data_pelajar'] = $query->getFirstRow('array');
        return view('user/detail/pelajar', $data);
    }
}
