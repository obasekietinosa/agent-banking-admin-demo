<?php

namespace App\Http\Controllers\Admin;

use App\Services\AgentService;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * @var AgentService
     */
    private $agentService;

    public function __construct(AgentService $agentService)
    {
        $this->agentService = $agentService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $agents = $this->agentService->getAllAgents();
        return view('admin.home', \compact('agents'));
    }
}
