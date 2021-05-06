<?PHP
	class produit{
		public  $idProduit = null;
		public  $nomPrdt = null;
		public  $type_produit = null;
		public  $prix = null;
		public  $dateExpr = null;
		public  $quantite = null; 
		
		function __construct( $idProduit=null,  $nomPrdt=null,  $type_produit=null,  $prix=null,  $dateExpr=null,  $quantite=null){
			
			$this->idProduit=$idProduit;
			$this->nomPrdt=$nomPrdt;
			$this->type_produit=$type_produit;
			$this->prix=$prix;
			$this->dateExpr=$dateExpr;
            $this->quantite=$quantite;
		}
		
		public function getidProduit(){
			return $this->idProduit;
		}
		public function getnomPrdt(){
			return $this->nomPrdt;
		}
		public function gettype_produit(){
			return $this->type_produit;
		}
		public function getprix(){
			return $this->prix;
		}
		public function getdateExpr(){
			return $this->dateExpr;
		}
		public function getquantite(){
			return $this->quantite;
		}

		function setidProduit( int $idProduit) {
			$this->idProduit=$idProduit;
		}

		function setnomPrdt( string $nomPrdt) {
			$this->nomPrdt=$nomPrdt;
		}
		function settype_produit( string $type_produit){
			$this->type_produit=$type_produit;
		}
		function setprix( float $prix){
			$this->prix=$prix;
		}
		function setdateExpr( string $dateExpr) {
			$this->dateExpr=$dateExpr;
		}
        function setquantite( int $quantite){
			$this->quantite=$quantite;
		}
	}
?>