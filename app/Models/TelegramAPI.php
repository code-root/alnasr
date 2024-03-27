<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TelegramAPI extends Model {

use HasApiTokens, HasFactory, Notifiable;
protected $table = 'telegram_api';

protected $fillable = [
    'id',
    'name',
    'chatID',
    'token',
    
];
protected $casts = [
    'created_at' => 'datetime',
    'updated_at' => 'datetime',

];
}