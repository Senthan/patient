<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = ['patient_uuid', 'serial_no', 'name', 'age', 'sex', 'ward', 'B_H_T', 'description', 'status', 'operation_theater', 'admission_type', 'date'];

    public function surgeryType()
    {
        return $this->belongsToMany(SurgeryType::class)->withPivot('diagnosis_id');
    }

    public function diagnosis()
    {
        return $this->belongsToMany(Diagnosis::class, 'patient_surgery_type', 'patient_id', 'diagnosis_id');
    }

    public function examination()
    {
        return $this->hasOne(Examination::class);
    }
}
