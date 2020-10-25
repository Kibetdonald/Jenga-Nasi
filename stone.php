<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="styles.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Add a gray background color with some padding */
body {
  font-family: Arial;
  padding: 20px;
  background: #f1f1f1;
}




/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}



/* Add a card effect for articles */
.card {
   background-color: black;
   color: white;
   padding: 20px;
   margin-top: 20px;
   margin-bottom: 0px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}
.collapsible {
  background-color: #F2AEA0;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
  margin: 4px;
}

.active, .collapsible:hover {
  background-color: #441006;
}

.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: black;
  color: white;
}
/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {   
    width: 100%;
    padding: 0;
  }
}
</style>
</head>
<body>

<div class="topnav">

</div>

  <div class="column">
    <div class="card">
      <img src="stone2.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Stone</h2>
        <p class="title">Wall</p>
        <p>Wall stone</p>
        <p>Price: From Kshs 500</p>
      


<button type="button" class="collapsible">About Wallstone</button>
<div class="content">
  <p></p>
</div>
<button type="button" class="collapsible">Properties</button>
<div class="content">
 <p></p>
</div>

</div>

<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

    </div>
    </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Gallery</h2>
      <div > <img src="stone2.jpg" alt="Jane" style="width:100%">
      <div ><img src="stone2.jpg" alt="John" style="width:100%"></div><br>
      <div><img src="stone2.jpg" alt="John" style="width:100%"></div><br>
      <div><img src="stone2.jpg" alt="John" style="width:100%"></div><br>
      <div><img src="stone2.jpg" alt="John" style="width:100%"></div><br>
      

    </div>
    
  </div>
</div>

<footer >
  <p>EJENGA KENYA</p>
</footer>

</body>
</html>
