<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Slides\Saml2\Models\Tenant;
use Slides\Saml2\OneLoginBuilder;
use Slides\Saml2\Repositories\TenantRepository;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


class ResolveTenant
{
    protected ?TenantRepository $tenants;

    protected ?OneLoginBuilder $builder;

    public function __construct(TenantRepository $tenants, OneLoginBuilder $builder)
    {
        $this->tenants = $tenants;
        $this->builder = $builder;
    }

    public function handle(Request $request, Closure $next): mixed
    {
        if (!$tenant = $this->resolveTenant($request)) {
            throw new NotFoundHttpException();
        }

        if (config('saml2.debug')) {
            Log::debug('[Saml2] Tenant resolved', [
                'uuid' => $tenant->uuid,
                'id'   => $tenant->id,
                'key'  => $tenant->key
            ]);
        }

//        $request->session()->flash('saml2.tenant.uuid', $tenant->uuid);

        $this->builder
            ->withTenant($tenant)
            ->bootstrap();

        return $next($request);
    }

    protected function resolveTenant(Request $request): ?Tenant
    {
        if (!$uuid = $request->route('uuid')) {
            if (config('saml2.debug')) {
                Log::debug('[Saml2] Tenant UUID is not present in the URL so cannot be resolved', [
                    'url' => $request->fullUrl()
                ]);
            }

            return null;
        }

        if (!$tenant = $this->tenants->findByUUID($uuid)) {
            if (config('saml2.debug')) {
                Log::debug('[Saml2] Tenant doesn\'t exist', [
                    'uuid' => $uuid
                ]);
            }

            return null;
        }

        if ($tenant->trashed()) {
            if (config('saml2.debug')) {
                Log::debug('[Saml2] Tenant #' . $tenant->id . ' resolved but marked as deleted', [
                    'id'         => $tenant->id,
                    'uuid'       => $uuid,
                    'deleted_at' => $tenant->deleted_at->toDateTimeString()
                ]);
            }

            return null;
        }

        return $tenant;
    }
}