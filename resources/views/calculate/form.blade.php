<!DOCTYPE html>

<html>
    <head>
        <meta charset = "utf-8">
            <title>Calculation</title>
            
    </head>
    <style>.container {
  width: 200px;
  clear: both;
  
}
.btn{
    line-height: 1em;
padding: 0px;
}

.container input {
  
  width: 100%;
  height:20px;
  clear: both;
}</style>

<body>
<body style='background-color:silver'>
<h1>Estimated Your Rental Payment</h1>
<h1>Today Date: @php ini_set('date.timezone', 'Asia/Kuala_Lumpur'); echo(strftime("%D %H:%M")); @endphp</h1>
<center>

<div  class="container">
<form action="contol" method="post" >
    @csrf
    Item's ID: <input required type="text" name="fname" >
  <br><br>
 
  </div>  
  Select Date : <input required type="date" id="wdate" name="wdate"> 
  <br><br>
  When do you enter : <input required type="time" id="wtime" name="wtime" >
  <br><br>
  When do you finish : <input required type="time" id="wtime" name="ftime">
  <br><br>
  <div class="btn" >
  <input type="submit" name="submit" value="Submit">
  <input type="reset" name="reset" value="Reset">
  </div>
  
</form>
<br><br><br><br>

</body>

</html>
