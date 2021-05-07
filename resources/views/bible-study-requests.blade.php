<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Bible Study</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.css">
        
    </head>
    <body>

    <h1 style="text-align: center; margin: 15px;">Bible Study Requests</h1>

        <table id="bs_requests" class="display">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Complete Name</th>
                    <th>Email Address</th>
                    <th>Contact Number</th>
                    <th>Birthdate</th>
                    <th>Religious Affiliation</th>
                    <th>Bible Study Date</th>
                    <th>Bible Study Time</th>
                    <th>Bible Study Location / Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bs_requests as $bs_request)
                <tr>
                    <td>{{ $bs_request->id }}</td>
                    <td>{{ $bs_request->name }}</td>
                    <td>{{ $bs_request->email }}</td>
                    <td>{{ $bs_request->contact_number }}</td>
                    <td>{{ $bs_request->birthdate }}</td>
                    <td>{{ $bs_request->religion }}</td>
                    <td>{{ $bs_request->bs_date }}</td>
                    <td>{{ $bs_request->bs_time }}</td>
                    <td>{{ $bs_request->bs_address }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <a href="/bible-study-request-form"> Make another Request Form</a>

    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.js"></script>
    <script>
    jQuery(document).ready(function(){
        jQuery('#bs_requests').DataTable();
    });
    </script>
</html>