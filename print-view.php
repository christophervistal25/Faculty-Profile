<?php require "./bootstrap.php"; ?>
<html>
<head>
  <style>
    @page { margin: 100px 25px; }
    header { position: fixed; top: -60px; left: 0px; right: 0px; height: auto; }
    p { page-break-after: always; }
    p:last-child { page-break-after: never; }
  </style>
</head>
<body>
  <header>
      <img width="80" src="<?php echo $_SERVER['DOCUMENT_ROOT'] . '/faculty/assets/img/logo.png' ?>" alt="" style="position:absolute; top :0%;">
       <center style="line-height: 3px;">
          <span>Republic of the Philippines</span>
          <h3>Surigao del Sur State University</h3>
          <span>Rosario, Tandag City Surigal del Sur 8300 <br><br><br><br><br><br><br>Telefax No. 086-211-4221 <br><br><br><br><br><br><br>As of <?php echo date('M d, Y') ?></span>
        </center>
  </header>
  <main>
  <div class="container-fluid" style="margin-top :30px;">
    <table border="1" width="100%" style="border-collapse: collapse;">
      <tr>
        <th rowspan="4" class="align-middle text-center">No.</th>
        <th colspan="2" class="text-center text-uppercase">Name</th>
        <th colspan="1" rowspan="4" class="text-center align-middle">Position</th>
        <th colspan="1" rowspan="3" class="text-center align-middle">Status Of</th>
        <th colspan="12" rowspan="1" class="text-center text-uppercase">Educational Qualification</th>
      </tr>
      <tr>
        <th colspan="1" rowspan="3" class="text-center align-bottom">Teaching</th>
        <th colspan="1" rowspan="3" class="text-center align-bottom">M.I.</th>
        <th class="text-center text-uppercase align-middle" colspan="4" rowspan="2">Baccalaureate Degree</th>
        <th class="text-center text-uppercase" colspan="8">Post Graduate</th>
      </tr>
      <tr>
        <th class="text-center" colspan="4">Masteral Program</th>
        <th class="text-center" colspan="4">Doctoral Program</th>
      </tr>
      <tr>
        <th class="text-center">Appt.</th>
        <th class="text-center">Course</th>
        <th class="text-center">Major</th>
        <th class="text-center">Yr. Grad.</th>
        <th class="text-center">Name of school</th>
        <th class="text-center">Graduate Program</th>
        <th class="text-center">Major</th>
        <th class="text-center">Yr. Grad.</th>
        <th class="text-center">Name of School</th>
        <th class="text-center text-uppercase">Degree Program</th>
        <th class="text-center">Yr. Grad.</th>
        <th class="text-center" colspan="2">Name of school</th>
      </tr>
      <?php foreach (Faculty::with(['baccalaureate', 'masteral', 'doctoral'])->get() as $index => $faculty): ?>
        <tr>
          <td class="text-center"><?php echo $index + 1 ?></td>
          <td class="text-center"><?php echo $faculty->teaching ?></td>
          <td class="text-center"><?php echo $faculty->MI ?></td>
          <td class="text-center"><?php echo $faculty->position ?></td>
          <td class="text-center"><?php echo $faculty->appt ?></td>
          <td class="text-center"><?php echo $faculty->baccalaureate->course ?></td>
          <td class="text-center"><?php echo $faculty->baccalaureate->major ?></td>
          <td class="text-center"><?php echo $faculty->baccalaureate->yr_grad ?></td>
          <td class="text-center"><?php echo $faculty->baccalaureate->name_of_school ?></td>
          <td class="text-center"><?php echo $faculty->masteral->graduate_program ?></td>
          <td class="text-center"><?php echo $faculty->masteral->major ?></td>
          <td class="text-center"><?php echo $faculty->masteral->yr_grad ?></td>
          <td class="text-center"><?php echo $faculty->masteral->name_of_school ?></td>
          <td class="text-center"><?php echo $faculty->doctoral->degree_program ?></td>
          <td class="text-center"><?php echo $faculty->doctoral->yr_grad ?></td>
          <td class="text-center" colspan="2"><?php echo $faculty->doctoral->name_of_school ?></td>
        </tr>
      <?php endforeach ?>

    </table>
  </tbody>
  </table>
  </div>
  </main>
</body>
</html>