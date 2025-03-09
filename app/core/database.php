<?php

class Database {

    private function connect() {
        $db = DBDRIVER . ":hostname=" . DBHOST . ";dbname=" . DBNAME;
        return new PDO($db, DBUSER, DBPASS);
    }

    public function query($query, $data = [], $type = 'object') { 
        $conn = $this->connect();
        $stmt = $conn->prepare($query);

        if ($stmt) {
            $check = $stmt->execute($data);
            if ($check) {
                // Debugging Fix: Correct type check
                if ($type == 'object') {
                    $type = PDO::FETCH_OBJ; // Corrected condition
                } else {
                    $type = PDO::FETCH_ASSOC;
                }

                $result = $stmt->fetchAll($type);

                if (is_array($result) && count($result) > 0) {
                    return $result;
                }
            }
        }

        return false;
    }
}