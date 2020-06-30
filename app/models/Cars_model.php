<?php

class Cars_model{

    private $table = 'cars';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function getAllCars()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getCarsById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataMobil($data)
    {
        
        $query = "INSERT INTO cars 
                    VALUES
                    ('', :name, :power, :torque, :topspeed, :price)";
        
        $this->db->query($query);
        
        $this->db->bind('name', $data['name']);
        $this->db->bind('power', $data['power']);
        $this->db->bind('torque', $data['torque']);
        $this->db->bind('topspeed', $data['topspeed']);
        $this->db->bind('price', $data['price']);

        $this->db->execute();


        return $this->db->rowCount(); 
        
    } 

    public function hapusDataMobil($id)
    {
        $query = "DELETE FROM cars WHERE id = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();

        return $this->db->rowCount(); 
        
    }

    public function cariDataCars()
    {
        $keyword = $_POST['keyword'];
        $query = "SELECT * FROM cars WHERE name LIKE :keyword";
        $this->db->query($query);
        $this->db->bind('keyword', "%$keyword%");
        return $this->db->resultSet();
    }
}