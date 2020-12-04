{strip}
{include 'head.tpl'}
{include 'header.tpl'}

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item"><a href="/sample">Sample</a></li>
        <li class="breadcrumb-item active" aria-current="page">Some endpoint</li>
    </ol>

    <h1 class="mt-5">{$title}</h1>

    <p class="lead">This is a function in the index controller inside a sub-level segment that is found by the framework's automatic route system.</p>
</nav>

{include 'footer.tpl'}