<?php

namespace App\Controllers;

use App\Models\GuruGroups;
use App\Models\GuruModels;
use App\Models\GuruSekolahGroups;
use App\Models\KelahiranGroups;
use App\Models\PelajarModels;
use App\Models\PembimbingGroups;
use App\Models\PembimbingPTGroups;
use App\Models\PTGroups;
use App\Models\SekolahGroups;
use App\Models\SekolahModels;
use App\Models\PerusahaanModels;
use App\Models\PembimbingModels;

class User extends BaseController
{
    protected $GuruGroups, $GuruModels, $GuruSekolahGroups, $KelahiranGroups, $PelajarGroups, $PembimbingGroup, $PembimbingPTGroups, $PTGroups, $SekolahGroups, $SekolahModels, $PerusahaanModels, $request, $PembimbingModels;

    public function __construct(){
        $this->GuruGroups = new GuruGroups();
        $this->GuruModels = new GuruModels();
        $this->GuruSekolahGroups = new GuruSekolahGroups();
        $this->KelahiranGroups  = new KelahiranGroups();
        $this->PelajarModels = new PelajarModels();
        $this->PembimbingGroups = new PembimbingGroups();
        $this->PembimbingPTGroups = new PembimbingPTGroups();
        $this->PTGroups = new PTGroups();
        $this->SekolahGroups = new SekolahGroups();
        $this->SekolahModels = new SekolahModels();
        $this->PembimbingModels = new PembimbingModels();
        $this->PerusahaanModels = new PerusahaanModels();
        $this->db = \Config\Database::connect();
        $this->builder = $this->db->table('users');
        $this->request = \Config\Services::request();

    }

