<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ImportExport extends Model
{
    use SoftDeletes;
    public $table = 'import_export';

    protected $dates = ['deleted_at'];

    public $fillable = [
        'doc_number',
        'doc_date',
        'debtor_code',
        'po_number',
        'so_number',
        'part_number',
        'remark'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'doc_number' => 'string',
        'debtor_code' => 'string',
        'po_number' => 'string',
        'so_number' => 'string',
        'code' => 'string',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [

    ];
}
