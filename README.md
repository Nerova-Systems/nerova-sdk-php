# `nerova/sdk`

Server-side PHP client for Nerova's dedicated stable `tenant-v1` API. The typed
client is built from the published `tenant-v1` OpenAPI contract, so every path,
parameter, and model exists because the contract says so.

This package is server-side only: no browser credential flow, no UI, no
persistent credential storage. Never ship an API key to a browser or a mobile
app.

```bash
composer require nerova/sdk:0.3.0-beta.3
```

The Composer package is `nerova/sdk` (on [Packagist](https://packagist.org/packages/nerova/sdk)),
the client namespace is `Nerova\Sdk`, and it needs PHP 8.2 or later. It installs its HTTP and
serialization runtime libraries (the Guzzle-based request adapter and the JSON, text, form, and
multipart serializers) as regular dependencies. Composer may ask once whether to allow the
`php-http/discovery` and `tbachert/spi` plugins, which come with that runtime; answer yes.

## Versioning

The SDK shares one version line with `@nerova/sdk` and `Nerova.Sdk`
(currently `0.3.0-preview.3`). Composer has no `preview` stability, so a
`-preview.N` suffix is published as a `-beta.N` Git tag: `0.3.0-preview.3` is
`v0.3.0-beta.3`, and `0.3.0-preview.4` will be `v0.3.0-beta.4`. A stable
release keeps the bare `X.Y.Z` (`v0.3.0`). Composer skips pre-releases unless you
name one (as above) or allow the stability, for example
`composer require nerova/sdk:^0.3@beta`. The API surface may change before 1.0, so pin
the exact version.

## Quickstart

The API has one public host, `https://api.nerovasystems.com`, which is the
client's default base URL. Every API key is a Live key (`nrv_live_`) that reaches
Production; approved platforms start on a free testing allowance. Read the key from the
environment and send it as `Authorization: Bearer <key>`. The HTTP runtime ships a
bearer-token authentication provider, so the only code you write is a small token provider:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

use Http\Promise\FulfilledPromise;
use Http\Promise\Promise;
use Microsoft\Kiota\Abstractions\Authentication\AccessTokenProvider;
use Microsoft\Kiota\Abstractions\Authentication\AllowedHostsValidator;
use Microsoft\Kiota\Abstractions\Authentication\BaseBearerTokenAuthenticationProvider;
use Microsoft\Kiota\Http\GuzzleRequestAdapter;
use Nerova\Sdk\NerovaPartnerClient;

final class NerovaApiKeyProvider implements AccessTokenProvider
{
    public function __construct(private string $apiKey) {}

    public function getAuthorizationTokenAsync(string $url, array $additionalAuthenticationContext = []): Promise
    {
        return new FulfilledPromise($this->apiKey);
    }

    public function getAllowedHostsValidator(): AllowedHostsValidator
    {
        return new AllowedHostsValidator(['api.nerovasystems.com']);
    }
}

$apiKey = getenv('NEROVA_API_KEY') ?: throw new RuntimeException('NEROVA_API_KEY is required.');
$tenantId = getenv('TENANT_ID') ?: throw new RuntimeException('TENANT_ID is required.');

$authenticationProvider = new BaseBearerTokenAuthenticationProvider(new NerovaApiKeyProvider($apiKey));
$client = new NerovaPartnerClient(new GuzzleRequestAdapter($authenticationProvider));

$manifest = $client->api()->v1()->tenants()->byTenantId($tenantId)->activation()->manifest()->get()->wait();
echo $manifest?->getState()?->value(), PHP_EOL;
```

Every call returns a promise; `->wait()` resolves it or throws. The client mirrors the URL
structure of the API (`$client->api()->v1()->status()`, `->tenants()->byTenantId($id)`, and so on).

## Mutations and errors

Every mutation requires a caller-owned `Idempotency-Key` header supplied through
the request configuration; the client performs no automatic retries and never
generates a hidden key:

```php
use Nerova\Sdk\Api\V1\Tenants\TenantsRequestBuilderPostRequestConfiguration;
use Nerova\Sdk\Models\CreateTenantV1Request;

$body = new CreateTenantV1Request();
$body->setDisplayName('Demo Salon');
$body->setExternalReference('your-crm-id-123');

$configuration = new TenantsRequestBuilderPostRequestConfiguration(
    headers: ['Idempotency-Key' => 'provision-tenant-your-crm-id-123']
);
$created = $client->api()->v1()->tenants()->post($body, $configuration)->wait();
```

Errors follow RFC 9457: a failed call throws the deserialized
`Nerova\Sdk\Models\ProblemDetails`, which also carries `getResponseStatusCode()` and
`getResponseHeaders()`. The stable `code` and the `correlationId` arrive in
`getAdditionalData()`. Enums are open string sets, so treat unknown values as forward
compatibility rather than errors. List endpoints paginate with `unixms|id` cursors: pass
`limit` and `cursor` and follow `getNextCursor()` until the server stops returning one.

## Documentation and support

Guides, the API reference, and support contacts are on
[docs.nerovasystems.com](https://docs.nerovasystems.com). Start with the
[quickstart](https://docs.nerovasystems.com/getting-started/quickstart) and the
[SDK overview](https://docs.nerovasystems.com/sdks).

This repository is a read-only distribution of the package so that Packagist can serve it.
Do not open issues or pull requests here, they are not monitored; contact Nerova support
through the documentation site instead.
