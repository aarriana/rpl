<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function index(){
		$this->load->view('awal');
	}
	
	public function awal()
	{
		$this->data['hasil'] = $this->modelcrud->getUser('tbl_absen');
		$this->load->view('welcome_message', $this->data);
	}
	
	public function form_input(){
		$this->load->view('form-input');
	}
	public function insert(){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$materi = $_POST['materi'];
		$kehadiran = $_POST['kehadiran'];
		$data= array('nim' => $nim, 'nama_lengkap' => $nama, 'materi' => $materi,'kehadiran' => $kehadiran);
		$tambah = $this->modelcrud->tambahAbsensi('tbl_absen',$data);
		if($tambah > 0){
			echo redirect('welcome/awal');
		}else{
			echo 'Gagal disimpan';
		}
	}
	
	public function delete($id){
		$hapus = $this->modelcrud->hapusData('tbl_absen',$id);
	if($hapus > 0){
			redirect('welcome/awal');
		}else{
			echo 'Belum dihapus';
		}
	}
	
	public function form_edit($id){
		$this->data['dataEdit'] = $this->modelcrud->dataEdit('tbl_absen',$id);
		$this->load->view('form-edit', $this->data);
	}
	
	public function update($id){
		
		$nama = $_POST['nama'];
		$materi = $_POST['materi'];
		$kehadiran = $_POST['kehadiran'];
		$data= array('nama_lengkap' => $nama, 'materi' => $materi,'kehadiran' => $kehadiran);
		$edit = $this->modelcrud->editData('tbl_absen',$data,$id);
		if($edit > 0){
			redirect('welcome/awal');
		}else{
			echo 'Gagal disimpan';
		}
	}
	public function about(){
		$this->load->view('about');
	}
	
	public function kontak(){
		$this->load->view('kontak');
	}
}