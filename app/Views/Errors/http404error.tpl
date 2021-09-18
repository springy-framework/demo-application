<!DOCTYPE html>
<html lang="en">
    <head>
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu+Mono" rel="stylesheet">
        <style>
            body {
                background-image: linear-gradient(to bottom right, rgb(75, 145, 218), rgb(0, 5, 6));
                font-family: 'Ubuntu Mono', monospace;
                margin: 0;
            }

            .back {
                display: flex;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                overflow: hidden;
            }
            .back::after {
                flex-basis: 0;
                order: 1;
            }
            .back > p {
                margin: auto;
                color: #24394a;
                text-align: center;
                font-size: 200px;
                font-weight: 900;
                font-family: 'Montserrat', sans-serif;
            }

            .clearflex {
                height: 100vh;
            }

            .message {
                display: flex;
                position: absolute;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
            }
            .message > .content {
                width: 100%;
                margin: auto 24px;
                padding: 16px;
                background-color: rgb(255, 255, 255, 0.1);
                color: #fff;
            }
            .message > .content > p {
                margin: 0;
                margin-bottom: 16px;
            }
            .message > .content > p:last-child {
                margin-bottom: 0;
            }

            .enphasis {
                color: #74c0b9;
            }

            .title {
                color: #f1a96d;
                text-transform: uppercase;
            }

            @keyframes blinker {
                50% {
                    opacity: 0;
                }
            }

            .blink {
                animation: blinker 1s linear infinite;
            }
        </style>
    </head>
    <body>
        <div class="back">
            <p>
                404
            </p>

            <div class="message">
                <div class="content">
                    <p>
                        &gt; <span class="title">ERROR CODE</span>: "<span class="enphasis">HTTP 404 Page not found</span>"
                    </p>

                    <p>
                        &gt; <span class="title">ERROR DESCRIPTION</span>: "<span class="enphasis">The requested URL was not found on this server.</span>"
                    </p>

                    <p>
                        &gt; <span class="blink">_</span>
                    </p>
                </div>
            </div>
        </div>
        <div class="clearflex"></div>
    </body>
</html>