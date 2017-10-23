<?php
 $connection = new MongoClient("mongodb://admin:admin123@ds147510.mlab.com:47510/thomas1db"); 
 $db = $connection->thomas1db;
 if($connection->connected){
 	echo "Berhasil";
 }else {
 	echo "Gagal";
 }
?>