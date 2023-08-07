<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Import and Export</title>
</head>
<body>

<form action="" method="post">

  <table class="table table-responsive">
    @csrf
      <tr>
          <td>File Name</td>
          <td><input type="text" style="width: 60%;" name="filename"></td>
      </tr>

      <tr>
          <td>Exam Numbers</td>
          <td><textarea cols="40" name="exam_numbers"  rows="10"></textarea></td>
      </tr>

      <tr>
          <td></td>
          <td> <button class="button" type="submit">Export</button></td>
      </tr>
  </table>



</form>

</body>
</html>
