<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partners extends Model
{
    use HasFactory;
    protected $fillable = [
        'partner_company_logo',
        'partner_company_name',
        'partner_company_link',
        'partner_company_contact_email',
        'partner_company_tag1',
        'partner_company_tag2',
        'partner_company_description1',
        'partner_company_description2',
        'partner_role_image',
        'partner_role_name',
        'partner_role_fb',
        'partner_role_linkedin',
        'partner_role_ytube',
    ];
}
