<?php


if(ISSET($_POST['submit'])){
  
     $title = $_POST['title'];
     $pages = $_POST['pages'];
     $author = $_POST['author'];
     $year = $_POST['year'];

  
    
    
    
    
    $conn = new mysqli("localhost", 'root', '', 'exam') or die(mysqli_error());
   $q1 = $conn->query ("SELECT * FROM `bookinfo` WHERE BINARY `book_id` = '$book_id'") or die(mysqli_error());
    $f1 = $q1->fetch_array();
    $check = $q1->num_rows;
   
  
    if($check > 0){
        
            $conn->query ("UPDATE `bookinfo` SET `title` = '$title', `pages` = '$pages', `author` = '$author', `year` = '$year' WHERE `bookinfo`.`book_id` = '$book_id'") or die(mysqli_error());
    
    }
    else{
        
        $conn->query ("INSERT INTO `bookinfo` (`title`, `pages`, `author`, `year`, `book_id`) VALUES ('$title', '$pages', '$author', '$year', '')") or die(mysqli_error());
        
       
      
    
    }
}
echo "<script>document.location='addbook.php'</script>"
?>