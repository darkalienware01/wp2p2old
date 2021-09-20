<?php

namespace App\Controllers;
use App\Models\Model_biodata;
class Lat1 extends BaseController
{
    public function index()
    {
        echo "Lat1 class";
    }
	//C
	  public function biodata1()
    {
		echo "<h1>Perkenalkan</h1>
			<p> Nama : Daffa Arya Dewanata </p>";
    }
	//VC
	 public function biodata2()
    {
		return view('view_biodata1');
    }
	//MC
	  public function biodata3()
    {
		$bio = new Model_biodata(); 
		echo $bio->index();
		echo "<h1>Perkenalkan</h1>
			<p> Nama : Daffa Arya Dewanata </p>";
    }
	//MVC
	  public function biodata4()
    {
		$bio = new Model_biodata();
		$data['bio'] = $bio->index();
		$data['title'] = "Form Biodata";
		return view('view_biodata2',$data);
    }
	
}
