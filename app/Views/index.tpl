{strip}
{include 'head.tpl'}
{include 'header.tpl' active='home'}

<h1 class="mt-5">{$welcome}</h1>

<p class="lead">This is a demo application made with <a href="http://springy-framework.com">Springy Framework</a>.</p>

<div class="row justify-content-center">
    <div class="col-12 col-sm-10 col-md-8 col-lg-6 pt-3">
        <h3 class="text-center">Auto Routed Controllers</h3>

        <div class="list-group">
            <a href="/hyphenated-link" class="list-group-item list-group-item-action">Hyphenated link page</a>
            <a href="/hyphenated-link/another" class="list-group-item list-group-item-action">Hyphenated link page with endpoint</a>
            <a href="/hyphen-separated" class="list-group-item list-group-item-action">Another hyphenated link page</a>
            <a href="/underscored_Link" class="list-group-item list-group-item-action">Underscored link page</a>
        </div>
    </div>

    <div class="col-12 col-sm-10 col-md-8 col-lg-6 pt-3">
        <h3 class="text-center">Auto Routed With Namespace Preset</h3>

        <div class="list-group">
            <a href="/api/json-response" class="list-group-item list-group-item-action">JSON response</a>
            <a href="/api/json-array" class="list-group-item list-group-item-action">JSON array response</a>
        </div>
    </div>

    <div class="col-12 col-sm-10 col-md-8 col-lg-6 pt-3">
        <h3 class="text-center">Error Pages</h3>

        <div class="list-group">
            <a href="/bad-request" class="list-group-item list-group-item-action">400 Bad Request</a>
            <a href="/forbidden" class="list-group-item list-group-item-action">403 Forbidden</a>
            <a href="/notfound" class="list-group-item list-group-item-action">404 Page Not Found</a>
            <a href="/im-a-teapot" class="list-group-item list-group-item-action">418 I'm a Teapot</a>
            <a href="/internal-error" class="list-group-item list-group-item-action">500 Internal Server Error</a>
            <a href="/error503" class="list-group-item list-group-item-action">503 Service Unavailable</a>
        </div>
    </div>

    <div class="col-12 col-sm-10 col-md-8 col-lg-6 pt-3">
        <h3 class="text-center">Springy Internals</h3>

        <div class="list-group">
            <a href="/springy/about" class="list-group-item list-group-item-action">About</a>
            <a href="/springy/terminal" class="list-group-item list-group-item-action">
                Console Terminal<br>
                <small>
                    <strong>login:</strong> <code>springy</code><br>
                    <strong>password:</strong> <code>terminal</code>
                </small>
            </a>
        </div>
    </div>
</div>

{include 'footer.tpl'}