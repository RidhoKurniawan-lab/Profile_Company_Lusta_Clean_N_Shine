<?php
class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $name = DB_NAME;

    protected $dbh;
    protected $stmt;


    public function __construct(){
        $dsn = "mysql:host={$this->host};dbname={$this->name}";
        $options =[
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try {
            $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }

    public function query($sql){
    $this->stmt = $this->dbh->prepare($sql);
    }

    public function bind($param, $value, $type = null){
    if(is_null($type)){
        switch(true){
            case is_int($value): $type = PDO::PARAM_INT; break;
            case is_bool($value): $type = PDO::PARAM_BOOL; break;
            case is_null($value): $type = PDO::PARAM_NULL; break;
            default: $type = PDO::PARAM_STR;
        }
    
    }
    $this->stmt->bindValue($param, $value, $type);
    }

    public function execute(){
        try {
            return $this->stmt->execute();
        } catch (PDOException $e) {
            error_log($e->getMessage());
            return false;
        } 
    }

    public function resultSet(){
        $this->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function single(){
        $this->execute();
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    // insert
    // $db->query("INSERT INTO contacts (name, email) VALUES (:name, :email)");
    // $db->bind(':name', 'Ridho');
    // $db->bind(':email', 'ridho@mail.com');
    // $db->execute();

    // Select
    // $db->query("SELECT * FROM contacts");
    // $rows = $db->resultSet();

    // foreach ($rows as $r) {
    //     echo $r['name'] . ' - ' . $r['email'] . "<br>";
    // }

    //Where With 1 Line
    // $db->query("SELECT * FROM contacts WHERE id = :id");
    // $db->bind(':id', 1);
    // $user = $db->single();
    // echo $user['name'];

    //Update
    // $db->query("UPDATE contacts SET email = :email WHERE id = :id");
    // $db->bind(':email', 'new@mail.com');
    // $db->bind(':id', 1);
    // $db->execute();
    // echo $db->rowCount() . " baris diupdate.";

    // Delete
    // $db->query("DELETE FROM contacts WHERE id = :id");
    // $db->bind(':id', 1);
    // $db->execute();
    // echo $db->rowCount() . " baris dihapus.";
}


