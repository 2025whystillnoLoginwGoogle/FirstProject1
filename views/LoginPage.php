<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>

  <div class="row">
    <form class="col s12" id="userForm">
      <div class="row">
        <div class="input-field col s6">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_LFName" type="text" class="validate" required>
          <label for="icon_LFName">First Name</label>
        </div>
        <div class="input-field col s6">
          <i class="material-icons prefix">phone</i>
          <input id="icon_LLName" type="tel" class="validate" required>
          <label for="icon_LLName">Last Name</label>
        </div>
        <div class="col s6 m6 l6">
          <button class="waves-effect waves-light btn" onclick = "loginFunc()" type="submit">
            <i class="material-icons right">cloud</i>Submit
          </button>
        </div>
      </div>
              <script src="../scripts/Service.js"></script>     
    </form>
  </div>