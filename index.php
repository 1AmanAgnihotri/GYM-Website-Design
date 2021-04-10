<?php

include_once("GYM.HTML");
?>
*{
padding: 0;
margin: 0;
}
body{
padding: 0;
margin: 0;

}
#enrol{
width: 0;
height: 0;
top: 0;
left: 0;
display: none;
overflow: hidden;
}



#home{
     transform: translateY(100px);
    background-color: rgb(255, 255, 255);
width: 100%;
height: 600px;    
align-items: center;
position: relative;
}
.navlinks
{  
    text-decoration: none;
    
position: absolute;
  }
.logo{
width: 60px;
height: 60px;
position: absolute;
transform: translateX(-900%);
top: 16%;
}
.logo>img
{
width: 100%;
height: 100%;
border-radius: 5%;

}



.navlinks li,a
{text-decoration: none;
margin-left: 10px;
    font-family: 'Lexend', sans-serif;
font-size: 15px;
font-weight: 700;
display: inline;
color: rgb(109, 116, 110);
transition: all ease-in-out 0.3s;
letter-spacing: 3px;
text-align: center;
}

.navbar{
position: fixed;
  display: flex;
justify-content: space-around;
width: 100%;
height: 60px;
background-color: white;
align-items: center;
padding-top:20px;
overflow: hidden;
z-index: 100;

}
.enr{ position: absolute;
  background-color: rgba(255, 255, 255, 0);
transform: translateX(470%);
text-emphasis-color:rgb(43, 43, 143) ;
border: 2px black solid;
width: 120px;
font-size: 13px;
font-family: 'Arial', sans-serif;
font-weight: 500;
padding: 0px 6px;
border-radius: 30px;
letter-spacing: 2px;
height: 38px;
}






li a:hover
{ cursor: pointer;
background-color: blueviolet; 
border-radius: 8%;
color: white;
margin: 0 20px 20px ;
width: 120px;
padding: 5px;
font-size: 15px;
}

.enr:hover
{ color: rgb(0, 0, 0);

  background:linear-gradient(to bottom,rgba(255, 255, 255, 0),rgba(29, 175, 194, 0.459));
transition: all ease-in-out 0.3s;
box-shadow: 0 0 0 0 ;
border-radius: 30px;
cursor:pointer ;
}


.hero{
position: relative;
width: 80%;
left: 10%;
right: 10%;
background-color: rgb(255, 251, 251);
display: flex;
height: 600px;
}
.landimg
{position: absolute;
width: 420px;
height: 300px;
right: 10%;
float: right;
top: 20%;
box-shadow: 0 2px 10px 0;
border-radius: 5%;
}
.landimg>img
{ width: 100%;
  height: 100%;
  object-fit: cover;
border-radius:  5%;

}
.txs
{position: absolute;
width: 100%;
text-align: justify;
top: 30%;
text-overflow: clip;
left: 6%;
}
#head1
{letter-spacing: 6px;
font-family: 'Bebas Neue', cursive;
font-size: 50px;
}
.join
{position: relative;
    width: 120px;
background-color: rgba(243, 226, 236, 0.486);
font-size: 15px;
padding: 5px;
 border-color: rgba(145, 140, 140, 0.336);  
color: rgb(93, 93, 112);
border-radius: 25px;
padding: 3px;

letter-spacing: 2px;
height: 40px;
top: 55%;left: 6%;
border: 2px solid rgba(149, 222, 231, 0.452);
box-shadow:2px 3px 5px 0px rgba(2, 0, 0, 0.658);
}
.join:hover
{ 
border-radius: 25px;
color: rgb(221, 221, 221);
box-shadow: 0 0 0 0;
transition: all ease-in-out 0.2s;
background-color: rgb(0, 0, 0);

}
.plans
{ position: absolute;
    width: 120px;
    height: 40px;
padding: 0 10px;
border-radius: 25px;
    background-color: rgb(13, 167, 13) ;
font-size: 14px;
    font-family: 'Istok Web', sans-serif;
letter-spacing: 4px;
color: white;
top: 55%;
left: 19%;
font-weight: 700;
box-shadow: 2px 3px 5px 0px rgba(2, 0, 0, 0.658);
cursor: pointer;
}

