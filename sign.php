
<!DOCTYPE html>

<html lang="en">

<head>

    
    <meta charset="UTF-8">

     <title>facebook</title>

    
    <link rel="stylesheet" href="style.css">

</head>

<body>

     <div class="header">

        

         </div>

     <div class="main" style="width:100%;">

          <div class="left-side">

               <img src="assets/image/facebook%20Signin%20image.png" alt="">

              </div>

          <div class="right-side">

             
               <h1 style="color:#212121;">Create an account</h1>

               <div style="color:#212121; font-size:20px">It's free and always will be</div>

               <form name="user-sign-up" method="post" action="handle.php">

                    <div class="sign-up-form">

                         <div class="sign-up-name">

                              <input type="text" name="first-name" id="first-name" class="text-field" placeholder="First Name">

                              <input type="text" name="last-name" id="last-name" placeholder="Last Name" class="text-field">

                             </div>

                         <div class="sign-wrap-mobile">

                              <input type="text" name="email-mobile" id="up-email" placeholder="Mobile number or email address" class="text-input">

                             </div>

                         <div class="sign-up-password">

                              <input type="password" name="up-password" id="up-password" class="text-input" placeholder="Password">

                             </div>

                         <div class="sign-up-birthday">

                              <div class="bday">Birthday</div>

                              <div class="form-birthday">

                                   <select name="birth-day" id="days" class="select-body">
                                       <option value="1"> 1</option>
                                       <option value="2"> 2</option>
                                       <option value="3"> 3</option>
                                       <option value="4"> 4</option>
                                       <option value="5"> 5</option>
                                       <option value="6"> 6</option>
                                       <option value="7"> 7</option>
                                       <option value="8"> 8</option>
                                       <option value="9"> 9</option>
                                       <option value="10"> 10</option>
                                       <option value="11"> 11</option>
                                       <option value="12"> 12</option>
                                       <option value="13"> 13</option>
                                       <option value="14"> 14</option>
                                       <option value="15"> 15</option>
                                       <option value="16"> 16</option>
                                       <option value="17"> 17</option>
                                       <option value="18"> 18</option>
                                       <option value="19"> 19</option>
                                       <option value="20"> 20</option>
                                       <option value="21"> 21</option>
                                       <option value="22"> 22</option>
                                       <option value="23"> 23</option>
                                       <option value="24"> 24</option>
                                       <option value="25"> 25</option>
                                       <option value="26"> 26</option>
                                       <option value="27"> 27</option>
                                       <option value="28"> 28</option>
                                       <option value="29"> 29</option>
                                       <option value="30"> 30</option>
                                       <option value="31"> 31</option>
                                      
                                   </select>

                                   <select name="birth-month" id="months" class="select-body">
                                  
                                       <option value="January"> January</option>
                                       <option value="February"> February</option>
                                       <option value="March"> March</option>
                                       <option value="April"> April</option>
                                       <option value="May"> May</option>  
                                       <option value="June"> June</option>
                                       <option value="July"> July</option>
                                       <option value="August"> August</option>
                                       <option value="September"> September</option>
                                       <option value="October"> October</option>
                                       <option value="November"> November</option>
                                       <option value="December"> December</option>
                                       
                                   </select>

                                   <select name="birth-year" id="years" class="select-body">

                                   
                                       <option value="1980"> 1980</option>
                                       <option value="1981"> 1981</option>
                                       <option value="1982"> 1982</option>
                                       <option value="1983"> 1983</option>
                                       <option value="1984"> 1984</option>
                                       <option value="1985"> 1985</option>
                                       <option value="1986"> 1986</option>
                                       <option value="1987"> 1987</option>
                                       <option value="1988"> 1988</option>
                                       <option value="1989"> 1989</option>
                                       <option value="1990"> 1990</option>
                                       <option value="1991"> 1991</option>
                                       <option value="1992"> 1992</option>
                                       <option value="1993"> 1993</option>
                                       <option value="1994"> 1994</option>
                                       <option value="1995"> 1995</option>
                                       <option value="1996"> 1996</option>
                                       <option value="1997"> 1997</option>
                                       <option value="1998"> 1998</option>
                                       <option value="1999"> 1999</option>
                                       <option value="2000"> 2000</option>
                                      
                                   </select>

                                  </div>

                             </div>

                         <div class="gender-wrap">

                              <input type="radio" name="gen" id="fem" value="female" class="m0">

                              <label for="fem" class="gender">Female</label>

                              <input type="radio" name="gen" id="male" value="male" class="m0">

                              <label for="male" class="gender">Male</label>

                             </div>

                         <div class="term">

                              By clicking Sign Up, you agree to our terms, Data policy and Cookie policy. You may receive SMS notifications from us and can opt out at any time.

                             </div>

                         <input type="submit" name="register" value="Sign Up" class="sign-up">

                        </div>

                   </form>

              </div>

         </div>

     <script src="assets/js/jquery.js"></script>

    </script>

    <script>
       for (let i = new Date().getFullYear();i>1950;i--){
            $("#years").append(
                `<option>${i}</option>`
        );}

        for(let i=1;i<13;i++){
            $("#months").append(
                `<option>${i}</option>`
            );}
      updateNumberOfDays();
      
      function updateNumberOfDays(){
          $("#days").html('');
          let month=$("#months").val();
          let year = $("#years").val();
          let days = daysInMonth(month,year);
          for(i=1;i<days;i++){
              $("#days").append(

                `<option>${i}</option>`
              );
          }
      }
      $("#years,#months").on('change',function(){
        updateNumberOfDays();
      })
      function daysInMonth(month,year){
          return new Date(year,month,0).getDate();

      }
    </script>
</body>

</html>
