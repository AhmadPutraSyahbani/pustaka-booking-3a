<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller 
{
    public function index()
	{
	    echo"<h1> Perkenalan </h1>";
	    echo"Nama : Ahmad Putra Syahbani <br>
	         Tempat Lahir : Jakarta <br>
		     Tanggal Lahir : 27 Desember 1997 <br>
		     Tempat Tinggal : Perumahan Citra Indah City , Cluster Bukit Azalea Blok AF29/03 , Jonggol , Bogor Timur , Jawa Barat <br>
			 Motivasi Kuliah : Saya masuk kuliah ingin menjadi sukses , membanggakan kedua orang tua , terutama kepada ayah saya yang sudah
			                   tidak ada untuk mewujudkan kepada ayah saya dan membuktikan ayah saya , bahwa saya pasti bisa menjalankan kuliahnya
							   dan saya akan membanggakan ibu saya kedepan nanti";
	}
}