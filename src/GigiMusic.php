<?php
namespace Gigi;

class GigiMusic{

	const GigiMusicType_Random = 0;
	const GigiMusicType_Seq = 1;

	private $provider;

	public function __construct($type){

		switch($type){
		case self::GigiMusicType_Random:
			$this->provider = new GigiRandom();
			break;
		case self::GigiMusicType_Sequence:
		default:
			$this->provider = new GigiSequence();
			break;
		}

	}

	public function getFirst( $num=1 ){
		return $this->provider->getFirst($num);
	}

}
