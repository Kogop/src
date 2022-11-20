<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title><?= $title = "Exams Schedule" ?></title>
  <!--<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
-->
  <link rel="stylesheet" href="./styles.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="./htmlpart.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown link
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="templ bg-light">

    <div class="calendar-item">
      <div class="calendar-head">Декабрь 2022</div>
      <table>
        <tr>
          <th>Пн</th>
          <th>Вт</th>
          <th>Ср</th>
          <th>Чт</th>
          <th>Пт</th>
          <th>Сб</th>
          <th>Вс</th>
        </tr>
        <tr>
          <td></td>
          <td></td>
          <td></td>
          <td class="calendar-day "> <a class="link" href="./index2.php"> 1</a> </td>
          <td class="calendar-day "><a class="link" href="#"> 2</a></td>
          <td class="calendar-day "><a class="link" href="#"> 3</a></td>
          <td class="calendar-day "><a class="link" href="#"> 4</a></td>
        </tr>
        <tr>
          <td class="calendar-day "><a class="link" href="#"> 5</a></td>
          <td class="calendar-day "><a class="link" href="#"> 6 </a></td>
          <td class="calendar-day "><a class="link" href="#"> 7</a></td>
          <td class="calendar-day "><a class="link" href="#"> 8</a></td>
          <td class="calendar-day "><a class="link" href="#"> 9</a></td>
          <td class="calendar-day "><a class="link" href="#"> 10</a></td>
          <td class="calendar-day "><a class="link" href="#"> 11</a></td>
        </tr>
        <tr>
          <td class="calendar-day "><a class="link" href="#"> 12</a></td>
          <td class="calendar-day "><a class="link" href="#"> 13</a></td>
          <td class="calendar-day "><a class="link" href="#"> 14</a></td>
          <td class="calendar-day "><a class="link" href="#"> 15</a></td>
          <td class="calendar-day "><a class="link" href="#"> 16</a></td>
          <td class="calendar-day "><a class="link" href="#"> 17</a></td>
          <td class="calendar-day "><a class="link" href="#"> 18</a></td>
        </tr>
        <tr>
          <td class="calendar-day "><a class="link" href="#"> 19</a></td>
          <td class="calendar-day "><a class="link" href="#"> 20</a></td>
          <td class="calendar-day "><a class="link" href="#"> 21</a></td>
          <td class="calendar-day "><a class="link" href="#"> 22</a></td>
          <td class="calendar-day "><a class="link" href="#"> 23</a></td>
          <td class="calendar-day "><a class="link" href="#"> 24</a></td>
          <td class="calendar-day "><a class="link" href="#"> 25</a></td>
        </tr>
        <tr>
          <td class="calendar-day "><a class="link" href="#"> 26</a></td>
          <td class="calendar-day "><a class="link" href="#"> 27</a></td>
          <td class="calendar-day "><a class="link" href="#"> 28</a></td>
          <td class="calendar-day "><a class="link" href="#"> 29</a></td>
          <td class="calendar-day "><a class="link" href="#"> 30</a></td>
          <td class="calendar-day "><a class="link" href="#"> 31</a></td>
        </tr>
      </table>
    </div>







</body>

</html>