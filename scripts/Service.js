
function submitFunc() {
    var firstName = document.getElementById("fName").value;
    var lastName = document.getElementById("lName").value;
    // alert(firstName)

    $.ajax({
        url: "../controllers/Controller.php",
        type: "POST",
        data: {
            fName: firstName,
            lName: lastName
        },
        success: function(returnedData) {
            Swal.fire({
                title: "Good job!",
                text: "Successfully added a user named " + firstName + " " + lastName,
                icon: "success",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload(true);
                }
            });

            // alert(returnedData);
        },
        error: function(xhr) {
            alert(xhr.status + ": " + xhr.responseText);
        }
    });
}

function updateFunc(userID) {
    var firstName = document.getElementById("fName").value;
    var lastName = document.getElementById("lName").value;
    // alert(firstName)

    $.ajax({
        url: "../controllers/Controller.php",
        type: "POST",
        data: {
            fName: firstName,
            lName: lastName,
            uID: userID
        },
        success: function(returnedData) {
            Swal.fire({
                title: "Good job!",
                text: "Successfully updated a user named to " + firstName + " " + lastName+"!",
                icon: "success",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload(true);
                }
            });

            // alert(returnedData);
        },
        error: function(xhr) {
            alert(xhr.status + ": " + xhr.responseText);
        }
    });
}

function deleteFunc(userID){

    $.ajax({
        url: "../controllers/Controller.php",
        type: "POST",
        data: {

            uID   : userID,
            delete: true
        },
        success: function(returnedData){
            Swal.fire({
                title: "Good job!",
                text: "Successfully updated deleted a user",
                icon: "success",
                confirmButtonText: "OK"
            }).then((result) => {
                if (result.isConfirmed) {
                    location.reload(true);
                }
            });
        },
        error: function(xhr){
            alert(xhr.status+ ": "+xhr.responseText);
        }
    });
}

function redirectFunc(redirectID){
    if(redirectID==1){
        window.location.href = "../views/LoginPage.php";
    } else if (redirectID==2){
        window.location.href = "../views/DashboardPage.php";
    } else if (redirectID==3){
        window.location.href = "../views/RegistrationPage.php";
    }
        
} 

function loginFunc(){
    var LoginFirstName = document.getElementById("icon_LFName").value;
    var LoginLastName = document.getElementById("icon_LLName").value;
    // alert(firstName)

    $.ajax({
        url: "../controllers/Controller.php",
        type: "POST",
        data: {
            lFName: LoginFirstName,
            lLName: LoginLastName
        },
        success: function(returnedData) {
            if (returnedData==true){
                redirectFunc(2);
            }else{
                alert("User Not found.");
            }
            
            // alert(returnedData);
        },
        error: function(xhr) {
            alert(xhr.status + ": " + xhr.responseText);
        }
    });
}