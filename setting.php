<?php
require_once 'formDesign.php';
?>
<div class="d-flex flex-col" style='margin-top:6px;'>
    <input type="checkbox" id="check1">
    <label for="check1">Full Name</label>
    <input type="checkbox" id="check2">
    <label for="check2">Email</label>
    <input type="checkbox" id="check3">
    <label for="check3">Subject</label>
    <input type="checkbox" id="check4">
    <label for="check4">Message</label>
    <button onclick="HandleClick()"  type="submit" id="submit">Submit</button>
</div>


<script>
    // variables
    const input1 = document.getElementById('fname');
    const input2 = document.getElementById('lname');
    const input3 = document.getElementById('subject');
    const input4 = document.getElementById('msg');

    const check1 = document.getElementById('check1');
    const check2 = document.getElementById('check2');
    const check3 = document.getElementById('check3');
    const check4 = document.getElementById('check4');

    const submit = document.getElementById('submit');


    const HandleClick = () => {
        if (check1.checked === true) {
            input1.style.display = 'block'
            localStorage.setItem('fname', 'block');

        } else {
            input1.style.display = 'none'
            localStorage.setItem('fname', 'none');
        }

        if (check2.checked === true) {
            input2.style.display = 'block'
            localStorage.setItem('lname', 'block');
        } else {
            input2.style.display = 'none'
            localStorage.setItem('lname', 'none');
        }

        if (check3.checked === true) {
            input3.style.display = 'block'
            localStorage.setItem('subject', 'block');
        } else {
            input3.style.display = 'none'
            localStorage.setItem('subject', 'none');
        }

        if (check4.checked === true) {
            input4.style.display = 'block'
            localStorage.setItem('msg', 'block');
        } else {
            input4.style.display = 'none'
            localStorage.setItem('msg', 'none');
        }
    }
</script>