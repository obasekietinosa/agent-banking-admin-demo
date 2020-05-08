<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Services\AgentService;
use Illuminate\Http\Request;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AgentService $agentService)
    {
        return response()->json($agentService->getAgents());
    }
}
