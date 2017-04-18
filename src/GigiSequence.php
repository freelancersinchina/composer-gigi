<?php

namespace GigiMusic;

class GigiSequence extends MusicProvider{
	public function getFirst($num){
		$data = $this->api->search($this->singer);

		return $data;
	}
}
