<?php    
    include_once "./includes/connect.inc.php";
    function getAllNews(){
        // ! Det skal man skrive for at "arve" fra parent scope
        global $connection;   
        $stmt = $connection->prepare("SELECT * FROM news");
        $stmt->execute();

        $result = [];
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $result[] = $row;
        };

        return $result;
    };


    function getSingleNewsById($newsId){
        global $connection;
        $sql = "SELECT * from news WHERE id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$newsId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function insertNews($title, $src, $body){
        global $connection;
        $sql = "INSERT INTO news (title, src, body) VALUES (?, ?, ?)";
        $stmt= $connection->prepare($sql);
        $stmt->execute([$title, $src, $body]);
        return "News tilføjet.";
    }

    function updateNews($title, $src, $body, $updateId){
        global $connection;
        // UPDATE users SET name=?, surname=?, sex=? WHERE id=?"
        $sql = "UPDATE news SET title=?, src=?, body=? WHERE id = ?";
        $stmt= $connection->prepare($sql);
        $stmt->execute([$title, $src, $body, $updateId]);
        header("location: updateNews.php?update=success");
    }

    function setFoodplan($week, $mon, $tue, $wed, $thu, $fri, $userId){
        global $connection;

        // Jeg laver her den indtastede dato om til et ugenummer
        $date = date("W", strtotime($week));
        echo $date;
        $sql = "INSERT INTO food (week, mon, tue, wed, thu, fri, userid) VALUES (?, ?, ?, ?, ?, ?, ?)";
        try{
            $stmt = $connection->prepare($sql);
            $stmt->execute([$date, $mon, $tue, $wed, $thu, $fri, $userId]);
        } catch (PDOException $err){
            echo "Fejl: " . $err->getMessage();
        }

    }

    function getCurrentFoodArray(){
        global $connection;

        $date = new DateTime();
        $curTimestamp =  $date->getTimestamp();
        $curWeek = date("W", $curTimestamp);
        echo $curWeek;

        $sql = "SELECT * FROM food WHERE week = ?";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$curWeek]);
    }