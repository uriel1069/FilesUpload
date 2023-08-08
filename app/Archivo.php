<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Archivo extends Model
{
    use Notifiable;
    protected $table = 'archivos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'nom_file',
        'rut_file',
        'fecha_upload'
    ];
}
