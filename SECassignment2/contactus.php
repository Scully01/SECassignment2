<!DOCTYPE html>
<html>

<head>
<?php include 'header.php';?>
</head>

<body>

    <div class="card text-white bg-secondary mb-3" style="max-width: 75%; left: 20px">
        <div class="card-header">Contact Us</div>
            <div class="card-body">
                <h5 class="card-title">Where do I go?</h5>
                <p class="card-text">Need to get in contact with the WestBorn Shopping? Well there are numerous ways to reach us. Check below for more! We pride ourselves on being available as often as possible, and making every customer feel they get our full attention.</p>
            </div>
        </div>

    <div class="card text-white bg-secondary sm-3" style="max-width: 75%; left: 20px ">
        <div class="card-body">
            <h5 class="card-title">How and where to find us?</h5>
            <p class="card-text">We are located at 116 Goldburn Avenue, Windsor, Melbourne, 3181 </p>
            <p class="card-text">You can reach us on our phone at: (03) 9584 1252 </p>
        </div>
    </div>
    
    <br>
    <br>
    <br>
    <br>


    <h1 >Want to enquire about something?</h1> 
    <h1 >Shoot us a message below!</h1>
    <form >
        <div class = "form-row">
            <div class="form-group col-md-8 align-items-center" style = "left: 20px" >
                <label for="firstname">First Name</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Your first name" />
            </div>
                
            <div class="form-group col-md-8" style = "left: 20px ">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Your last name" />
            </div>
               
            <div class="form-group col-md-8" style = "left: 20px ">
                <label for="mobilenumber">Mobile Number</label>
                <input type="text" id="mobilenumber" name="mobilenumber" placeholder="Enter your mobile number.." />
            </div>
               
            <div class="form-group col-md-8" style = "left: 20px ">
                <label for="email">Email Address</label>
                <input type="text" id="email" name="email" placeholder="Enter email address" />
            </div>
                
            <div class="form-group col-md-8" style = "left: 20px">
                <label for="messageus">Message Us!</label>
                <textarea name="messageus" placeholder="Send us a message..."  rows = "3" ></textarea>
            </div>
        </div>
        <button type = "submit" class = "btn btn-primary float" >Enquire now!</button>
    </form>
            



    <?php include 'footer.php';?>
    </body>

</html>