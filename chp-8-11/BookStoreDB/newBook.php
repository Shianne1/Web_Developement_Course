<?php include "utilFunctions.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore - New Book Entry</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href='styles.css'>
</head>
<body>
    <div class="w3-container w3-blue-grey">
        <header class="w3-container w3-center">
            <h1>Bookstore</h1>
            <h2>New Book</h2>
        </header>
        <?php include 'mainMenu.php' ?>

        <form action="newBook.php" class="w3-container w3-sand"
        method="POST">
        <fieldset>
            <label>Title</label>
            <input type="text" class="w3-input w3-border" name="title" maxlength="200" size="200">

            <label>ISBN</label>
            <input type="text" class="w3-input w3-border" name="isbn" maxlength="200" size="200">

            <label>Price</label>
            <input type="text" class="w3-input w3-border" name="price" maxlength="200" size="200">

            <label>Publication Date</label>
            <input type="date" class="w3-input w3-border" name="publication" maxlength="200" size="200">

            <label>Publisher</label>
                <select name="publisher" class = "w3-select">
                    <option value = "" disabled selected>Choose publisher</option>
                    <?php 
                    include "connectDatabase.php";
                    
                    //select customers who do not have orders

                    // need to have a space between them because they are being concated together for the query
                    $sql = "SELECT publisher_id, name, email, phoneNumber ";
                    $sql .= "FROM publisher ";
                 

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $publisherId = $row['publisher_id'];
                            $publisherName = $row['name'];
                            $publisherEmail = $row['email'];

                            echo "<option value = '$publisherId'>$publisherId-$publisherName</option>";                        
                        }
                        $conn->close();
                    }
                    ?>

                </select><br>

                <label>Book Author(s)</label>
                <input name = "authorsSel" id="authorsSel" value="None" type="hidden">
                 <select class="w3-select" name="listAuthorsSel" id="listAuthorsSel"></select>
                 
                 <input value="Remove author" class="w3-button w3-teal w3-round-large" onclick='removeAuthor()'><br>    <br>


                <label>Available Author(s)</label>
                <select name="author" class = "w3-select" id="authorAv">
                    <option value = "" disabled selected>Choose author</option>
                    <?php 
                    include "connectDatabase.php";
                    
                    //select customers who do not have orders

                    // need to have a space between them because they are being concated together for the query
                    $sql = "SELECT * ";
                    $sql .= "FROM author ";
                 

                    $result = $conn->query($sql);

                    if($result->num_rows > 0){
                        while($row = $result->fetch_assoc()){
                            $authorId = $row['author_id'];
                            $authorLastName = $row['lastName'];
                            $authorFirstName = $row['firstName'];

                            echo "<option value = '$authorId'>$authorId-$authorLastName, $authorFirstName</option>";                        
                        }
                        $conn->close();
                    }
                    ?>

                </select><br>
                <input class="w3-button w3-teal w3-round-large" value="Add author" onclick="addAuthor()">  <br>

        </fieldset>

       <p><input type="submit" class="w3-btn w3-blue-grey" name = "submit" value="Add New Book"></p>
</form>
<div class="w3-container w3-sand">
    <?php 
    if(isset($_POST['submit'])){
        if(!isset($_POST['title']) || 
        !isset($_POST['isbn']) || 
        !isset($_POST['price']) || 
        !isset($_POST['publication']) || 
        !isset($_POST['publisher']) || 
        !isset($_POST['authorsSel']) 
        ) {
            echo "<p>You have not entered all the required details.<br/>
            Please go back and try again.</p>";
            exit;
        }
    

    include "connectDatabase.php";

    # create short variable names
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $isbn = mysqli_real_escape_string($conn, $_POST['isbn']);
    $price = mysqli_real_escape_string($conn, $_POST['price']);
    $publication= mysqli_real_escape_string($conn, $_POST['publication']);
    $publisher = mysqli_real_escape_string($conn, $_POST['publisher']);
    $authorsSel = mysqli_real_escape_string($conn, $_POST['authorsSel']);
    

    echo "[debug] authorsSel = $authorsSel<br>";
    $sql = "INSERT INTO book (ISBN, title, publicationDate, publisher_id, price)
    VALUES ('$isbn', '$title', '$publication', '$publisher', '$price')";
    

    if($conn->query($sql) === TRUE){
        $book_id = $conn->insert_id;
        echo "<strong>Book created sucessfully!</strong><br>";
        echo "ISBN: $isbn<br>";
        echo "Title: $title<br>";
        echo "Publication: $publication<br>";
        echo "Publisher: $publisher<br>";
        echo "Price: $price<br>";

    }else{
        echo "Error: Unable to create new book. ".$conn->error."<br>";
        echo $sql;
    }

    $conn->close();
    }

    ?>
        </div>
    </div>

    <script>

        function addAuthor(){
            var listSel = document.getElementById('listAuthorsSel');
            var listAuthorAv = document.getElementById('authorAv');
            var authorsSel = document.getElementById('authorsSel');

            //make sure there are items to add
            if(listAuthorAv.options.length < 1){
                return;
            }

            var listAuthorAvIndex = listAuthorAv.selectedIndex;
            var listAuthorAvInner = listAuthorAv[listAuthorAvIndex].innerHTML;
            var listAuthorAvVal = listAuthorAv[listAuthorAvIndex].value;

            listSel.options[listSel.options.length] = new Option(listAuthorAvInner, listAuthorAvVal);

            listAuthorAv[listAuthorAvIndex] = null;

            sortSelect(listSel);

            //Add book id, quantity and price
            result="";
            for(i = 0; i < listSel.options.length; i++){
                optArray = listSel.options[i].innerHTML.split("|");
        
                result += listSel.options[i].value;
            }

            authorsSel.value = result;
        }

        function removeAuthor(){
            var listSel = document.getElementById('listAuthorsSel');
            var listAuthorAv = document.getElementById('authorAv');
            var authorsSel = document.getElementById('authorsSel');

            //make sure there are items to add
            if(listSel.options.length < 1){
                return;
            }
           
            var listSelIndex = listSel.selectedIndex;
            var listSelInner = listSel[listSelIndex].innerHTML;
            var listSelVal = listSel[listSelIndex].value;

            //remove quantity
            var lastSeparatorIndex = listSelInner.lastIndexOf("|");
            listSelInner = listSelInner.slice(0, lastSeparatorIndex);

            listAuthorAv.options[listAuthorAv.options.length] = new Option(listSelInner, listSelVal);

            listSel[listSelIndex] = null;

            sortSelect(listAuthorAv);

            result = "";
            selArray = authorsSel.value.split('|');
            for(i = 0; i < selArray.length; i++){
                curAuthorArray = selArray[i].split(';');

                if(curAuthorArray[0] != listSelVal){
                    result += selArray[i] + "|";
                }
            }

            //delete extra | at the end if necessary
            if(result.slice(-2,-1) == '|'){
                result = result.substr(0, result.length - 2);
            }

        authorsSel.value = result;
        }
    </script>
</body>
</html>