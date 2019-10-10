<?php

class Mahasiswa_model {
	private $mhs = [
		[
			"nama" => "Amanda Shakila",
			"nrp" => "173040063",
			"email" => "amandashakila8@gmail.com",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Rezza Mochammad",
			"nrp" => "173040043",
			"email" => "rezzacinsu77@gmail.com",
			"jurusan" => "Teknik Informatika"
		],
		[
			"nama" => "Marlina",
			"nrp" => "173040073",
			"email" => "marlinapd@gmail.com",
			"jurusan" => "Teknik Informatika"
		]
	];


	public function getAllMahasiswa()
	{
		return $this->mhs;
		
	}
}




