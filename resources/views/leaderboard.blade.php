<!DOCTYPE html>
<html>
 <head>
  <title>Laravel Leaderboard</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
    table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
    }

    tr:nth-child(even) {
    background-color: #dddddd;
    }
  </style>
 </head>
 <body>
  <br />
  <div class="container box">
   <h3 text-align="center">Laravel Leaderboard</h3><br />

   @if(isset(Auth::user()->email))
    <div class="alert alert-danger success-block">
     <strong>Welcome {{ Auth::user()->email }}</strong>
     <br />
     <a href="{{ url('/logout') }}">Logout</a>
    </div><br />
    <div class="leaderboard table">
    <table>
  <tr>
    <th>ID</th>
    <th>Team</th>
    <th>Score</th>
  </tr>
  <tr>
    <td>1</td>
    <td>Team 1</td>
    <td>1</td>
  </tr>
  <tr>
    <td>2</td>
    <td>Team 2</td>
    <td>2</td>
  </tr>
  <tr>
    <td>3</td>
    <td>Team 3</td>
    <td>3</td>
  </tr>  
</table>
    </div>
   @else
    <script>window.location = "/";</script>
   @endif
   
   <br />
  </div>
 </body>
</html>