<!DOCTYPE html>
<html>
<head>
<title>Hotel Booking Form</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" h
</head>
<body>
<div class="row">
  <div class="col-75">
    <div class="container">
      <center><h2>Hotel Booking Form</h2></center>
      <form action="submit_phpcrm_form.php" method="POST">
        <div class="row">
          <div class="col-50">
            <input type="text" id="fname" required  name="name" placeholder="Name">  
          </div>
         </div>
              <div class="row">
            <div class="col-50">
                <input type="email" name="email" required placeholder="Email">
            </div>
            <div class="col-50">
               <input type="number" name="phone" required placeholder="Phone">
           </div>
        </div>
        
         
        
        <div class="row">
            <div class="col-50">
                <label>Check In</label>
                <input type="date" name="check_in_date" required >
            </div>
            <div class="col-50">
                <label>Check Out</label>
               <input type="date" name="check_out_date" required >
           </div>
        </div>
        <div class="row">
          
          <div class="col-50">
          
            <select name="no_of_male" >
              <option value="null">Book Room </option>
              <option value="1">Full Day</option>
              <option value="2">Half Day</option>
              <option value="3">Custom</option>
            </select>
          </div>
      </div>
       <div class="row">
       
        
      </div>
        <input type="submit" value="Book Now" class="btn">
       </div>
    </div>
       
    </form>
        
</div>


<style>
    body {
  font-family: Arial;
  font-size: 16px;
  padding: 6px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}



.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 100%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
   max-width:500px;
margin:auto;
}

.container1 {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
   max-width:600px;
margin:auto;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=datetime-local] {
  width: 100%;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}


input[type=email],textarea, select {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

input[type=number] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=time] {
  width: 100%;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}
input[type=date] {
  width: 100%;
  margin-bottom: 20px;
  padding: 10px;
  border: 1px solid #ccc;
  border-radius: 3px;
}



.btn {
  background-color: #04AA6D;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}





/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 400px) {
  .row {
    flex-direction: column;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>

</body>
</html>