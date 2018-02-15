<?php

function User_Join()
{
	$user=$_SESSION['u_id'];
	echo $user;
	echo " ";
	$sol="SELECT * FROM general ORDER BY IDpj DESC LIMIT 1";
	$row = mysql_fetch_assoc($sol);
	$nid =$row['IDpj'];
	echo $nid;
	//$nid=mysql_insert_id();//devuelve el ID del ultimo valor insertado
	
	echo $nid;
	 $qry="INSERT INTO personajes (IDuser ,IDchar) 
		VALUES ('$user','$nid')";
		
	if ($conn->query($qry) === TRUE) {
		echo "personaje enlazado con usuario\n";
	}else {
		echo "error al enlazar personaje con usuario\n";
		echo $qry;
		echo $conn->error;
	}
}