{strip}
{include 'head.tpl'}
{include 'header.tpl'}

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Underscored link</li>
    </ol>

    <h1 class="mt-5">{$title}</h1>

    <p class="lead">This is a page with the underscored link that is found by the framework's automatic route system.</p>
    <p class="lead">The file and controller class must have an underscore. This works but is not compatible with the PSR.</p>
</nav>

{include 'footer.tpl'}