    public function index(){

        // $this->builder->select('auth_groups_users.group_id');
        // $this->builder->join('auth_groups_users', 'users.id = auth_groups_users.user_id');
        // $query = $this->builder->getWhere(['auth_groups_users.user_id' => user()->id]);
        // $role = $query->getFirstRow();
        // d(user()->getRoles());
        // dd($role);

        if (in_groups('admin')) {
            return redirect()->to(base_url('admin/laporan'));
        }elseif (in_groups('pelajar')) {
            return redirect()->to(base_url('pelajar/laporan'));
        }elseif (in_groups('guru')) {
            return redirect()->to(base_url('guru/laporan'));
        }elseif(in_groups('pembimbing')){
            return redirect()->to(base_url('pembimbing/laporan'));
        }elseif (in_groups('user')){
            $data = [
                'title' => 'Pilih Role'
            ];
            return view('auth/roling/select', $data);
        }
    }
    public function hasreg(){
        return redirect()->to(base_url('logout'));
    }
    public function biodata(){
        $data =[
            'title' => 'Data Diri'
        ];
        return view('auth/roling/biodata', $data);
    }
    public function role(){
        $selectedrole = $this->request->getVar();
        $selectedrole = implode(('.'), $selectedrole);
        $data = [
            'role' => $selectedrole,
            'title' => 'Lengkapi Biodata'
        ];

        if ($selectedrole == null) {
            return redirect()->to(base_url('user'));
        }

        return view('auth/roling/biodata', $data);
    }
    public function pelajar(){
        $builderpelajar = $this->db->table('pelajar');
        //insert ke table pelajar
        $data = [
            'user_id' => user()->id,
            'full_name' => $this->request->getVar('fullname'),
            'nis' => $this->request->getVar('no_induk'),
            'jenis_kelamin' => $this->request->getVar('gender'),
            'alamat' => $this->request->getVar('alamat'),
            'agama' => $this->request->getVar('agama'),
            'no_hp' => $this->request->getVar('phone'),
        ];
        $builderpelajar->insert($data);

        $pelajarid = $this->PelajarModels->insertID();

        //insert ke table kelahiran
        $builderkelahiran = $this->db->table('kelahiran');
        $datakelahiran = [
            'user_id' => user()->id,
            'tempat' => $this->request->getVar('tempatlahir'),
            'waktu' => $this->request->getVar('tanggallahir'),
        ];
        $builderkelahiran->insert($datakelahiran);
        
        $datapage = [
            'pelajarid' => $pelajarid,
            'title' => 'Dah seleai',
            'sekolah' => $this->SekolahModels->findAll(),
            'perusahaan' => $this->PerusahaanModels->findAll(),
            'pembimbing' => $this->PembimbingModels->findAll(),
            'guru'  => $this->GuruModels->findAll()
        ];

        return view('auth/finishing/pelajar', $datapage);
    }
    public function PelajarDone(){
        $builderpelajar = $this->db->table('pelajar');
        $datapelajar =[
            'jurusan' => $this->request->getVar('jurusan'),
            'kelas' => $this->request->getVar('kelas')
        ];
        $builderpelajar->update($datapelajar, ['user_id' => user()->id]);

        $builderrole = $this->db->table('auth_groups_users');
        $datarole = [
            'group_id' => '3'
        ];
        $builderrole->update($datarole, ['user_id' => user()->id]);

        $buildersekolah = $this->db->table('sekolah_groups');
        $datasekolah = [
            'user_id' => $this->request->getVar('pelajarid'),
            'sekolah_id' => $this->request->getVar('sekolah')
        ];
        $buildersekolah->insert($datasekolah);

        $builderperusahaan = $this->db->table('perusahaan_groups');
        $dataperusahaan = [
           'user_id' => $this->request->getVar('pelajarid'),
           'perusahaan_id' => $this->request->getVar('perusahaan') 
        ];
        $builderperusahaan->insert($dataperusahaan);
        
        $pelajarid = $this->request->getVar('pelajarid');

        //guru.id,guru.full_name where guru_sekolah_groups.sekolah_id = id sekolah pelajar
        //guru, pembimbing, pembimbing_perusahaan_groups, guru_sekolah_groups
        // $this->builder->select('guru.id as id_guru, guru.full_name nama_guru, pembimbing.id as id_pembimbing, pembimbing.full_name as nama_pembimbing');
        // $this->builder->join('guru', 'users.id = guru.user_id');
        // $this->builder->join('pembimbing', 'user.id = pembimbing.user_id');
        // $this->builder->join('guru_sekolah_groups', 'guru.id = guru_sekolah_groups.guru_id');
        // $this->builder->join('pembimbing_perusahaan_groups', 'pembimbing.id = pembimbing_perusahaan_groups.pembimbing_ids');

        $builderpembimbing = $this->db->table('pembimbing');
        $builderpembimbing->select('pembimbing.id, pembimbing.full_name');
        $builderpembimbing->join('pembimbing_perusahaan_groups', 'pembimbing.id = pembimbing_perusahaan_groups.pembimbing_id');
        $querypem = $builderpembimbing->getWhere(['pembimbing_perusahaan_groups.perusahaan_id' => $this->request->getVar('perusahaan')]);

        $builderguru = $this->db->table('guru');
        $builderguru->select('guru.id, guru.full_name');
        $builderguru->join('guru_sekolah_groups', 'guru.id = guru_sekolah_groups.guru_id');
        $queryguru = $builderguru->getWhere(['sekolah_id' => $this->request->getVar('sekolah')]);

        $datapage = [
            'pelajarid' => $pelajarid,
            'title' => 'Dah dah dah',
            'pembimbing' => $querypem->getResultArray(),
            'guru'  => $queryguru->getResultArray()
        ];
        return view('auth/finishing/donepelajar', $datapage);

    }
    public function pelajardoneagain(){
        
        $builderguru = $this->db->table('guru_groups');
        $dataguru =[
            'user_id' => $this->request->getVar('pelajarid'),
            'guru_id' => $this->request->getVar('guru')
        ];
        $builderguru->insert($dataguru);

        $builderpembimbing = $this->db->table('pembimbing_groups');
        $datapembimbing = [
            'pelajar_id' => $this->request->getVar('pelajarid'),
            'pembimbing_id' => $this->request->getvar('pembimbing')
        ];
        $builderpembimbing->insert($datapembimbing);

        return redirect()->to(base_url('user/hasreg'));
    }
    public function guru(){
        $builderguru = $this->db->table('guru');
        //insert ke table pelajar
        $userid = user()->id;
        $datauser = [
            'user_id' => $userid,
            'full_name' => $this->request->getVar('fullname'),
            'nip' => $this->request->getVar('no_induk'),
            'jenis_kelamin' => $this->request->getVar('gender'),
            'alamat' => $this->request->getVar('alamat'),
            'agama' => $this->request->getVar('agama'),
            'no_hp' => $this->request->getVar('phone'),
        ];
        $builderguru->insert($datauser);

        $guruid = $this->GuruModels->insertID();
        //insert ke table kelahiran
        $builderkelahiran = $this->db->table('kelahiran');
        $datakelahiran = [
            'user_id' => $userid,
            'tempat' => $this->request->getVar('tempatlahir'),
            'waktu' => $this->request->getVar('tanggallahir'),
        ];
        $builderkelahiran->insert($datakelahiran);
        
        $data = [
            'guruid' => $guruid,
            'title' => 'Dikit lagi',
            'sekolah' => $this->SekolahModels->findAll()
        ];
        return view('auth/finishing/guru', $data);
    }
    public function GuruDone(){
        $builderguru = $this->db->table('guru');
        $dataguru = [
            'jabatan' => $this->request->getVar('jabatan')
        ];
        $builderguru->update($dataguru, ['user_id' => user()->id]);

        $builderrole = $this->db->table('auth_groups_users');
        $datarole = [
            'group_id' => '4'
        ];
        $builderrole->update($datarole, ['user_id' => user()->id]);

        $buildersekolah = $this->db->table('guru_sekolah_groups');
        $datasekolah = [
            'guru_id' => $this->request->getVar('guruid'),
            'sekolah_id' => $this->request->getVar('sekolah')
        ];
        $buildersekolah->insert($datasekolah);

        return redirect()->to(base_url('user/hasreg'));
    }
    public function pembimbing(){
        $builderpembimbing = $this->db->table('pembimbing');
        //insert ke table pelajar
        $userid = user()->id;
        $datauser = [
            'user_id' => $userid,
            'full_name' => $this->request->getVar('fullname'),
            'no_induk' => $this->request->getVar('no_induk'),
            'jenis_kelamin' => $this->request->getVar('gender'),
            'alamat' => $this->request->getVar('alamat'),
            'agama' => $this->request->getVar('agama'),
            'no_hp' => $this->request->getVar('phone'),
        ];
        $builderpembimbing->insert($datauser);

        $pembimbingid = $this->PembimbingModels->insertID();
        //insert ke table kelahiran
        $builderkelahiran = $this->db->table('kelahiran');
        $datakelahiran = [
            'user_id' => $userid,
            'tempat' => $this->request->getVar('tempatlahir'),
            'waktu' => $this->request->getVar('tanggallahir'),
        ];
        $builderkelahiran->insert($datakelahiran);
        
        $data = [
            'pembimbingid' => $pembimbingid,
            'title' => 'Dikit lagi',
            'perusahaan' => $this->PerusahaanModels->findAll()
        ];
        return view('auth/finishing/pembimbing', $data);
    }
    public function PembimbingDone(){
        $builderguru = $this->db->table('pembimbing');
        $dataguru = [
            'jabatan' => $this->request->getVar('jabatan')
        ];
        $builderguru->update($dataguru, ['user_id' => user()->id]);

        $builderrole = $this->db->table('auth_groups_users');
        $datarole = [
            'group_id' => '5'
        ];
        $builderrole->update($datarole, ['user_id' => user()->id]);

        $buildersekolah = $this->db->table('pembimbing_perusahaan_groups');
        $datasekolah = [
            'pembimbing_id' => $this->request->getVar('pembimbingid'),
            'perusahaan_id' => $this->request->getVar('perusahaan')
        ];
        $buildersekolah->insert($datasekolah);
        return redirect()->to(base_url('user/hasreg'));
    }
}
