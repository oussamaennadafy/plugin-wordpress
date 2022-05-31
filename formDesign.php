<h2>Contact Us</h2>
<?php
function submitFormExecution()
{
    global $wpdb;

    if (isset($_POST['sub'])) {
        $name = $_POST['fname'];
        $email = $_POST['lname'];
        $subj = $_POST['subject'];
        $mess = $_POST['msg'];
        $query = "INSERT INTO contact (name,email,subject,message) VALUES ('$name','$email','$subj','$mess')";
        $wpdb->query($query);
        
        
    }
    
}




?>

<form action="" method="post" enctype="multipart/form-data" onsubmit="<?php submitFormExecution() ?> ">
    <div id="fname">
        <label class="mt-2 mb-1" for="fname">Full Name:</label><br>
        <input type="text" name="fname" class="w-100 form-control p-2"><br>
    </div>

    <div id="lname">
        <label class="mt-2 mb-1" for="lname">Email:</label><br>
        <input type="email" name="lname" class="w-100 form-control p-2"><br>
    </div>

    <div id="subject">
        <label class="mt-2 mb-1" for="subject">Subject:</label><br>
        <input type="text" name="subject" class="w-100 form-control p-2"><br>
    </div>

    <div id="msg">
        <label class="mt-2 mb-1" for="msg">Message:</label><br>
        <textarea type="text" name="msg" class="w-100 form-control p-2"></textarea> <br>
    </div>

    <input type="submit" class="mt-3 btn btn-primary" value="Send Message" name="sub">
</form>

<script>
    var fname = document.getElementById('fname');
    fname.style.display = localStorage.getItem('fname');
    var lname = document.getElementById('lname');
    lname.style.display = localStorage.getItem('lname');
    var subject = document.getElementById('subject');
    subject.style.display = localStorage.getItem('subject');
    var msg = document.getElementById('msg');
    msg.style.display = localStorage.getItem('msg');
   
</script>