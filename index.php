<!DOCTYPE html>
<html>
<head><title>Pet Feeder</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100|Raleway:100" rel="stylesheet">
<style>
.switch {
  position: absolute;
  display: inline-block;
  width: 100px;
  height: 54px;
  left: 48%;
  top: 50%;
  z-index: 2;
}
body{
  overflow: hidden;
}
.switch input {display:none;}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 46px;
  width: 46px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #00BFA5;
}

input:checked + .slider:before {
  -webkit-transform: translateX(46px);
  -ms-transform: translateX(46px);
  transform: translateX(46px);
}
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.pet{
   position: absolute;
  display: block;
  font-family: Josefin Sans;
  font-size: 10em;
  left: 32%;
  color: #ccc;
}
img{
  position: absolute;
  display: block;
  top: 16%;
  left: 31.3%;
}
.rem{
  position: absolute;
  display: block;
  z-index: 2;
  font-family: Josefin Sans;
  font-size: 5em;
left: 42%;
bottom: 15%;
  color: #ccc;
}
#if{
    position: absolute;
    display: block;
    bottom: -5%;
    left: 47%;
}
</style>
</head>
<script type="text/javascript">
 
</script>
<body>

<img src="pet4.png">
<p class="pet">Pet Feeder</p>

<form action="program.php" method="post" id="test" target="myIframe">
<label class="switch">
  <input type="checkbox" name="state" value="btn" onclick="document.getElementById('test').submit();">
  <span class="slider round"></span>
</label>
</form>
<p class="rem">remaining</p>

<iframe id="if" name="myIframe" frameborder="0" border="0" cellspacing="0" style="border-style: none;width: 40%; height: 500px;">

</body>
</html> 

