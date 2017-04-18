<?php

namespace GigiMusic;
use \Metowolf\Meting;

class GigiRandom extends MusicProvider{
	public function getFirst($num){
		$data = $this->api->search($this->singer);

		return $data;
	}
}
