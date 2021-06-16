<?php


namespace Cares0107\ExemplePackage\Model;

use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    protected $table = 'exemple';
    protected $fillable = ['name'];

    public function getUppderCasedName(): string
    {
        return strtoupper($this->name);
    }
}
