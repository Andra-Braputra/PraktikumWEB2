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
        $segment1 = $uri->getSegment(1); // misal 'buku'
        $segment2 = $uri->getSegment(2); // misal 'create', 'edit', 'delete', atau lainnya

        // Jika akses ke controller buku dan aksi create, edit, delete maka cek login
        if ($segment1 === 'buku' && in_array($segment2, ['create', 'store', 'edit', 'update', 'delete'])) {
            if (!session()->has('user')) {
                return redirect()->to('/auth/login')->with('error', 'Login terlebih dahulu!');
            }
        }
        // Untuk route lain selain itu, biarkan akses bebas
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Tidak perlu aksi setelah request
    }
}
