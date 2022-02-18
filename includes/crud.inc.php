<?php    
    include_once "./includes/connect.inc.php";
    
    
    
    
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
    
    
    // 
    // News
    // 
    
    function getSingleNewsById($newsId){
        global $connection;
        $sql = "SELECT * from news WHERE id = ?";
        $stmt = $connection->prepare($sql);
        $stmt->execute([$newsId]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

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
    
    
    function updateNews($title, $src, $body, $id){
        global $connection;   
        try{
            $sql = "UPDATE news SET title = ?, src = ?, body = ? WHERE id = ?";
            $stmt = $connection->prepare($sql);
            $stmt->execute([$title, $src, $body, $id]);
            header("location: updateNews.php?update=success");
        } catch (PDOException $err){
            echo "Fejl i opdaering af nyheden: " . $err->getMessage();
        }
    }

    // 
    // Check user stuff
    // 
    
    function checkUser($formUsername, $formPassword){
        global $connection;   

        $stmt = $connection->prepare("SELECT * FROM users WHERE dbUsername = ? AND dbPassword = ?");        
        $stmt->execute([$formUsername, $formPassword]);
        return $row = $stmt->fetch();
    }