<?php

class Task {
    private $conn;
    private $table = 'tasks';
    private $id;
    private $task;
    private $status = false;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " .  $this->table ." (task) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->task);
        return $stmt->execute();
    }

    public function read() {
        $query = "SELECT * FROM ". $this->table ." ORDER BY created_at DESC";
        $result = $this->conn->query($query);
        return $result;
    }

    public function complete($id) {
        $query = "UPDATE  ". $this->table ." SET is_completed = 1 WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $id);
        return $stmt->execute();
    }

    public function UndoComplete($id) {
        $query = "UPDATE  ". $this->table ." SET is_completed = 0 WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $id);
        return $stmt->execute();
    }



    /**
     * Get the value of task
     */ 
    public function getTask()
    {
        return $this->task;
    }

    /**
     * Set the value of task
     *
     * @return  self
     */ 
    public function setTask($task)
    {
        $this->task = $task;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
}