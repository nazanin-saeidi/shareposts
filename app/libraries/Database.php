<?php  
    /*
     * PDO Database Class
     * Connect to Database
     * Create Prepared statements
     * Bind Values
     * Return Rows & Results
     */
    class Database {
        private $host = DB_HOST;
        private $dbname = DB_NAME;
        private $user = DB_USER;
        private $pass = DB_PASS;

        private $dbh; //database handler
        private $statement;
        private $error;

        public function __construct() {
            $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;

            //check out PDO documentation
            $options = array(
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION //More elegent to handle errors
            );

            try {
                $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
            } catch(PDOException $e) {
                $this->error = $e->getMessage();
                echo $this->error;
            }
        }

        //Prepare statement for query
        public function query($sql) {
            $this->statement = $this->dbh->prepare($sql);
        }

        //Bind values to the query
        public function bind($param, $value, $type = null) {
            if(is_null($type)) {
                switch(true){
                    case is_int($type):
                        $type = PDO::PARAM_INT;
                        break;
                    case is_bool($type):
                        $type = PDO::PARAM_BOOL;
                        break;
                    case is_null($type):
                        $type = PDO::PARAM_NULL;
                        break;
                    default:
                        $type = PDO::PARAM_STR;
                }
            }
            $this->statement->bindValue($param, $value, $type);
        }

        //execute the statement
        public function execute() {
            return $this->statement->execute();
        }

        //return a result set
        public function resultSet() {
            $this->execute();
            return $this->statement->fetchAll(PDO::FETCH_OBJ);
        }

        //return a single record
        public function single() {
            $this->execute();
            return $this->statement->fetch(PDO::FETCH_OBJ);
        }

        //get the row count
        public function rowCount() {
            return $this->statement->rowCount();
        }
    }