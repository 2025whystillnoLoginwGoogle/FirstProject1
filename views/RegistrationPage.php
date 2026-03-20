<?php 
    session_start();
    require_once "../bl/UserManager.php";
    $usermanager = new UserManager();
    $users = $usermanager->getUser();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Document</title>5
</head>
<body>
    <div class="row">
        <div class="col s4 m4 l4">
            <?php if (!empty($users)) : ?>
            <a class="waves-effect waves-light btn-large" onclick="redirectFunc(1)"><i class="material-icons right">cloud</i>LOGIN</a>
                    <?php endif ?>
        </div>
           <div class="col s4 m4 l4">
               <div class="row">
                <div class="input-field col s6 m6 l6">
                       <i class="material-icons prefix">account_circle</i>
                      <input id = "fName" type="text" class="validate">
                      <label for="fName">First Name</label>
                </div>
                    <div class="input-field col s6 m6 l6">
                        <i class="material-icons prefix">account_circle</i>
                        <input id = "lName" type="text" class="validate">
                        <label for="lName">Last Name</label>
                </div>
                  <div class = "col s12 m12 l12">
                    <a class="waves-effect waves-light btn-large #edbb08 yellow darken-1"style="width:100%;"onclick = "submitFunc()">
                         <i class="material-icons left">add_circle</i>
                         Add user
                    </a>
                </div>

                <br>
                   <div class = "col s12 m12 l12">
                    <table class="highlight centered">
                       <th>User ID</th>
                       <th>First Name</th>
                       <th>Last Name</th>
                       <th>Action</th>
                   </tr>

                <?php if (!empty($users)) : ?>
                        <?php foreach ($users as $index => $user) : ?>
                           <tr>
                              <td><?= $index + 1; ?></td>
                              <td><?= $user['FirstName']; ?></td>
                              <td><?= $user['LastName']; ?></td>
                              <td>
                                   <a class="waves-effect waves-light btn #004d98 blue darken-1" onclick="updateFunc(<?= $index; ?>)" style ="width: 100%;margin: 5px" ><i class="material-icons right">refresh</i>Update</a>
                                   <a class="waves-effect waves-light btn #a50044 red darken-1" onclick="deleteFunc(<?= $index; ?>)" style ="width: 100%;margin: 5px" ><i class="material-icons right">remove</i>Delete</a>
                               </td>
                          </tr>
                             <?php endforeach; ?>
                                 <?php else : ?>
                     <tr>
                         <td>No data found</td>
                     </tr>
                         <?php endif; ?>
                     </table>
                  </div>
             </div>
             <div class = "col s4 m4 l4">
             </div>
          </div>  
     </div>
                    
<br>
        <script src="../scripts/Service.js"></script>     
                                
</body>
</html>

