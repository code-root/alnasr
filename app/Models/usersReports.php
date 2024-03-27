<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersReports extends Model
{
    use HasFactory;
    protected $table = 'users_reports';

    protected $fillable = [
        'type',
        'table_id',
        'table',
        'ip_address',
        'cookie',
        'device_type',
    ];
  



}
