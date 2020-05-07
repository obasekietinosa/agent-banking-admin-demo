<?php


namespace App\Services;

use App\Models\Agent;

class AgentService
{
    public function getAllAgents(int $limit)
    {
        return Agent::paginate();
    }

    public function storeAgent(array $data)
    {
        return Agent::create($data);
    }
}
