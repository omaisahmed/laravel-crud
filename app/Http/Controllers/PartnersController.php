<?php

namespace App\Http\Controllers;

use App\Models\Partners;
use App\Traits\PartnersTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnersController extends Controller
{
    use PartnersTrait;
}
