<?php

namespace App\Controllers;

use App\Models\SekolahModels;
use App\Models\PerusahaanModels;
use App\Models\LaporanModels;

class Pelajar extends BaseController
{
    protected $db, $builder, $request, $SekolahModels, $PerusahaanModels, $LaporanModels;

    public function __construct(){
        $this->SekolahModels = new SekolahModels();
        $this->PerusahaanModels = new PerusahaanModels();
        $this->LaporanModels = new LaporanModels();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->request = \Config\Services::request();
    }
	public function insert()
	{
        $data = [
            'title' => 'Tambah Data',
            'pengaturan' => '',
            'laporan' => '',
            'insert' => 'active',
        ];

        $this->builder->select('pelajar.id as id_pelajar');
        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->where('users.id', user()->id);
        $query = $this->builder->get();

        $data['id_pelajar'] = $query->getFirstRow('array');

        $data['hari'] = ['Senin', 'Selasa', 'Rabu', 'Kamis', "Jum'at"];
        $data['keterangan'] = ['Hadir', 'WFH', 'Sakit', 'Izin'];
		return view('user/pelajar/insert', $data);
	}
    public function AttemptInsert(){
        

        $datalaporan = [
            'pelajar_id' => $this->request->getVar('id_pelajar'),
            'hari' => $this->request->getVar('hari'),
            'tanggal' => $this->request->getVar('tanggal'),
            'kegiatan' => $this->request->getVar('kegiatan'),
            'keterangan' => $this->request->getVar('keterangan'),
            'jam_masuk' => $this->request->getVar('jam_masuk'),
            'jam_keluar' => $this->request->getVar('jam_keluar'),
        ];

        $this->LaporanModels->insert($datalaporan);

        return redirect()->to('pelajar/laporan');
    }
    public function laporan(){
        $this->builder->select('laporan.id, laporan.hari, laporan.tanggal, laporan.kegiatan, laporan.keterangan, laporan.approve_guru, laporan.approve_pembimbing');
        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->join('laporan', 'pelajar.id = laporan.pelajar_id');
        $this->builder->where('users.id', user()->id);
        $query = $this->builder->get();
        $data = [
            'title' => 'Laporan',
            'laporan' => 'active',
            'pengaturan' => '',
            'insert' => '',
            'laporanku' => $query->getResultArray()
        ]; 

        return view('user/pelajar/laporan', $data);
    }
    public function pengaturan(){
        
        $data = [
            'title' => 'Setting',
            'laporan' => '',
            'insert' => '',
            'pengaturan' => 'active',
            'sekolah' => $this->SekolahModels->findAll(),
            'perusahaan' => $this->PerusahaanModels->findAll()
        ];

        $this->builder->select('users.id, users.username, users.email, pelajar.id as id_pelajar, pelajar.user_id, pelajar.full_name, pelajar.nis, pelajar.jurusan, pelajar.kelas, pelajar.jenis_kelamin, pelajar.alamat as palamat, pelajar.agama, pelajar.no_hp as hp, kelahiran.tempat, kelahiran.waktu, sekolah.id as scid, sekolah.nama_sekolah, perusahaan.id as pid, perusahaan.nama_pt, perusahaan.alamat');
        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->join('kelahiran', 'users.id = kelahiran.user_id');
        $this->builder->join('perusahaan_groups', 'pelajar.id = perusahaan_groups.user_id');
        $this->builder->join('perusahaan', 'perusahaan_groups.perusahaan_id = perusahaan.id');
        $this->builder->join('sekolah_groups', 'pelajar.id = sekolah_groups.user_id');
        $this->builder->join('sekolah', 'sekolah_groups.sekolah_id = sekolah.id');
        $this->builder->where('users.id', user()->id);
        $query = $this->builder->get();

        $data['pelajar'] = $query->getFirstRow('array');
        $data['gender'] = ['Perempuan', 'Laki - Laki'];
        $data['kelas'] = ['X', 'XI', 'XII'];

        return view('user/pelajar/pengaturan', $data);
    }
	public function ubah(){

        $id_pelajar = $this->request->getVar('id_pelajar');
        //pelajar
        $builderpelajar = $this->db->table('pelajar');
        $datapelajar = [
            'full_name' => $this->request->getVar('pname'),
            'nis' => $this->request->getVar('pnis'),
            'jurusan' => $this->request->getVar('jurusan'),
            'kelas' => $this->request->getVar('kelas'),
            'jenis_kelamin' => $this->request->getVar('pgender'),
            'alamat' => $this->request->getVar('paddress'),
            'agama' => $this->request->getVar('preligion'),
            'no_hp' => $this->request->getVar('pphone'),
        ];
        $builderpelajar->update($datapelajar, ['user_id' => user()->id]);
        //kelahiran
        $builderkelahiran = $this->db->table('kelahiran');
        $datakelahiran = [
            'tempat' => $this->request->getVar('pbirthplace'),
            'waktu' => $this->request->getVar('pbirthday'),
        ];
        $builderkelahiran->update($datakelahiran, ['user_id' => user()->id]);
        //users
        $builderuser = $this->db->table('users');
        $datauser = [
            'username' => $this->request->getVar('pusername'),
        ];
        $builderuser->update($datauser, ['id' => user()->id]);
        //perusahaan_groups

        return redirect()->to(base_url('/pelajar/pengaturan'));
    }
    public function test(){
        $data = [
            'title' => 'Setting',
            'laporan' => 'active',
            'pelajar' => '',
            'insert' => '',
            'pengaturan' => ''
        ];
        return view('/user/detail/laporan', $data);
    }
}
// pusername.
// pemail.
// pphone.
// orschool.
// kelas.
// jurusan.
// pname.
// pnis.
// preligion.
// pgender.
// paddress.
// pbirthplace.
// pbirthday.
// perusahaan.