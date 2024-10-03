<!-- <?php
    $Email = $_POST['Email'];
    $Address = $_POST['Address'];
    $Firstname = $_POST['Firstname'];
    $City = $_POST['City'];
    $Lastname = $_POST['Lastname'];
    $Postalcode  = $_POST['Postalcode '];
    $Phonenumber = $_POST['Phonenumber'];

    //Database connesction//
    $conn =new mysqli('localhost','root','','cultclassy');
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    
    }else{
        $stmt = $conn->prepare("insert into checkout(email,Address,Firstname,City,Lastname,Postalcode ,Phonenumber) values (?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssi",$email,$Address,$Firstname,$City,$Lastname,$Postalcode ,$Phonenumber);
        echo "registration Successful...";
        $stmt->close();
        $conn->close();
    }


?> -->