<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>
</head>
<body>

<div class="about-section">
  <h1>Sports Equipment Product</h1>
  <p>Here are the example list of the product that are available to rent</p>
  <p>Use this example code when you want to upload your sport equipment rental</p>
</div>

<h2 style="text-align:center">List of Product</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="/images/Futsal_Shoes.jpg" alt="Item 01" style="width:100%">
      <div class="container">
        <h2>Futsal Shoe</h2>
        <p class="title">FS01</p>
        <p>[RM4 rate per hour]</p>
       </div>
    </div>
  </div>


<div class="row">
  <div class="column">
    <div class="card">
    <img src="/images/Futsal_Ball.jpg" alt="Item 02" style="width:100%">
      <div class="container">
        <h2>Futsall Ball</h2>
        <p class="title">FS02</p>
        <p>[RM6 rate per hour]</p>
       </div>
    </div>
  </div>

  <div class="row">
  <div class="column">
    <div class="card">
      <img src="/images/Badminton_set.jpeg" alt="Item 03" style="width:100%">
      <div class="container">
        <h2>Badminton</h2>
        <p class="title">FS03</p>
        <p>[RM10 rate per hour]</p>
       </div>
    </div>
  </div>

<div class="row">
  <div class="column">
    <div class="card">
      <img src="/images/Hockey_stick.jpg" alt="Item 04" style="width:100%">
      <div class="container">
        <h2>Hockey Stick</h2>
        <p class="title">FS04</p>
        <p>[RM4 rate per hour]</p>
       </div>
    </div>
 
</body>
</html>
