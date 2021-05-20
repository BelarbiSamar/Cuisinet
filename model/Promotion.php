<?PHP
	class promotion{
		public  $idPromo = null;
		public  $idProduit = null;
		public  $dureePromo = null;
		public  $pourcentage = null;
		public  $idCarte = null;
		
		
		function __construct( $idPromo= null,  $idProduit= null,  $dureePromo= null,  $pourcentage= null,  $idCarte= null){
			
			$this->idPromo=$idPromo;
			$this->idProduit=$idProduit;
			$this->dureePromo=$dureePromo;
			$this->pourcentage=$pourcentage;
            $this->idCarte=$idCarte;
		}
		
		public function getidPromo(){
			return $this->idPromo;
		}
        public	function getidProduit(){
			return $this->idProduit;
		}
		public function getdureePromo(){
			return $this->dureePromo;
		}
		public function getpourcentage(){
			return $this->pourcentage;
		}
		public function getidCarte(){
			return $this->idCarte;
		}
		

		function setidPromo(int $idPromo) {
			$this->idPromo=$idPromo;
		}

		function setidProduit(int $idProduit) {
			$this->idProduit=$idProduit;
		}
		function setdureePromo(string $dureePromo){
			$this->dureePromo=$dureePromo;
		}
		function setpourcentage( int $pourcentage){
			$this->pourcentage=$pourcentage;
		}
		function setidCarte( int $idCarte) {
			$this->idCarte=$idCarte;
		}
        
	}
?>