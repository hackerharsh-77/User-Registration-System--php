<?php 
    $title = "Index";
    require_once 'includes/header.php';
    require_once 'db/conn.php';
?>
<h1 class= "text-center">Registration of the IT conference</h1>

    <form method="post" action="success.php">
    <div class="mb-3">
        <label for="firstname" class="form-label">First Names</label>
        <input type="text" class="form-control" id="firstname" name="firstname">
    </div>
    <div class="mb-3">
        <label for="lastname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lastname" name="lastname">
    </div>
    <div class="mb-3">
        <label for="dob" class="form-label">Date of Birth</label>
        <input type="date" class="form-control" id="dob" name="dob">
    </div>
    <div class="mb-3">
        <label for="speciality" class="form-label">Area of Expertise</label>
        <select class="form-control" id="speciality"name="speciality">
            <option value="1">Database Admin</option>
            <option value="Software Developer">Software Developer</option>
            <option value="Web Administrator">Web Administrator</option>
            <option value="Others">Others</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="exampleInputEmail1" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Contact Number</label>
        <input type="text" class="form-control" id="phone" name="phone" aria-describedby="phoneHelp">
        <div id="phoneHelp" class="form-text">We'll never share your Contact number with anyone else.</div>
    </div>

    <button type="submit" name= "submit " class="btn btn-primary btn-block">Submit</button>
    </form>
<br>
<br>
<br>
<br>
<br>

<?php 
    require_once 'includes/footer.php';
?>

    