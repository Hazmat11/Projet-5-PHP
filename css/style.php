<?php require_once "./function.php"; ?>
<style>
@-webkit-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@-moz-keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}
@keyframes AnimationName {
    0%{background-position:0% 50%}
    50%{background-position:100% 50%}
    100%{background-position:0% 50%}
}

html{
    max-height: 100%;
}

body{
  width: 100%;
  height: 100vh;
  background: linear-gradient(270deg, #<?php echo $varRGB1; ?>, #<?php echo $varRGB2; ?>, #<?php echo $varRGB3; ?>);
  background-size: 600% 600%;
  -webkit-animation: AnimationName 10s ease infinite;
  -moz-animation: AnimationName 10s ease infinite;
  animation: AnimationName 10s ease infinite;
}

button{
  background-color: #781515;
}

nav{
  font-size: 30px;
}

.animate{
  background-image: url(https://c.tenor.com/x8v1oNUOmg4AAAAd/rickroll-roll.gif);
  background-size: contain;
}

#icon{
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
}

.card-image{
  border-style: solid;
  border-width:  6px;
  border-color: #ee6e73;
  max-height: 463px;
}

.buttons{
  margin: 0 auto;
  max-width: max-content;
  border-style: solid;
  border-width:  4px;
  border-color: #ee6e73;
}

h1{
  color: white;
  text-align: center;
  text-shadow: #26a69a 4px 4px 10px;
  text-transform: uppercase;
  text-decoration: underline;
  font-size: 20vw;
}

</style>
