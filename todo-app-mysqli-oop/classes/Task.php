<?php

class Task {
    private $conn;
    private $table = 'tasks';
    private $id;
    private $task;
    private $is_completed = false;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function create() {
        $query = "INSERT INTO " .  $this->table ." (task) VALUES (?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param("s", $this->task);
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
}