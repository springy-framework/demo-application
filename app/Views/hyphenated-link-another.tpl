{strip}
{include 'head.tpl'}
{include 'header.tpl'}

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/hyphenated-link">Hyphenated link</a></li>
        <li class="breadcrumb-item active" aria-current="page">Another</li>
    </ol>

    <h1 class="mt-5">{$title}</h1>

    <p class="lead">This is a page with the hyphenated link that is found by the framework's automatic route system. But the controller has no hyphen in its name and the method is another than the index.</p>
</nav>

{include 'footer.tpl'}