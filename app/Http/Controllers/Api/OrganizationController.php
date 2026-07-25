<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\LeaderResource;
use App\Http\Resources\BoardMemberResource;
use App\Http\Resources\DepartmentResource;
use App\Http\Resources\DemissionerResource;
use App\Http\Resources\EventResource;
use App\Http\Resources\OrgStatResource;
use App\Models\Leader;
use App\Models\BoardMember;
use App\Models\Department;
use App\Models\Demissioner;
use App\Models\Event;
use App\Models\OrgStat;

class OrganizationController extends Controller
{
    public function leadership()
    {
        return LeaderResource::collection(Leader::all());
    }

    public function board()
    {
        return BoardMemberResource::collection(BoardMember::orderBy('order')->get());
    }

    public function departments()
    {
        return DepartmentResource::collection(Department::with('members')->get());
    }

    public function department(string $slug)
    {
        $department = Department::with('members')->where('slug', $slug)->firstOrFail();

        return new DepartmentResource($department);
    }

    public function demissioners()
    {
        return DemissionerResource::collection(Demissioner::all());
    }

    public function events()
    {
        return EventResource::collection(Event::orderBy('start_date')->get());
    }

    public function stats()
    {
        return OrgStatResource::collection(OrgStat::orderBy('order')->get());
    }
}