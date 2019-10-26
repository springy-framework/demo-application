{strip}
<body class="d-flex flex-column h-100">
    <header>
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <a class="navbar-brand" href="/">Demo Application</a>

            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="navbar-collapse collapse" id="navbarCollapse" style="">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item {if $active=="home"}active{/if}">
                        <a class="nav-link" href="/">Home {if $active=="home"}<span class="sr-only">(current)</span>{/if}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/springy/terminal">Terminal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/springy/about">About</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="//springy-framework.com" target="_blank" rel="noopener">Springy Framework</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link p-2" href="https://github.com/springy-framework/demo-application" target="_blank" rel="noopener" aria-label="GitHub">
                            <ion-icon name="logo-github"></ion-icon> GitHub
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main role="main" class="flex-shrink-0">
        <div class="container">
