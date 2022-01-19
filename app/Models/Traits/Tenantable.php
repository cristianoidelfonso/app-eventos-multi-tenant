<?php

namespace App\Models\Traits;

use App\Models\Tenant;
use App\Scopes\TenantScope;

trait Tenantable
{
    protected static function bootTenantable()
    {
        static::addGlobalScope(new TenantScope);

        // Código inicial
        // if(session()->has('tenant_id') && !is_null(session()->get('tenant_id'))){
            // static::creating(function($model) {
                // $model->tenant_id = session()->get('tenant_id');
            // });
        // }


        //  Refactor 01
        if(checkTenantId()) {
            static::creating(function($model) {
               $model->tenant_id = session()->get('tenant_id');
            });
        }


        // Refactor 02
        // if(checkTenantId()) {
        //     static::creating(function($model) {
        //        $model->tenant_id = session('tenant_id');
        //     });
        // }
    }

    public function tenant()
    {
        return $this->belongsTo(Tenant::class);
    }
}