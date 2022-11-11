<?php

namespace App\Models\Org;

use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrgUser extends Model
{
    use HasFactory, Uuids;
}
