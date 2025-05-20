<?php
namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        $uri = service('uri');
        $segment1 = $uri->getSegment(1); 
        $segment2 = $uri->getSegment(2); 

        if ($segment1 === 'buku' && in_array($segment2, ['create', 'store', 'edit', 'update', 'delete'])) {
            if (!session()->has('user')) {
                return redirect()->to('/auth/login')->with('error', 'Login terlebih dahulu!');
            }
        }
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
    }
}
