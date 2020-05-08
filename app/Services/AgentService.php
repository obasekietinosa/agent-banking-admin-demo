<?php


namespace App\Services;

use App\Models\Agent;

class AgentService
{
    public function getAgents()
    {
        return request()->geolocation ? $this->getAgentsWithin(request()->geolocation, request()->distance) : $this->getAllAgents();
    }

    public function getAllAgents()
    {
        return Agent::paginate();
    }

    public function getAgentsWithin(array $cordinates, float $distance)
    {
        $latitude = $cordinates['latitude'];
        $longitude = $cordinates['longitude'];
        return Agent::selectRaw("
            ACOS( SIN( RADIANS( `latitude` ) ) * SIN( RADIANS( $latitude ) ) + COS( RADIANS( `latitude` ) )
            * COS( RADIANS( $latitude )) * COS( RADIANS( `longitude` ) - RADIANS( $longitude )) ) * 6380 AS `distance`
            WHERE
            ACOS( SIN( RADIANS( `latitude` ) ) * SIN( RADIANS( $latitude ) ) + COS( RADIANS( `latitude` ) )
            * COS( RADIANS( $latitude )) * COS( RADIANS( `longitude` ) - RADIANS( $longitude )) ) * 6380 < $distance
            ORDER BY `distance`
        ")->get();
    }

    public function storeAgent(array $data)
    {
        return Agent::create($data);
    }

    public function updateAgent(array $data, Agent $agent)
    {
        return $agent->update($data);
    }

    public function destroyAgent(Agent $agent)
    {
        return $agent->delete();
    }
}
