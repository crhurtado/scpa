function activartext() //usado en Productores_nuevo para campo dirección
{
	if(document.getElementById("dir").value=="OTRA")
	  {document.getElementById("textotras").style.display = "inline";}
	else
	  {document.getElementById("textotras").style.display = "none";}	
}