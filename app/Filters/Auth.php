<?php
namespace App\Filer;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class auth implements FilterInterface
{ 
    public function before(RequestInterface $REQUEST, $arguments = null)
{
//si el usuario no esta logeado
    if(!session()->get("logged_in")){
        // entonce redirecciono a la pagina del login page
        return redirect()->to("/login");
    }
}
//-------------------------------------------------------------------
public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
{
    //Do something here
}
}