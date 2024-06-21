<?php
class Database
{
    private $db;

    public function __construct($file)
    {
        try {
            $this->db = new PDO("sqlite:" . $file);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (Exception $e) {
            die("Unable to connect: " . $e->getMessage());
        }
    }

    public function query($query, $params = [])
    {
        $stmt = $this->db->prepare($query);
        $stmt->execute($params);
        return $stmt;
    }
}
?>