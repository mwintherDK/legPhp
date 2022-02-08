<?php    
    include_once "./includes/connect.inc.php";
    function getAllNews(){
        // WTF! Det skal man skrive for at "arve" fra parent scope
        global $connection;   
        $stmt = $connection->prepare("SELECT * FROM news");
        $stmt->execute();

        $result = [];
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        };

        return $result;
    };


    function getSingleNewsById($id){
        global $connection;
        $sql = "SELECT * from news WHERE id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }