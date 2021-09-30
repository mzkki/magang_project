<?php

namespace App\Controllers;

use App\Models\SekolahModels;

class Guru extends BaseController
{
    protected $db, $builder, $request, $SekolahModels;
    public function __construct(){
        $this->SekolahModels = new SekolahModels();
        $this->db = \Config\Database::connect();
        $this->request = \Config\Services::request();
        $this->builder = $this->db->table('users');
    }
	public function pelajar()
	{
        $data = [
            'title' => 'Data Pelajar',
            'pengaturan' => '',
            'laporan' => '',
            'pelajar' => 'active',
        ];

        $idgurub = $this->db->table('guru');
        $idgurub->select('guru.id');
        $queryguru = $idgurub->getWhere(['guru.user_id' => user()->id]);
        $idguru = $queryguru->getFirstRow('array');

        $sekolah = $this->db->table('guru');
        $sekolah->select('guru_sekolah_groups.sekolah_id');
        $sekolah->join('guru_sekolah_groups', 'guru.id = guru_sekolah_groups.guru_id');
        $sekolah->where('guru_sekolah_groups.guru_id', $idguru);
        $query = $sekolah->get();

        $where = $query->getFirstRow('array');

        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->select('pelajar.id as id_pelajar, pelajar.full_name, pelajar.nis, pelajar.jenis_kelamin, perusahaan.nama_pt');
        $this->builder->join('perusahaan_groups', 'pelajar.id = perusahaan_groups.user_id');
        $this->builder->join('perusahaan', 'perusahaan_groups.perusahaan_id = perusahaan.id');
        $this->builder->join('sekolah_groups', 'pelajar.id = sekolah_groups.user_id');
        $query = $this->builder->getWhere(['sekolah_id' => $where]);

        $data['data_pelajar'] = $query->getResultArray();                    

		return view('user/guru/pelajar', $data);
	}
    public function laporan(){
        $idgurub = $this->db->table('guru');
        $idgurub->select('guru.id');
        $queryguru = $idgurub->getWhere(['guru.user_id' => user()->id]);
        $idguru = $queryguru->getFirstRow('array');

        $sekolah = $this->db->table('guru');
        $sekolah->select('guru_sekolah_groups.sekolah_id');
        $sekolah->join('guru_sekolah_groups', 'guru.id = guru_sekolah_groups.guru_id');
        $sekolah->where('guru_sekolah_groups.guru_id', $idguru);
        $query = $sekolah->get();

        $where = $query->getFirstRow('array');
        

        $this->builder->select('pelajar.full_name as nama_pelajar ,laporan.id, laporan.hari, laporan.tanggal, laporan.kegiatan, laporan.keterangan, laporan.approve_guru, laporan.approve_pembimbing');
        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->join('laporan', 'pelajar.id = laporan.pelajar_id');
        $this->builder->join('sekolah_groups', 'pelajar.id = sekolah_groups.user_id');
        $lp = $this->builder->getWhere(['sekolah_id' => $where]); 
        $data = [
            'title' => 'Laporan',
            'laporan' => 'active',
            'pengaturan' => '',
            'pelajar' => '',
            'laporanku' => $lp->getResultArray()
        ];
        return view('user/guru/laporan', $data);
    }
    public function pengaturan(){
        $data = [
            'title' => 'Setting',
            'laporan' => '',
            'pelajar' => '',
            'pengaturan' => 'active'
        ];

        $this->builder->select('users.id, users.email, users.username, guru.id as id_guru, guru.full_name, guru.nip, guru.jenis_kelamin, guru.alamat, guru.agama, guru.jabatan, guru.no_hp, kelahiran.tempat, kelahiran.waktu, sekolah.id as scid, sekolah.nama_sekolah');
        $this->builder->join('guru', 'users.id = guru.user_id');
        $this->builder->join('kelahiran', 'users.id = kelahiran.user_id');
        $this->builder->join('guru_sekolah_groups', 'guru.id = guru_sekolah_groups.guru_id');
        $this->builder->join('sekolah', 'guru_sekolah_groups.sekolah_id = sekolah.id');
        $this->builder->where('users.id', user()->id);
        $query = $this->builder->get();

        $data['guru'] = $query->getFirstRow('array');
        $data['gender'] = ['Laki - Laki', 'Perempuan'];
        $data['asal'] = $this->SekolahModels->findAll();

        return view('user/guru/pengaturan', $data);
    }
	public function ubah(){
        $id_guru = $this->request->getVar('id_guru');
        //table guru
        $builderguru = $this->db->table('guru');
        $dataguru =[
            'full_name'  => $this->request->getVar('tname'),
            'nip' => $this->request->getVar('tnis'),
            'jenis_kelamin' => $this->request->getVar('tgender'),
            'alamat' => $this->request->getVar('taddress'),
            'agama' => $this->request->getVar('treligion'),
            'jabatan' => $this->request->getVar('jabatan'),
            'no_hp' => $this->request->getVar('phone')
        ];
        $builderguru->update($dataguru, ['user_id' => user()->id]);

        //table users 
        $builderuser = $this->db->table('users');
        $datauser = [
            'username' => $this->request->getVar('username')
        ];
        $builderuser->update($datauser, ['id' => user()->id]);

        //table kelahiran 
        $builderkelahiran = $this->db->table('kelahiran');
        $datakelahiran = [
            'tempat' => $this->request->getVar('tbirthplace'),
            'waktu' => $this->request->getVar('tbirthday'),  
        ];
        $builderkelahiran->update($datakelahiran, ['user_id' => user()->id]);


        return redirect()->to(base_url('/guru/pengaturan'));
    }
}
// tbirthday
// tbirthplace
// taddress
// treligion
// tnis
// tname
// jabatan
// phone
// email
// username
// tgender
// orschool