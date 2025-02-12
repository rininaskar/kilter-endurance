<head>
<link rel="stylesheet" href="css/styled.css" type="text/css"/>
<style>
        .go-back-link {
            display: inline-block;
            margin: 10px 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }

        .go-back-link:hover {
            background-color: #0056b3;
        }

        .container {
            position: relative;
        }
    </style>
</head>
<div >
<a href="adashboard.php" class="go-back-link" style="position: absolute; top: 0px; right: 20px;">Go back to Admin Dashboard</a>
<a href="#" class="go-back-link" style="position: relative; top: 0px; left: 20px;">All Customers</a>
        <br>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">ID</th>
        <th class="text-center">FullName</th>
        <th class="text-center">MobileNumber</th>
		<th class="text-center">Email</th>
        <th class="text-center">RegDate</th>
		<th class="text-center">Action</th>
      </tr>
    </thead>
    <?php
      include('db_conn.php');
      $sql="SELECT * from users";
      $result=$con-> query($sql);
         if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$row["ID"]?></td>
      <td><?=$row["FullName"]?></td>
      <td><?=$row["MobileNumber"]?></td>
	  <td><?=$row["Email"]?></td>
      <td><?=$row["RegDate"]?></td>
	  <td>
	   <a href='Delete.php?id=<?=$row["ID"]?>'>Delete</a>
       <a href='Updateform.php?id=<?= $row["ID"] ?> &FullName=<?= $row["FullName"] ?> &Mob=<?= $row["MobileNumber"] ?> &Email=<?= $row["Email"] ?>'>Update</a>

	   </td>
	</tr>
		<?php
            
           
        }
    }
    ?>
   </table>