<?php
	class Table{
		private $_a;
		private $_b;
		private $_n1;
		private $_n2;
		private $_res;
		private $_lineIndex;
		private $_lineColor;
		private $_lineToDel = [];
		private $_iModified = [];
		private $_aModified = [];
		private $_lineModified = [];

		public function __construct($a, $b){
			$this->_a = $a;
			$this->_b = $b;
		}

		public function add_iModified($i){
			$this->_iModified[] = $i;
		}

		public function add_aModified($a){
			$this->_aModified[] = $a;
		}

		public function norepeatLineModified(){
			for ($i = 0; $i < sizeof($this->_lineModified) ; $i++)
				foreach ($this->_lineModified as $key => $value)
					if(($i != $key) && ($this->_lineModified[$i] == $value))
						$this->_lineModified[$i] = 0;
		}

		public function showReload(){

		}

		public function incrementLineIndex(){
			$this->_lineIndex = $this->_lineIndex + 1;
		}

		public function is_pair($n){
			if($n % 2 == 0){
				return true;
			}
			elseif($n % 2 == 1){
				return false;
			}
		}

		public function set_n1($n){ $this->_n1 = $n; }
		public function set_n2($n){ $this->_n2 = $n; }
		public function set_res($n){ $this->_res = $n; }
		public function setLineIndex($value){ $this->_lineIndex = $value; }
		public function setLineToDel($line){ $this->_lineToDel = $line; }
		public function set_iModified($i){ $this->_iModified = $i; }
		public function set_aModified($a){ $this->_aModified = $a; }
		public function setLineModified($line){ $this->_lineModified = $line; }
		public function setLineColor($color){ $this->_lineColor = $color; }

		public function get_a(){ return $this->_a; }
		public function get_b(){ return $this->_b; }
		public function get_n1(){ return $this->_n1; }
		public function get_n2(){ return $this->_n2; }
		public function get_res(){ return $this->_res; }
		public function getLineIndex(){ return $this->_lineIndex; }
		public function getLineColor(){ return $this->_lineColor; }
		public function getLineToDel(){ return $this->_lineToDel; }
		public function get_iModified(){ return $this->_iModified; }
		public function get_aModified(){ return $this->_aModified; }
		public function getLineModified(){ return $this->_lineModified; }

		public function show_iModified(){
			print_r($this->_iModified);
		}

		public function show_aModified(){
			print_r($this->_iModified);
		}

		public function showLineModified(){
			print_r($this->_lineModified);
		}
	}

