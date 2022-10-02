<!DOCTYPE html>
<html>
<head>
  <title>User- Aviral Chaurasia</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/ac.ico">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script>
  <!--hide
  var Password
  var pass1='aviralchaurasia09'
  password=prompt('𝗘𝗻𝘁𝗲𝗿 𝗬𝗼𝘂𝗿 𝗨𝘀𝗲𝗿𝗻𝗮𝗺𝗲');
  if(password==pass1)
  alert;
  else
  {
    window.location=("admin.html");
  }
  var password
  var pass2='195209'
  password=prompt('𝗘𝗻𝘁𝗲𝗿 𝗬𝗼𝘂𝗿 𝗣𝗮𝘀𝘀𝘄𝗼𝗿𝗱');
  if(password==pass2)
  alert('You Successfully, Logged In!! Aviral Chaurasia, Now you can go to your Admin Panel of your DataBase');
  else{window.location=('admin.html');
}
</script>


<body>
<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.title {
  color: grey;
  font-size: 18px;
}

button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

a {
  text-decoration: none;
  font-size: 22px;
  color: black;
}

button:hover, a:hover {
  opacity: 0.7;
}
</style>
</head>
<body>
 
<h2 style="text-align:center">User Profile</h2>

<div class="card">
    <img src="assets/img/maall.jpeg" width="100%" alt="">
  <h1>Aviral Chaurasia</h1>
  <p class="title">Engineering Student</p>
  <p class="title">Persuing B-Tech in Electronic & Communication Engineering</p>
  <p>Purvanchal University</p>
  <div style="margin: 24px 0;"> 
    
  </div>
  <!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <!-- <title>Digital Clock Javascript | CodingNepal</title> -->
    <link rel="stylesheet" href="style.css">

      <a class="nav-link btn-outline-primary rounded-pill px-3 active" href="index.html">𝐇𝐨𝐦𝐞</a><p>
      <a class="nav-link btn-outline-primary rounded-pill px-3 active" href="personal.html">Admin Panel</a>
  </head>
  <body>
    <div class="clock">
      <div class="display">
        
</div>
</div>
<script>
      setInterval(function(){
        const clock = document.querySelector(".display");
        let time = new Date();
        let sec = time.getSeconds();
        let min = time.getMinutes();
        let hr = time.getHours();
        let day = 'AM';
        if(hr > 12){
          day = 'PM';
          hr = hr - 12;
        }
        if(hr == 0){
          hr = 12;
        }
        if(sec < 10){
          sec = '0' + sec;
        }
        if(min < 10){
          min = '0' + min;
        }
        if(hr < 10){
          hr = '0' + hr;
        }
        clock.textContent = hr + ':' + min + ':' + sec + " " + day;
      });
    </script>

  </body>
</html>


</div>

</body>
</html>