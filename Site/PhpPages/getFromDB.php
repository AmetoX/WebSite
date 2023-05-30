<?php
 
function getContentFromDatabase($idlocaltext) {
    require("db_inc.php");       
    $stmt = $conn->prepare('SELECT content FROM paragraphs WHERE id = '.$idlocaltext);
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    return $result['content'];
}

function getIDFromDatabase() {
    require("db_inc.php"); 
    $stmt = $conn->prepare('SELECT id FROM paragraphs ');
    $stmt->execute();
    $result = $stmt->get_result()->fetch_assoc();
    return $result['id'];
}

?>