 function validate() {
 	var name =document.getElementById("t1").value;
 	var uname =document.getElementById("t2").value;
 	var pswd =document.getElementById("t3").value;
 	var cpswd =document.getElementById("t4").value;
 	var bday=document.getElementById("t5").value;
 	var gen =document.getElementById("t6").value;
 	var mpho =document.getElementById("t7").value;
 	var ycea =document.getElementById("t8").value;
 	var loca =document.getElementById("t9").value;
 	var subm =document.getElementById("t10").value;
 }
 if(name==""|| uname==""|| pswd==""|| cpswd==""|| bday ==""|| gen==""|| mpho==""|| ycea==""|| loca=="" || subm==""){
 	alert("please enter the all field")
 }