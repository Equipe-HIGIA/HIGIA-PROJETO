<?php

class Connection extends PDO {
        
	private $dsn = 'mysql:dbname=higia;host=localhost;charset=utf8';
	private $user = 'root';
	private $password = '';
	public $handle = null;

	function __construct( ) {
		try {
            $opcoes = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
			if ( $this->handle == null ) {
				$dbh = parent::__construct( $this->dsn , $this->user , $this->password, $opcoes );
				$this->handle = $dbh;
				return $this->handle;
			}
		}
		catch ( PDOException $e ) {
			echo 'Connection failed: ' . $e->getMessage( );
			return false;
		}
	}

	function __destruct( ) {
		$this->handle = NULL;
	}
}

?>