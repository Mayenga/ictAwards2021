<?php 
require 'action.php';
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <title>Tanzania ICT Awards : Index</title>
      <!-- Favicon-->
      <link rel="icon" href="../assets/fevicon.png" />
      <!-- Bootstrap Icons-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
      <!-- Google fonts-->
      <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
      <!-- SimpleLightbox plugin CSS-->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
      <!-- Core theme CSS (includes Bootstrap)-->
      <link href="../css/styles.css" rel="stylesheet" />

        <style type="text/css" >
            .errorMsg{border:1px solid red; }
            .message{color: red; font-weight:bold; }
        </style>
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
          <div class="container px-4 px-lg-5">
              <a class="navbar-brand" href="../index.php" style="color: black;">ICTAwards2021</a>
              <button class="navbar-toggler navbar-toggler-right" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                  <ul class="navbar-nav ms-auto my-2 my-lg-0">
                      <li class="nav-item"><a class="nav-link" href="../index.php" style="color:black">Continue Browsing</a></li>
                  </ul>
              </div>
          </div>
        </nav>
        
       
        
        <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6 text-center">
                        <h2 class="mt-0">Choose Nominee!</h2>
                        <hr class="divider" />
                        <p class="text-muted mb-5">Tell us little about you and choose who to receive award this year!</p>
                    </div>
                    <?php if (isset($errorMsg)) { echo "<p class='message'>" .$errorMsg. "</p>" ;} ?>
                </div>
                <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
                    <div class="col-lg-6">
                        
                        <form action="action.php" method="POST" id="contactForm" data-sb-form-api-token="API_TOKEN">
                            <!-- Name input-->
                            <div class="form-floating mb-3">
                                <input class="form-control" id="name" type="text" name="name" placeholder="Enter your name..." data-sb-validations="required" required/>
                                <label for="name">Full name</label>
                                <div class="invalid-feedback" data-sb-feedback="name:required">Name is required.</div>
                            </div>
                            <!-- Email address input-->
                            <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" name="email" placeholder="name@example.com" data-sb-validations="required,email" required/>
                                <label for="email">Email address</label>
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>

                            <div class="form-floating mb-3">
                                <input type="submit" name="verification" class="btn btn-primary" value="Request Verifiation code"></input>
                                <input class="form-control" id="email" type="text" name="codes" placeholder="" data-sb-validations="required,code"/>
                                <div class="invalid-feedback" data-sb-feedback="code:required">Verification code is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="code:email">code is not valid.</div>
                            </div>
                           
                            <h6>Choose your Normination</h6>
                            <div class="form-floating mb-3">
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" name="bic"> 
                                            <option value="">Best ICT Company Of the Year </option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" name="btoc">
                                            <option value="">Best Tanzanian-Owned ICT Company of the Year</option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" name="mic">
                                            <option value="">Most Innovative ICT Company of the Year</option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                    echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" name="bicc">
                                            <option value="">Best ICT Contact Center & BPO Company of the Year</option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                    echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" name="bicAG">
                                            <option value="">Best ICT Company of the Year for Animation & Game Development</option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                    echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" name="bicPS">
                                            <option value="">Best ICT Company of the Year Providing Services for Finance and Accounting</option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                    echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" name="bcpsHIM">
                                            <option value="">Best ICT Company of the Year Providing Services for Health Information Management</option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                    echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" name="bicITSD">
                                            <option value="">Best ICT Company of the Year for Information Technology & Software Development</option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                    echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <select class="form-control" name="byiE">
                                            <option value="">Best Young ICT Entrepneur of the Year </option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                    echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                    <div class="col">
                                        <select class="form-control" name="bir">
                                            <option value="">Best ICT Research of the year</option>
                                            <?php
                                                $records = mysqli_query($con, "SELECT * From wapendekezwa");  // Use select query here 
                                                while($data = mysqli_fetch_array($records)){
                                                    echo "<option value='". $data['id'] ."'>" .$data['companyName'] ."</option>";  // displaying data in option menu
                                                }	
                                            ?> 
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <!-- Submit Button-->
                            <div class="d-grid"><input class="btn btn-primary btn-xl" id="submitButton" value="Nominate" name="register" type="submit"></div>
                            <br>
                            <div class="d-grid"><h6><a href="#">Or See my Normination</a></h6></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="bg-light py-5">
            <div class="container px-4 px-lg-5"><div class="small text-center text-muted">Copyright &copy; 2021 - Company Name</div></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- SimpleLightbox plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
