<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Projects</title>
        <style>
            body {
                margin: 0;
                background: #f1f1f1;
            }
            .projects {
                width: 300px;
                background: #333;
                position: fixed;
                top: 0;
                height: 100%;
                box-shadow: 2px 0 15px rgba(0, 0, 0, 0.5);
                padding-top: 20px;
            }
            .projects a {
                transition: 0.3s;
                display: block;
                text-decoration: none;
                padding: 12px 20px;
                background: transparent;
                text-align: left;
                color: #fff;
                font-family: monospace;
                font-size: 16px;
            }
            .projects a:hover {
                background: rgba(100,100,100,0.1);
                padding-left: 25px;
            }
            .projects span {
                transition: 0.3s;
                display: block;
                text-decoration: none;
                padding: 8px 16px;
                background: transparent;
                text-align: center;
                color: #fff;
                font-family: monospace;
                font-size: 20px;
            }
            .welcome {
                padding-left: 320px;
                text-align: center;
                margin-top: 330px;
            }
            .welcome p {
                margin: 0;
                font-size: 25px;
                font-family: monospace;
                color: #222;
                display: block;
                padding: 5px;
            }
            .welcome p a {
                text-decoration: none;
                font-size: 28px;
                font-family: monospace;
                color: #5555ee;
            }
        </style>
    </head>
    <body>
        <div class="projects">
            <span>Projects:</span>
            <a href="chat/">Chat</a>
            <a href="qabul/">Qabul</a>
        </div>
        <!--
        <div class="welcome">
            <p>© Copyright 2020 by <a href="http://tsue.uz">TSUE.UZ</a></p>
        </div>
        -->
    </body>
</html>
