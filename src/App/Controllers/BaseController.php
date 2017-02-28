<?php namespace Crip\Filesys\App\Controllers;

use Crip\Core\Support\PackageBase;
use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;

/**
 * Class BaseController
 * @package Crip\Filesys\App\Controllers
 */
class BaseController extends Controller
{
    /**
     * @var PackageBase
     */
    protected $package;

    /**
     * BaseController constructor.
     */
    public function __construct()
    {
        $this->package = new PackageBase('cripfilesys', __DIR__ . '/../..');
    }

    /**
     * @param mixed $data
     * @param int $status
     * @param array $headers
     * @param int $options
     * @return JsonResponse
     */
    protected function json($data = null, $status = 200, $headers = [], $options = 0)
    {
        return new JsonResponse($data, $status, $headers, $options);
    }
}