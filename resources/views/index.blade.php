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
                font-family: 'Nunito', sans-serif;
            }
            #ourmanna-verse {
                padding: 10px;
                margin:10px;
                background: #00203FFF;
                border-color: #00203FFF;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
            }
            #mannaverse {
                font-size: 25px;
                font-weight: bold;
                margin-bottom: 10px;
                text-align: center; 
                color: #ADEFD1FF;
            }
            #mannaverse-reference:before {
                content: "- ";
            }
            #mannaverse-reference {
                text-align: right;
                font-size: 12px;
                padding-right: 10px;
                color: #ADEFD1FF;
            }
            #mannaverse-version {
                color: white;
            }
            form {
                margin: 15px;
                font-size: 20px; 
            }
            h1 { 
                text-align: center; 
            }
        </style>
    </head>
    <body class="antialiased">
        <h1> Bible Study Request Form</h1>
        <div id="ourmanna-verse">Verse of the Day is loading...</div>

        <form method="POST" action="/bible-study-form-sent">
            @csrf
            <input type="hidden" name="id" value="{{ $bs_request->id }}" />

            Complete Name:
            <input type="text" name="name" value="{{ $bs_request->name }}" placeholder="Juan Dela Cruz"/>
            <br />

            Email Address:
            <input type="text" name="email" value="{{ $bs_request->email }}" placeholder="juandelacruz@email.com"/>
            <br />

            Contact Number:
            <input type="number" name="contact_number" value="{{ $bs_request->contact_number }}" placeholder="01234567890"/>
            <br />

            Birthdate:
            <input type="date" name="birthdate" value="{{ $bs_request->birthdate }}" placeholder="YYYY-MM-DD"/>
            <br />

            Religious Affiliation:
            <input type="text" name="religion" value="{{ $bs_request->religion }}" placeholder="Religion"/>
            <br />

            Bible Study Date:
            <input type="date" name="bs_date" value="{{ $bs_request->bs_date }}" placeholder="YYYY-MM-DD"/>
            <br />

            Bible Study Time:
            <input type="time" name="bs_time" value="{{ $bs_request->bs_time }}" placeholder="00:00-23:59"/>
            <br />

            Bible Study Location / Address:
            <input type="text" name="bs_address" value="{{ $bs_request->bs_address }}" placeholder="Municipality, City"/>
            <br />

            <input type="submit" value="SAVE" />
        </form>

    </body>
    <script src="http://www.ourmanna.com/verses/api/js/?order=random" type="text/javascript"></script>
</html>