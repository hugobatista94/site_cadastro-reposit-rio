<?PHP

	

class db{

				// criamos variaveis privadas com informações que darão acesso ao banco de dados, no nome cadastro

	 private $host = 'localhost'; 

	  private $nome = 'root';

      private $email = 'root';

	   private $celular = ''; 

	    private $database = 'projeto'; 

	    	// criamos uma função de conexão, onde recebe??
	    public function conecta_mysql(){

	    	// uma variavel com todas informações de conexão e...
	    	$con = mysqli_connect($this->host, $this->nome, $this->email, $this->celular, $this->database );//  nossa conexão

	    	// retorna a resposta.
	    	return $con;
	    }

}

?>