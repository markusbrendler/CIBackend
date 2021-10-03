<?php namespace markusbrendler\cibackend\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Session\Session;

class BackendController extends Controller
{

	public function __construct()
	{
		$this->session = service('session');
	}

    public function test()
    {
        echo 'test';
    }

    public function postTest()
    {
        return 'postTEST';
    }

}
