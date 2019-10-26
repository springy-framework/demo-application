{strip}
{include 'head.tpl'}
{include 'header.tpl'}

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Hyphen separated</li>
    </ol>

    <h1 class="mt-5">{$title}</h1>

    <p class="lead">This is a page with the hyphenated link that is found by the framework's automatic route system. The controller has a hyphen in its name.</p>
</nav>

{include 'footer.tpl'}