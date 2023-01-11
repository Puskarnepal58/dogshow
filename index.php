
<?php
include ('database.php');
$randomNumber = rand(1, 9999);
$result = $con->query("SELECT * FROM register WHERE reg_num=$randomNumber"); if
($stmt =$result->num_rows > 0) { { while ($result->num_rows > 0) { $randomNumber
= rand(1, 9999); $result = $con->query("SELECT * FROM register WHERE
reg_num=$randomNumber"); } } $stmt = $con->prepare("INSERT INTO register
(reg_num) VALUES (?)"); $stmt->bind_param("i", $randomNumber);
$stmt->execute();} ?> 



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kathmandu Dog Show</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
	<link href='//fonts.googleapis.com/css?family=Josefin+Sans:400,100,300,600,700' rel='stylesheet' type='text/css'>
  
  </head>

  <body>
    <!-- <div class="bg-img"> -->
      <div class="container"> <!--  Main Container -->
	  <div class="row"> <!-- Row Left of Form -->
	  <div class="col-sm float-left"> <!-- Column Left For Form -->
        <!-- <img src="logo.jfif" alt="" /> -->
        <h3 class="title">Registration Form</h3>
        <div class="form-container">
          <form
            action="file-upload.php"
            enctype="multipart/form-data"            
            method="POST"
          >
		  <div class="row">
		  <div class="col-md-auto">
		  <div class="form-group">		  
            <label for="exampleFormControlInput1">Registration Number</label>
            <input id="textarea" class="form-control form-control-sm" type="text" name="reg_num" value="<?php echo $randomNumber; ?>" disabled/>
          </div>
		  </div>
		  </div>
		 
            
			<div class="row">
			<div class="col-sm">
			<div class="form-group">	
              <!-- <i class="fa fa-user lock"></i> -->
              <i class="fa fa-user-circle-o lock"></i>
              <input
                type="text"
				class="form-control form-control-sm"
                placeholder="Dog Name"
                name="dogname"
                class="name"
                required
              />
			  </div>
			  </div>
              
			  <div class="col-sm">
			  <div class="form-group">	
                <!-- <i class="fa fa-user lock"></i> -->
                <i class="fa fa-venus lock"></i>
                <input
                  type="text"
				  class="form-control form-control-sm"
                  placeholder="Breed"
                  name="breedname"
                  class="name"
                />
				</div>
				</div>
              </div>
            
<div class="row">
			<div class="col-sm">
				 <div class="form-group">				
					<i class="fa fa-venus lock"></i>
					  <input
						type="number"
						class="form-control form-control-sm"
						placeholder="Age"
						name="age"
						class="age"
						required
					  />
				  </div>
			  </div>
			<div class="col-sm">
				  <div class="row">
					<div class="form-group">
					  <div class="col-sm">
					  
					  
					
						<input
						  type="radio"
						  class="radio-button"
						  name="gender"
						  value="male"
						  required
						/>
					
						<label>Male</label>
						
						
						</div>
						
					<div class="col-sm">
						
						<input
						  type="radio"
						  class="radio-button"
						  name="gender"
						  value="female"
						  required
						/>
						<label>Female</label>
					  
					  
					  </div>
					  </div>
				  </div>
           </div>
</div>
			
            <div class="input-name">
              <h6 class="title">Owner/Handler Name</h6>
            </div>
<div class="row">	
	<div class="col-sm">			
		<div class="form-group">
           	<span>
              <i class="fa fa-user lock"></i>
              <input
                type="text"
                placeholder="First Name"
                name="firstname"
                class="name form-control form-control-sm"
                required
              />
			  </span>
	</div>		  
		</div>
	<div class="col-sm">			
		<div class="form-group">	
			  
              <span>
                <i class="fa fa-user lock"></i>
                <input
                  type="text"
                  placeholder="Last Name"
                  name="lastname"
                  class="name form-control form-control-sm"
                  required
                />
              </span>
         </div>		  
		</div>  
			
</div>
<div class="row">	
	<div class="col-sm">			
		<div class="form-group">
           	<span>
              <i class="fa fa-envelope lock"></i>
              <input
                type="email"
                placeholder="Email"
                name="email"
                class="email form-control form-control-sm"
                required
              />
              </span>
	</div>		  
		</div>
	<div class="col-sm">			
		<div class="form-group">	
			  
              			  <span>
                <i class="fa fa-phone lock"></i>
                <input
                  type="text"
                  placeholder="Contact Number"
                  name="number"
                  class="number form-control form-control-sm"
                  pattern="[0-9]{10}"
                  required
                />
              </span>
         </div>		  
		</div>  
			
</div>
          
<div class="row">
<div class="col-sm">	
            <h6 class="title">Program</h6>
              <ul class="list-unstyled">
                <li>Puppy Entry -age category - (4months-12months)</li>
                <li>Adult entry-age category - (no age limit)</li>
                <li>Pregnant or on heat bitches arenot allowed in show.</li>
                <li>
                  Diseased or on going treatment dogs & bitches are not allowed.
                </li>
                <li>
                  All the exhibitors/participants should be on leash all the
                  time.
                </li>
                <li>
                  All the participants should be groomed before entry in the
                  show.
                </li>
              </ul>
	</div>
</div>            

<div class="row">
 <div class="col-sm">

         
 <h6 class="title">Note: Registration won't be valid until the payment slip is uploaded.</h6>             
 <h6 class="title">Please Upload Images:</h6>
            
            <div class="row">
			<div class="col-sm">
			<div class="form-group">
              <label for="img">Dog Image</label>
              <input
                class="img"
                type="file"
                id="img"
                name="left_view"
                accept="image/*"
                required
                
              />
			  </div>
			  </div>
			  </div>
              
			  <!-- <div class="row">
			  <div class="col-sm">
			<div class="form-group">
                <label for="img">Right View (Optional)</label>
                <input
                  class="img"
                  type="file"
                  id="img"
                  name="right_view"
                  accept="image/*"
                   />
             </div>
			 </div>
			  </div> -->
			  
            <div class="row">
			<div class="col-sm">
			<div class="form-group">
              <label for="img">Payment Slip</label>
              <input
                class="img"
                type="file"
                id="img"
                name="pay_slip"
                accept="image/*"
                required
              />
            </div>
			</div>
			</div>
                    
 
<div class="row">
			<div class="col-sm">
              <h6 class="title">Contact Details</h6>
              <p>+977 9851179321 <br> +977 9808214559 <br> +977 9851117887 </p>
              <h6> Dog Registration Fee</h6>
              <h6>1500</h6>
              <h6> Entrance Fee</h6>
              <h6>250</h6>
              </div>
			  <div class="col-sm">
              <h6 class="title">Please scan to pay to register</h6>
             <img src="Qrcode.jpeg" class="my-image img-fluid" alt="Qrcode">
              
            
              </div>
</div>
 <div class="row">
			<div class="col-sm">
			<div class="form-group">
			<div class="form-check form-check-inline">
              <input type="checkbox" class="check-button form-check-input" required />
              <label for="check-button" class="check form-check-label"
                >I agree the terms & conditions of the organiser team.</label>
				</div>
				</div>
				</div>
				</div>
           
        
	</div>	
</div>
<div class="row">
			<div class="col-sm">
              <input class="btn btn-primary" type="submit" name="submit" value="Submit" />
			  </div>
 </div> 
            
          </form>
        </div>
		</div> <!-- Column Left For Form -->
		<div class="col-sm float-right"> <!-- Column Right For Picture -->
		<!-- <div class="bg-img"> -->
		
		<img src="dogshow.jpg" class="img-fluid" alt="Responsive image">
		
		<!-- </div> -->
		</div> <!-- Column Right For Picture -->
		</div> <!-- Row for Form and Picture -->
<div class="row"> <!-- Row for Footer -->
		<div class="col-sm">
		            <div class="text-center">
              <div class="footer">
                Designed by: <a href="https://www.sait.com.np/" target="_blank">SA IT Solution and Trade Concerns</a>
              </div>
            </div>
		</div>
</div> <!-- Row for Footer -->
</div> 
    
  </body>
</html>