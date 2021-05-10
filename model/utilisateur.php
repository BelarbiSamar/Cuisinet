<?PHP
	class Utilisateur{
		public  $id = null;
		public  $nom = null;
		public  $prenom = null;
		public  $email = null;
		public  $login = null;
		public  $password = null;


		function __construct( $id= null, $nom= null,  $prenom= null,  $email= null,  $login= null,  $password= null){
            $this->id=$id;
            $this->nom=$nom;
			$this->prenom=$prenom;
			$this->email=$email;
			$this->login=$login;
			$this->password=$password;

		}

		public function getId() {
			return $this->id;
		}
		public function getNom() {
			return $this->nom;
		}
		public function getPrenom(){
			return $this->prenom;
		}
        public function getLogin(){
			return $this->login;
		}
		public function getEmail(){
			return $this->email;
		}
		public function getPassword(){
			return $this->password;
		}
        public function setNom(string $nom){
			$this->nom=$nom;
		}
		public function setPrenom(string $prenom){
			$this->prenom;
		}
		public function setLogin(string $login){
			$this->login=$login;
		}
		public function setEmail(string $email){
			$this->email=$email;
		}
		public function setPassword(string $password){
			$this->password=$password;
		}

	}
?>