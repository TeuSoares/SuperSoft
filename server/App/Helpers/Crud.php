<?php
    namespace App\Helpers;

    use App\Config\Connection;

    class Crud {
        private $connection;

        public function __construct(){
            $this->connection = Connection::getConnection();
        }

        public function execute(string $query, array $binds = [], $params = null){
            try{
                $stmt = $this->connection->prepare($query);

                if(count($binds) > 0){
                    foreach($binds as $key => $value){
                       $stmt->bindValue($key, $value);
                    }
                }

                $stmt->execute($params);

                return $stmt;
            }catch(\PDOException $e){
                http_response_code(500);
                // echo $e->getMessage();
                die(json_encode(Messages::setMessage("error", "Houve algum problema no servidor. Tente novamente mais tarde!")));
            }
        }
    }
?>