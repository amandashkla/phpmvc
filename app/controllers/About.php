<?php 

class About {
	public function page()
	{
		echo 'About/page';
	}

	public function index($nama = 'Amanda', $pekerjaan = 'Mahasiswa')
	{
		echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
	}
}


