<?php

namespace App\Controllers;
use App\Models\PelajarModels;
use App\Models\GuruModels;
use App\Models\PembimbingModels;
use App\Models\SekolahModels;
use App\Models\PerusahaanModels;
use App\Models\LaporanModels;

class Admin extends BaseController
{
    protected $PelajarModels, $GuruModels, $PembimbingModels, $SekolahModels, $PerusahaanModels, $LaporanModels, $db, $builder;
    public function __construct()
    {
        $this->PelajarModels = new PelajarModels();
        $this->GuruModels = new GuruModels();
        $this->PembimbingModels = new PembimbingModels();
        $this->SekolahModels = new SekolahModels();
        $this->PerusahaanModels = new PerusahaanModels();
        $this->LaporanModels = new LaporanModels();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
    }
	public function pelajar()
	{
        $data = [
            'title' => 'Admin Page',
            'pengaturan' => '',
            'laporan' => '',
            'pelajar' => 'active',
            'sekolah' => '',
            'guru' => ''
        ];
        //id pelajar, nama pelajar, nis, perusahaan, 
        $this->builder->select('pelajar.id, pelajar.full_name, pelajar.nis, perusahaan.nama_pt, sekolah.nama_sekolah');
        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->join('perusahaan_groups', 'pelajar.id = perusahaan_groups.user_id');
        $this->builder->join('perusahaan', 'perusahaan_groups.perusahaan_id = perusahaan.id');
        $this->builder->join('sekolah_groups', 'pelajar.id = sekolah_groups.user_id');
        $this->builder->join('sekolah', 'sekolah_groups.sekolah_id = sekolah.id');
        $query = $this->builder->get();

        $data['datapelajar'] = $query->getResultArray();

		return view('user/admin/pelajar', $data);
	}
	public function laporan()
	{
        $data = [
            'title' => 'Pelajar Page',
            'pengaturan' => '',
            'laporan' => 'active',
            'pelajar' => '',
            'sekolah' => '',
            'guru'  => ''
        ];
        //id laporan, nama pelajar, hari tanggal, keterangan, status
        $this->builder->select('laporan.id, pelajar.full_name as nama_pelajar, laporan.hari, laporan.tanggal, laporan.keterangan, laporan.approve_pembimbing, laporan.approve_guru');
        $this->builder->join('pelajar', 'users.id = pelajar.user_id');
        $this->builder->join('laporan', 'pelajar.id = laporan.pelajar_id');
        $query = $this->builder->get();

        $data['datalaporan'] = $query->getResultArray();
		return view('user/admin/laporan', $data);
	}
	public function guru()
	{
        $data = [
            'title' => 'Pelajar Page',
            'pengaturan' => '',
            'laporan' => '',
            'pelajar' => '',
            'sekolah' => '',
            'guru'  => 'active'
        ];  
        //id , nama guru, sekolah, jenis kelamin, 
        $this->builder->select('guru.id, guru.full_name as nama_guru, sekolah.nama_sekolah, guru.jenis_kelamin');
        $this->builder->join('guru', 'users.id = guru.user_id');
        $this->builder->join('guru_sekolah_groups', 'guru.id = guru_sekolah_groups.guru_id');
        $this->builder->join('sekolah', 'guru_sekolah_groups.sekolah_id = sekolah.id');
        $query = $this->builder->get();

        $data['dataguru'] = $query->getResultArray();
		return view('user/admin/guru', $data);
	}
	public function pengaturan()
	{
        $data = [
            'title' => 'Pelajar Page',
            'pengaturan' => 'active',
            'laporan' => '',
            'pelajar' => '',
            'sekolah' => '',
            'guru'  => ''
        ];
		return view('user/admin/pengaturan', $data);
	}
	public function sekolah()
	{
        $data = [
            'datasekolah' => $this->SekolahModels->findAll(),
            'title' => 'Pelajar Page',
            'pengaturan' => '',
            'laporan' => '',
            'pelajar' => '',
            'sekolah' => 'active',
            'guru'  => ''
        ];
		return view('user/admin/sekolah', $data);
	}
	
}
