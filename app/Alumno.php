<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Alumno
 *
 * @property $id
 * @property $nombre
 * @property $grado_id
 * @property $curso_id
 * @property $fecha_registro
 * @property $sucursal_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Curso $curso
 * @property Grado $grado
 * @property Sucursal $sucursal
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Alumno extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'grado_id' => 'required',
		'curso_id' => 'required',
		'fecha_registro' => 'required',
		'sucursal_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','grado_id','curso_id','fecha_registro','sucursal_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function curso()
    {
        return $this->hasOne('App\Curso', 'id', 'curso_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function grado()
    {
        return $this->hasOne('App\Grado', 'id', 'grado_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function sucursal()
    {
        return $this->hasOne('App\Sucursal', 'id', 'sucursal_id');
    }
    

}
