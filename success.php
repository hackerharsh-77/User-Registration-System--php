<?php 
    $title = "Index";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
    if(isset($_POST['submit'])){
        //extract values from the $_POST array
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];
        // call function to insert and track if success or not
        $isSuccess = $crud->insertAttendees($fname, $lname, $dob, $email,$contact,$specialty,$destination);
    }
    
    if($isSuccess){
        SendEmail::SendMail($email, 'Welcome to IT Conference 2019', 'You have successfully registerted for this year\'s IT Conference');
        include 'includes/successmessage.php';
    }
    else{
        include 'includes/errormessage.php';
    }    
?>



<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?php echo $_POST['firstname'] ." ". $_POST['lastname']; ?></h5>
        <h6 class="card-subtitle mb-2 text-muted"><?php echo $_POST['speciality']; ?></h6>
        <p class="card-text">
            Date of Birth: <?php  echo $_POST['dob']; ?><br>
            Email ID: <?php echo $_POST['exampleInputEmail1']; ?> <br>
            Contact No: <?php echo $_POST['phone'];  ?>
       </p>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>

<?php 
    require_once 'includes/footer.php';
?>