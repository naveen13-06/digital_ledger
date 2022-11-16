<!DOCTYPE html>
<html>
<head>
	<title>Add Member | Ledger</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<link rel="icon" href="image/icon.png">
<!-- coustom Style sheet -->

<style type="text/css">
</style>

</head>
<body style="background-color: ghostwhite;">
<!-- navbar -->

    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php"><img src="image/icon.png" height="50" width="50" style="margin-right: 2%"> Ledger</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="membersList.php">Home </a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="addMember.php">Add Member <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">Logout</a>
          </li>
        </ul>
        
      </div>
    </nav>

<!-- navebar Ends -->
<!-- Member add form -->
<div class="container">
<h2 style="margin-top: 100px;" align="center">Add Member</h2>
<form method="post" action="addMemberQuery.php" name="fr1" enctype="multipart/form-data">
                    <div class="forssm-row">
                        <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                            <label for="labelName">Full Name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Jhon Deo" required>
                        </div>
                        <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                            <label for="labelEmail" required>Email</label>
                            <input type="email" name="email" class="form-control" id="email" placeholder="Jhon@tr.com">
                        </div>
                         <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                            <label for="Mobile Number" required>Mobile Number</label>
                            <input type="text" name="mobile" class="form-control" id="mobile" placeholder="9829******">
                        </div>
                        <div class="form-group" style="margin-top: 15px; margin-left: 10px ;margin-right: 10px;">
                        	<label for="profile_pic" required>Select A Profile Picture</label>
                        <input type="file" name="fileToUpload" id="fileToUpload" >
                    </div>
                       <button type="submit" class="btn " style="width:96%; background-color:rgb(52, 58, 64);color: #fff; font-size: 20px; margin:10px; ">Add Member</button>
                    </div>
               

                       <button  onclick="window.location.href = 'index.php';"  class="btn " style="width:96%; background-color:rgb(52, 58, 64);color: #fff; font-size: 20px; margin:10px; ">Back To Member</button>
 </form>

</div>








<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>