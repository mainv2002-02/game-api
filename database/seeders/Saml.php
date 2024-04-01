<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Saml extends Seeder
{

    public function run(): void
    {
        $now = Carbon::now();
        DB::table('saml2_tenants')->insertOrIgnore([
                                                       'id'              => 10,
                                                       'uuid'            => '87c296fa-7526-4054-b294-0d476e51f7ea',
                                                       'key'             => 'experienceday',
                                                       'idp_entity_id'   => 'https://sts.windows.net/a2f7095f-5748-4c1f-8098-c0b617027032/',
                                                       'idp_login_url'   => 'https://login.microsoftonline.com/a2f7095f-5748-4c1f-8098-c0b617027032/wsfed',
                                                       'idp_logout_url'  => 'https://login.microsoftonline.com/a2f7095f-5748-4c1f-8098-c0b617027032/saml2',
                                                       'idp_x509_cert'   => 'MIIC8DCCAdigAwIBAgIQKkDWY/hPSphN9PLK5yKlEzANBgkqhkiG9w0BAQsFADA0MTIwMAYDVQQDEylNaWNyb3NvZnQgQXp1cmUgRmVkZXJhdGVkIFNTTyBDZXJ0aWZpY2F0ZTAeFw0yNDAyMjcwODI4MDNaFw0yNzAyMjcwODI4MDNaMDQxMjAwBgNVBAMTKU1pY3Jvc29mdCBBenVyZSBGZWRlcmF0ZWQgU1NPIENlcnRpZmljYXRlMIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwlR9RP7VOcli3MXMdkbE116lk9/r0TXVLDdM2S8qhV6pi7M7iXl9LtoJDRC2+ZfgsUzW3s3AkQR2dAKwKoCixyVDqi0W+sXYLKWDJX7/eUjBW+nVLUMFESmsO1xFbl//fj4iLaOZDo4T3lv2D/f7kWxabQB4TfhFbu7wknJrWlpTpn+0bfTXlPSo2QmDVcF0ETONybbNiq/E4NITt0LeT5fpwnw7I+JNpXqdBhPBRvbNZeRLjxRQegKDU1FwDHqq8e1Jk94/ECxoh/B/X9pJ+7ksBXNh8s66bqvVsHpPFEjqM1U+jipf8tdirMST5fHxIzU9K91HkyXG04wCi9hZEQIDAQABMA0GCSqGSIb3DQEBCwUAA4IBAQCJMOKAG8AqrZh0953CTOt3Uo/I/tXphV9Tn5SYT5N02Sk0CO76awa97Mpc7GoI+M3bvt3J4g5NRgw1mz0/xfaBDoYcddhIE1LzGTXFFLMSyMT7bnGxHr8aSPSyJcJSRyHyIYfxfr3q84B12n+jpD84CYF2UN7X94tvFE4hwhqNX+XPA/0aNoEpdsMs7iem1mWG+VXZbhsOPVTZepC1sFVXS9TC2tGdDipv3ZeGE6DV6QquDtivk/4EBHrxaH3v3/5RIyuP1/gRfLzUR1lzOHknOFYALkOfasCwoRss2RrXS+vDDFRvY89EWAvHhpDTv/JVRpgpqNReWvdXJuKgkG2t',
                                                       'metadata'        => json_encode([]),
                                                       'relay_state_url' => 'https://localhost:8000/auth/callback',
                                                       'name_id_format'  => 'persistent',
                                                       'created_at'      => $now,
                                                       'updated_at'      => $now,
                                                   ]);
    }
}
