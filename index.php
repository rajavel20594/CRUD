<!DOCTYPE html>
<html lang="en">
   <head>
      <title>CRUD </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
      <!-- <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> -->
   </head>
   <body >
   <nav class="navbar navbar-expand-sm bg-primary navbar-dark">
   <ul class="navbar-nav">
      <li class="nav-item active" id="li_crud">
         <a class="nav-link" href="#" id="nav-crud">CRUD</a>
      </li>
      <li class="nav-item" id="li_about">
         <a class="nav-link" href="#" id="nav-about">About</a>
      </li>
   </ul>
</nav>
<div class="container">

   <div class="row crud" >
      <div class="col-md-6">
         <h2>CREATE DATA</h2>
      </div>
      <div class="col-md-6 text-center" >
         <h2>TABLE</h2>
      </div>
   </div>
   <div class="row crud" >
      <div class="col-md-6">
         <form action="#" data-parsley-validate>
            <div class="form-group" id="namediv">
               <label for="name">Name:</label>
               <input type="name" class="form-control" id="name" placeholder="Enter name" name="name">
            </div>
            <div class="form-group" id="phonediv">
               <label for="phone">Phone Number:</label>
               <input type="text" class="form-control" id="phone" placeholder="Enter phone number" name="phone">
            </div>
            <div class="form-group "id="iddiv">
               <label for="id">Id:</label>
               <input class="form-control" type="text" id="id" placeholder="Enter the Id value" name="id"> 
               </label>
            </div>
            <div class="float-right">
               <button type="reset" class="btn btn-primary">Reset</button>
               <button type="submit" class="btn btn-primary" id="submit">Submit</button>
               <button type="update" class="btn btn-primary" id="update">update</button>
               <button type="delete" class="btn btn-primary" id="delete">Delete</button>
            </div>
         </form>
      </div>
      <div class="col-md-6">
         <table class="table table-bordered">
            <thead>
               <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>phone</th>
                  <th >edit </th>
                  <th> Delete</th>
               </tr>
            </thead>
            <tbody id="tbody"></tbody>
         </table>
      </div>
   </div>
   <div class="row abtdiv" >
      <div class="col-md-6">
         <h2>Personal Details</h2>
         <table>
            <tr>
               <th>Name</th>
               <td>: A.rajavel</td>
            </tr>
            <tr>
               <th>Father Name </th>
               <td>: K.asokan</td>
            </tr>
            <tr>
               <th> Date of Birth</th>
               <td>: 20-05-1994</td>
            </tr>
            <tr>
               <th>Nationality</th>
               <td>: Indian</td>
            </tr>
            <tr>
               <th> Marriage Status</th>
               <td>: Single</td>
            </tr>
            <tr>
               <th> Mobile Number</th>
               <td>: 8072757987</td>
            </tr>
         </table>
      </div>
      <div class="col-md-6">
         <h2>My profile</h2>
         <img src="src/img/profile.jpg" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
      </div>
   </div>
   
  
</div>
      <script
         src="https://code.jquery.com/jquery-3.6.0.js"
         integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
         crossorigin="anonymous"></script>
      <script src="src/js/parsley.js"></script>
      <script>
         $("#submit").click(function() {
            var name = $("#name").val();
            var phone = $("#phone").val();
            var custom_method = "create";

            if (name == '' || phone == '') {
               alert("Please fill all fields.");
               return false;
            }

            $.ajax({
               type: "POST",
               url: "restcrud.php",
               data: {
                  name: name,
                  phone: phone,
                  custom_method: custom_method
               },
               cache: false,
               success: function(result) {
                  alert(result);
                  location.reload();
               },
               error: function(xhr, status, error) {
                  console.error(xhr);
               }
            });
         });

         $(document).ready(function($) {
            //on page load, get all data from db using ajax
            document.getElementById("update").style.display = "none";
            document.getElementById("iddiv").style.display = "none";
            document.getElementById("delete").style.display = "none";
         //   document.getElementsByClassName("abtdiv")[1].style.display = "none";
             $(".abtdiv").hide();
            var custom_method = "get_all_data";
            $.ajax({
               type: "GET",
               url: "restcrud.php",
               data: {
                  custom_method: custom_method
               },
               success: function(res) {
                  console.log(res);
                  var table_tr = ''

                  $.each(JSON.parse(res), function(i, item) {
                     table_tr += '<tr><td>' + item.id + '</td><td>' + item.name + '</td><td>' + item.phone + '</td><td> <i class="fa fa-edit" onclick="editFunction(' + item.id + ',\'' + item.name + '\',' + item.phone + ')"></i></td><td><i class="fa fa-times" onclick="deleteFunction(' + item.id + ')"></i></td></tr>';
                  });
                  $('#tbody').append(table_tr);
               }
            });
         });

         function editFunction(id, name, phone) {
            document.getElementById("name").value = name;
            document.getElementById("phone").value = phone;
            document.getElementById("id").value = id; //
            document.getElementById("update").style.display = "inline"; //javascript
            document.getElementById("submit").style.display = "none";
         }
         
         function deleteFunction(id)
         {  
            if(confirm("Are you sure on Delete"))
            {
            
            
            var custom_method = "delete";
            $.ajax({
               type: "POST",
               url: "restcrud.php",
               data: {
                  id:id,
                  custom_method: custom_method
               },
               cache: false,
               success: function(result) {
                  alert(result);
                  location.reload();
               },
               error: function(xhr, status, error) {
                  console.error(xhr);
               }
            });}
           
         }

         $("#update").click(function() {
            var name = $("#name").val();
            var phone = $("#phone").val();
            var id =$("#id").val();
            var custom_method = "update";

            if (name == '' || phone == '') {
               alert("Please fill all fields.");
               return false;
            }

            $.ajax({
               type: "POST",
               url: "restcrud.php",
               data: {
                  name: name,
                  phone: phone,
                  id:id,
                  custom_method: custom_method
               },
               cache: false,
               success: function(result) {
                  alert(result);
                  location.reload();
               },
               error: function(xhr, status, error) {
                  console.error(xhr);
               }
            });
         });

         $("#nav-crud").click(function(){
             $(".abtdiv").hide();//jquery hide syntax
             $(".crud").show();
             $("#li_about").removeClass().addClass("nav-item");
             $("#li_crud").removeClass().addClass("nav-item active");
         });
         $("#nav-about").click(function(){
            $(".crud").hide();//.class and #id call
            $(".abtdiv").show();
            $("#li_about").removeClass().addClass("nav-item active");
            $("#li_crud").removeClass().addClass("nav-item");
         });

      </script>
   </body>
</html>