
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Code Validation</title>
</head>
<style>

@import url('https://fonts.googleapis.com/css2?family=Abyssinica+SIL&display=swap');
body{  
   
background-color: #d7caa4;
  font-family: 'Abyssinica SIL', serif;
}
.container{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 740px;
    width: auto;
}

.form-box{
    width: 500px;
    height: 500px;
    box-shadow:
  0px 6.1px 17.8px -4px rgba(0, 0, 0, 0.086),
  0px 12.6px 29.9px -4px rgba(0, 0, 0, 0.111),
  0px 20.3px 37.8px -4px rgba(0, 0, 0, 0.123),
  0px 30.9px 43.8px -4px rgba(0, 0, 0, 0.132),
  0px 50.7px 52.9px -4px rgba(0, 0, 0, 0.144),
  0px 117px 80px -4px rgba(0, 0, 0, 0.17);

border-radius:	20px;

background-color:#2d4079;

}

.input-group{
  top:300px;
  position: absolute;
  width: 300px;
  transition: .5s;

}

.input-field{
  width: 100%;
  padding: 10px 0;
  margin:5px 0;
  border-left: 0;
  border-right: 0;
  border-top: 0;
  border-bottom:3px solid#0d1f57;
  outline: none;
  background:transparent;
  text-align: center;
  color: white;
}

.aligning{
    display: flex;
    justify-content: center;
}
h1{
  text-align: center;
  padding-top: 10px;
  background-color:#ced4da;
  margin-top: 20px;
}

.btn-container{
  margin: 35vh 29vh;
  width: 100%;
}

.aligning button{
  border-radius: 50px;
}
</style>

<body>
<div class="container">
    <div class="form-box">
      <h1>Admin Validation</h1>
        <div class="aligning">
          <form class="input-group" action="codeval.php" method="post">
          <input type="text" class="input-field" name ="code" placeholder="Code"
               required>
              
        <button type="submit" class="btn btn-primary col mr-1">Log In</button>              
          </form>
        
        </div>
    <div class="btn-container">
        <a href="./homepage.php"><button class="btn btn-primary col-4">Back</button></a>
        </div>
    </div>
</div>
</body>
</html>