<?php

    $search=$_REQUEST["search1"];
    $conn=new mysqli("localhost","root","","universal");
    if($conn)
    {
    echo"connected successfully<br>";
    }
    else
    {
    echo"Not connected successfully<br>";
    }
    $sql="insert into rental values ('$search')";
    if($conn->query($sql)===TRUE)
    {
    echo"Successfully Inserted<br>";
    }
    else
    {
    echo"Not Successfully Inserted<br>";
    }
    $del="DELETE FROM rental where rentalsearch='land' ";
    if($conn->query($del)===TRUE)
    {
    echo"Deleted successfully<br>";
    }
    else
    {
    echo"Not Deleted successfully<br>";
    }
$upd="UPDATE rental set rentalsearch='rental' where rentalsearch='rent' ";
if($conn->query($upd)===TRUE)
{
echo"Updated Successfully<br>";
}
else
{
echo"Not Updated Successfully<br>";
}
$select="SELECT * FROM rental";
$res=$conn->query($select);
if($res->num_rows>0)
{
while($row=$res->fetch_assoc())
{
echo"Searching item is :" .$row["rentalsearch"]. "<br>";
}
}
else
{
echo"0 results";
}
$conn->close();
?>