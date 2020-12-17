<?php include "modal.php"; ?>
<head>
    <script>
    function getcity(str){
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
            document.getElementById("city").innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET", "getcity.php?s="+str, true);
        xmlhttp.send();
    }
    </script>
</head>

<h1 style="text-align:center;">Home</h1>
<form action="register.php" method="post" enctype="multipart/form-data">
    <span style='color:red;'>* Minimumn 5 charactors</span><br />
    Name: <input type="text" name="name" placeholder="Enter Your Name" minlength="5"  required><br /><br />
    <span style='color:red;'>* Must contain @</span><br />
    Email: <input type="email" name="email" placeholder="Enter Your Email" required><br /><br />
    State: <select name="state" onchange="getcity(this.value)">
        <option value="">Select State</option>
        <option value="Gujarat">Gujarat</option>
        <option value="Madhya Pradesh">Madhya Pradesh</option>
    </select><br /><br />
    City:
    <select name="city" >
    <option  id="city" >Select City</option>
    </select>
    <br /><br />
    <span style='color:red;'>* Required</span><br />
    Hobbies: 
     <input type="text" name="hobbies" placeholder="Enter Your Hobbies" required><br /><br />
    Upload Profile:<input type="file" name="image" ><br /><br />
     <input type="submit" value="Register" name="register">
</form>

<hr />
<h2>Registered Users</h2>
<form action="showusers.php" method="post" enctype="multipart/form-data">
<select name="username">
      <?php foreach($names as $user)
        {
            echo "<option value=".$user.">".$user."</option>";
    
        }?>
</select>
<input type="submit" value="Show" name="show">
</form>