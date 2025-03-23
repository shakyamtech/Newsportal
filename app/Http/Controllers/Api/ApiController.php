<?php

namespace App\Http\Controllers\Api;

use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\CompanyResource;

class ApiController extends Controller
{
    public function company()
    {
       $company = Company::first();
       return new CompanyResource($company);
    }
}