.plans:hover
{  background-color: rgba(0, 0, 0, 0.377);
transition: all ease-in-out 0.2s;
color: white;
border-radius: 25px;
box-shadow: 0 0 0 ;
}
#about
{ width: 100%;
     height: 650px;
  background-image: url(https://www.teahub.io/photos/full/66-662853_gym-hd.jpg);

}
.slidinfo
{
  opacity: 0;
width: 0;
  height: 650px;
  background-color: rgba(0, 0, 0, 0.589);
}
#aboutxt{
font-size: 100px;
left: -50%;
color: white;
top: 900px;
font-family: 'Oswald', sans-serif;
letter-spacing: 4px;
position: absolute;
transform: rotate(90deg);
}
.abin{
position: absolute;
left:-150%;
top: 770px;  
font-size: 30px;
color: white;
font-family: 'Oswald', sans-serif;
font-weight: 200;
text-align: justify;
transition: all ease-in-out 0.5s;
width: 470px;
}
#about:hover .slidinfo 
{  opacity: 1;
width: 100%;
height: 650px;
}
#about:hover #aboutxt
{left: 1%;
    transition: all ease-in-out 0.5s;
}
#about:hover .abin
{     
left: 40%;
}
#pricing
{
  
  background-image: url(https://www.thezonegym.com/wp-content/uploads/2018/02/h3-slider-img-1.jpg);
  background-repeat: no-repeat;
  background-position: right;
  flex-wrap: nowrap;
flex-direction: row;
display: flex;
justify-content: center;
opacity: 0.9;
}

.circle2{
border-bottom: 1px solid white;
  width:300px;
height: 150px;
background:linear-gradient(to bottom right,rgba(0, 0, 0, 0.459),rgb(0, 0, 0));
transform: translate(0%,0%);
transition: all ease-in-out 0.1s;
align-items: center;
}
#pricing > div
{ box-shadow: 1px 2px 20px 2px rgb(0, 0, 0);
margin: 100px;
width: 300px;
height: 500px;

background:linear-gradient(to bottom right,rgba(160, 133, 133, 0.459),rgb(0, 0, 0));
}

.circle
{border-bottom: 1px solid white;
  width:300px;
height: 150px;
background:linear-gradient(to bottom right,rgba(0, 0, 0, 0.459),rgb(0, 0, 0));
transform: translate(0%);


transition: all ease-in-out 0.1s;
}

h3
{font-family: 'Darker Grotesque', sans-serif;
font-size: 70px;
transform: translateY(-150%);
text-align: center;
color: rgb(255, 23, 35);
letter-spacing: 4px;
}
.premium
{  padding-top: 20px;
  transform: translate(10%,-90%);
  display:block;
width: 200px;
transform: translate(25%,-40%);
line-height: 40px;
text-align: center;
}
.e1
{  
  letter-spacing: 3px;
  font-family: 'Jost', sans-serif;
color: rgb(255, 255, 255);
font-weight: 600;
font-size: 20px;
display: block;
}
h5
{ margin-top: 5px;
  font-family: 'Darker Grotesque', sans-serif;
 background-color: ORANGE;
width: 60px;
height: 20px;   
text-align: center;
padding: 2px;
transform: translate(180%,-620%);
border-radius: 8%;
letter-spacing: 1px;
color: rgb(12, 12, 11);
margin-right: 100px;
font-weight: 1000;
}
.premium2
{ 
  display:block;
width: 200px;
transform: translate(25%,3%);
line-height: 50px;
text-align: center;
}

.b1{
font-size: 20px;
color: white;
letter-spacing: 2px;

width: 100px;
height: 30px;
font-family: 'Dela Gothic One', cursive;
border-radius: 8px;
transform: translate(50%,0%);
margin-bottom: 15px;
}

#prep{
  font-family: 'Darker Grotesque', sans-serif;
font-size: 70px;
transform: translateY(15%);
text-align: center;
color: rgb(255, 23, 35);
letter-spacing: 4px;

}

#bs
{ color: white;
   margin-top: 30px;
   background-color: rgb(39, 52, 168);
  font-family: 'Darker Grotesque', sans-serif;
   font-weight: 600;
   letter-spacing: 4px;
   width: 120px;
   font-size:20px; 
   border-radius: 20px;
height: 40px;
cursor: pointer;  
}
#contact
{  
 width: 100%;
 background-color: white;
height: 645px;
}
.loc
{z-index: 50;
   transform: translate(30%,30%);
  width: 400px;
  height: 380px;
border-radius: 10px;
}
.loc>img
{ border-radius: 10px;
  width: 100%;
   object-fit: cover;
height: 100%;

}

#cont
{ font-size: 4vw;
  text-align:center;
  transform: translateY(80%);
font-family: 'Darker Grotesque', sans-serif;
letter-spacing: 2px;
}
#faram
{ position: absolute;
  width: 100%;
  height: 500px;
  float: right;
  top: -8%;
right: -180%;

}
input[type=text], select {
 font-size: 20px;
 letter-spacing: 3px; 
 width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
font-family: 'Darker Grotesque', sans-serif;
}
input[type=submit] {
 font-size: 20px;
 font-weight: 600; 
 width: 100%;
 letter-spacing: 3px;
 padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-family: 'Darker Grotesque', sans-serif;
  color: rgb(255, 255, 255);
  box-sizing: border-box;
background-color: rgb(0, 0, 0);
cursor: pointer;
}
textarea {
 letter-spacing: 3px;
 font-weight: 600;
 font-family: 'Darker Grotesque', sans-serif;
 font-size: 15px;
  width: 100%;
  height: 150px;
  padding: 12px 20px;
  box-sizing: border-box;
  border: 2px solid #ccc;
  border-radius: 4px;
  background-color: #f8f8f8;
  resize: none;
}
label
{  font-family: 'Darker Grotesque', sans-serif;
  font-size: 18px;
font-weight: 700;
  letter-spacing: 3px;
}
footer {
  text-align: center;
  padding: 3px;
  background-color: rgb(0, 0, 0);
  color: white;
display: block;
}
.last
{ height: 60px;
}
html{
scroll-behavior: smooth;
}
footer>a{
transform: translate(-320%,150%);
position: absolute;
font-family: 'Archivo', sans-serif;
font-size: 14px;
font-weight: 700;
}