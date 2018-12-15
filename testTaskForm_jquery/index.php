<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Registration</title>
  </head>
  <body>
    
    <section class="container registration">
      <div class="row">
        <div class="col-12 col-md-8 col-xl-7 m-auto">
              <h1>Register your account</h1>

              <!-- step1 -->
              <form class="needs-validationv" action="index.php" method="POST" id="step1">
                  <h2>Verify your identity</h2>
                  <div class="registerPart">
                    <div class="form-group">
                      <label for="firstName">CUSTOMER FIRST NAME*</label>
                      <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="form-group">
                      <label for="lastName">CUSTOMER LAST NAME*</label>
                      <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                    <div class="form-group">
                      <label for="address1">ADDRESS 1*</label>
                      <input type="text" class="form-control" id="address1" name="address1" required>
                    </div>
                    <div class="form-group">
                      <label for="address2">ADDRESS 2</label>
                      <input type="text" class="form-control" id="address2" name="address2">
                    </div>
                    <div class="form-group">
                      <label for="city">CITY*</label>
                      <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="form-group">
                      <label for="state">STATE*</label>
                      <select class="form-control" id="state" name="state" required>
                        <option value="Option1">Option1</option>
                        <option value="Option2">Option2</option>
                        <option value="Option3">Option3</option>
                        <option value="Option4">Option4</option>
                        <option value="Option5">Option5</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="zipCode">ZIP CODE*</label>
                      <input type="text" class="form-control" id="zipCode" name="zipCode" required>
                    </div>
                    <p class="comment">*Required</p>
                    <input type="hidden" name="csrf" value="">
                    <button type="submit" class="btn btn-warning ml-auto next" name="goToStepTwo">Next</button>              
                  </div> >
              </form>  
            </div>
          </div>
          <!-- step1 end -->
              
          <!-- step2 -->    
          <div class="row">
           <div class="col-12 col-md-8 col-xl-7 m-auto">          
              <form class="needs-validation d-none" action="index.php" method="POST" id="step2">  
                  <h2>Tell us about your home</h2>
                  <div class="registerPart">  
                    <div class="form-group row">
                      <label class="col-12" for="solarPanels">Do you have solar panels in your home?</label>
                      <div class="col-6">
                        <input class="register-check-input" type="radio" name="solarPanels" value="yes"  id="solarPanelsYes" checked>
                        <label class="register-check-label" for="solarPanelsYes">
                          YES
                        </label>
                      </div>
                      <div class="col-6">
                        <input class="register-check-input" type="radio" name="solarPanels" value="no" id="solarPanelsNo" >
                        <label class="register-check-label" for="solarPanelsNo">
                          NO
                        </label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12" for="electricity">Do you have electricity through PG&E?</label>
                      <div class="col-6">
                        <input class="register-check-input" type="radio" name="electricity" value="yes"  id="electricityYes" checked>
                        <label class="register-check-label" for="electricityYes">
                          YES
                        </label>
                      </div>
                      <div class="col-6">
                        <input class="register-check-input" type="radio" name="electricity" value="no" id="electricityNo" >
                        <label class="register-check-label" for="electricityNo">
                          NO
                        </label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12" for="participated">Have you participated in a PG&E rebates program previously?</label>
                      <div class="col-6">
                        <input class="register-check-input" type="radio" name="participated" value="yes"  id="participatedYes" checked>
                        <label class="register-check-label" for="participatedYes">
                          YES
                        </label>
                      </div>
                      <div class="col-6">
                        <input class="register-check-input" type="radio" name="participated" value="no" id="participatedNo" >
                        <label class="register-check-label" for="participatedNo">
                          NO
                        </label>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-12" for="livedFourteenMonth">Have you lived in your home for at least 14 months?</label>
                      <div class="col-6">
                        <input class="register-check-input" type="radio" name="livedFourteenMonth" value="yes"  id="livedFourteenMonthYes" checked>
                        <label class="register-check-label" for="livedFourteenMonthYes">
                          YES
                        </label>
                      </div>
                      <div class="col-6">
                        <input class="register-check-input" type="radio" name="livedFourteenMonth" value="no" id="livedFourteenMonthNo" >
                        <label class="register-check-label" for="livedFourteenMonthNo">
                          NO
                        </label>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="howLong">If you selected yes to the previous question, how long ago? </label>
                      <select class="form-control" id="howLong" name="howLong">
                        <option value="Option1">Option1</option>
                        <option value="Option2">Option2</option>
                        <option value="Option3">Option3</option>
                        <option value="Option4">Option4</option>
                        <option value="Option5">Option5</option>
                      </select>
                    </div>
                    <input type="hidden" name="csrf" value="">
                    <button class="btn btn-warning ml-auto" type="submit" name="register">Register</button>     
                  </div>                            
              </form>
            </div>
          </div>
        <!-- step2 end -->

        <!-- resume -->
        <div class="row">
          <div class="col-12 col-md-8 col-xl-7 m-auto">
            <div class="resume d-none">
              <h2>Thank you</h2>
            </div>
        </div>
      </div>
      <!-- resume end -->
    </section>
    
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>

  </body>
</html>