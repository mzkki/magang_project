<?php

namespace App\Controllers;

use App\Models\PerusahaanModels;

class Pembimbing extends BaseController
{
    protected $db, $builder, $request, $PerusahaanModels;
    public function __construct(){
        $this->PerusahaanModels = new PerusahaanModels();
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

        $bidpembimbing = $this->db->table('pembimbing');
        $bidpembimbing->select('pembimbing.id');
        $queryid = $bidpembimbing->getWhere(['pembimbing.user_id' => user()->id]);
        $idpembimbing = $queryid->getFirstRow('array');

        $bperusahaan = $this->db->table('pembimbing');
        $bperusahaan->select('pembimbing_perusahaan_groups.perusahaan_id');
        $bperusahaan->join('pembimbing_perusahaan_groups', 'pembimbing.id = pembimbing_perusahaan_groups.pembimbing_id');
        $queryperusahaan = $bperusahaan->getWhere(['pembimbing_perusahaan_groups.pembimbing_id' => $idpembimbing]);
        $where = $queryperusahaan->getFirstRow('array');

        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->select('pelajar.id as id_pelajar, pelajar.full_name, pelajar.nis, pelajar.jenis_kelamin, sekolah.nama_sekolah');
        $this->builder->join('sekolah_groups', 'pelajar.id = sekolah_groups.user_id');
        $this->builder->join('sekolah', 'sekolah_groups.sekolah_id = sekolah.id');
        $this->builder->join('perusahaan_groups', 'pelajar.id = perusahaan_groups.user_id');
        $this->builder->where('perusahaan_id', $where);
        $query = $this->builder->get();

        $data['data_pelajar'] = $query->getResultArray();
		return view('user/pembimbing/pelajar', $data);
	}
    public function laporan(){
        $bidpembimbing = $this->db->table('pembimbing');
        $bidpembimbing->select('pembimbing.id');
        $queryid = $bidpembimbing->getWhere(['pembimbing.user_id' => user()->id]);
        $idpembimbing = $queryid->getFirstRow('array');

        $bperusahaan = $this->db->table('pembimbing');
        $bperusahaan->select('pembimbing_perusahaan_groups.perusahaan_id');
        $bperusahaan->join('pembimbing_perusahaan_groups', 'pembimbing.id = pembimbing_perusahaan_groups.pembimbing_id');
        $queryperusahaan = $bperusahaan->getWhere(['pembimbing_perusahaan_groups.pembimbing_id' => $idpembimbing]);
        $where = $queryperusahaan->getFirstRow('array');

        $this->builder->select('pelajar.full_name as nama_pelajar ,laporan.id, laporan.hari, laporan.tanggal, laporan.kegiatan, laporan.keterangan, laporan.approve_guru, laporan.approve_pembimbing');
        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->join('laporan', 'pelajar.id = laporan.pelajar_id');
        $this->builder->join('perusahaan_groups', 'pelajar.id = perusahaan_groups.user_id');
        $this->builder->where('perusahaan_id', $where);
        $query = $this->builder->get();
        $data = [
            'title' => 'Laporan',
            'laporan' => 'active',
            'pengaturan' => '',
            'pelajar' => '',
            'laporanku' => $query->getResultArray()
        ];
        return view('user/pembimbing/laporan', $data);
    }
    public function pengaturan(){
        $data = [
            'title' => 'Setting',
            'laporan' => '',
            'pelajar' => '',
            'pengaturan' => 'active'
        ];

        $this->builder->select('users.id, users.email, users.username, pembimbing.id as id_pembimbing, pembimbing.full_name, pembimbing.no_induk, pembimbing.jenis_kelamin, pembimbing.alamat, pembimbing.agama, pembimbing.jabatan, pembimbing.no_hp, kelahiran.waktu, kelahiran.tempat, perusahaan.id as pid, perusahaan.nama_pt, perusahaan.alamat');
        $this->builder->join('pembimbing', 'users.id = pembimbing.user_id');
        $this->builder->join('kelahiran', 'users.id = kelahiran.user_id');
        $this->builder->join('pembimbing_perusahaan_groups', 'pembimbing.id = pembimbing_perusahaan_groups.pembimbing_id');
        $this->builder->join('perusahaan', 'pembimbing_perusahaan_groups.perusahaan_id = perusahaan.id');
        $this->builder->where('users.id', user()->id);
        $query = $this->builder->get();

        $data['pembimbing'] = $query->getFirstRow('array');
        $data['gender'] = ['Laki - Laki', 'Perempuan'];
        $data['perusahaan'] = $this->PerusahaanModels->findAll();
 
        return view('user/pembimbing/pengaturan', $data);
    }
    public function ubah(){
        $id_pembimbing = $this->request->getVar('id_pembimbing');
        //table guru
        $builderguru = $this->db->table('pembimbing');
        $dataguru =[
            'full_name'  => $this->request->getVar('tname'),
            'no_induk' => $this->request->getVar('tnis'),
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

        return redirect()->to(base_url('/pembimbing/pengaturan'));
    }
	
}
