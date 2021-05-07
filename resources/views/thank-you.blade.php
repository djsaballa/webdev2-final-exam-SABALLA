<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bible Study</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html {
                background: #ADEFD1FF;
                color: #00203FFF;
            }
            body { 
                margin-left: 20px;
                font-family: 'Nunito', sans-serif;
            }

            a { 
                margin-left: 15%;
            }

            a:link {
                text-decoration: none;
            }

            a:visited {
                text-decoration: none;
            }

            a:hover {
                text-decoration: underline;
                color: purple;
                
            }
        </style>

    </head>
    <body class="antialiased">

    <h1 style="text-align: center; margin-top: 25%;"> Your request form has been recieved and stored in the database~~ </h1>

    <a href="/bible-study-request-form"> Make another Request Form</a>
    <br />
    <a href="/bible-study-requests"> View the list of Bible Study Requests</a>    
    </body>
</html>