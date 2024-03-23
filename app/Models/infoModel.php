<?php

namespace App\Models;

use CodeIgniter\Model;

class infoModel extends Model
{
    protected $table            = 'info';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['user_id',  'names', 'region','province',    'city',    'barangay',  'cans',    'varia',    'date',    'act',    'area',    'typhoonname',    'typhoon',    'heavy_rains',    'total_damages',    'cans_damages',    'HA',    'disease',  'list', 'standing_crop',   'planted',    'transplate_date',  'expected_date',
    'production',    'Harvested',    'expected_volumn',    'Local',    'per_kg',    'php_per_kg',    'Cold',    'perkg',    'phpper_kg',    'OTHERS', 'created_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
