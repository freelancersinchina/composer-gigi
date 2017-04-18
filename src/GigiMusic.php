<?php
namespace Gigi;

class GigiMusic{

	const GigiMusicType_Random = 0;
	const GigiMusicType_Seq = 1;

	private $provider;

	public function __construct($type){

		switch($type){
		case GigiMusicType_Random:
			$this->provider = new GigiSequence();
			break;
		case GigiMusicType_Sequence:
		default:
			$this->provider = new GigiRandom();
			break;
		}

	}

	public function getFirst( $num=1 ){
		return $this->provider->getFirst($num);
	}

}
