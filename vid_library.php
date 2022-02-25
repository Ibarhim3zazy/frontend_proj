<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- normalise to render any browsers to normal mode -->
  <link rel="stylesheet" href="css/normalise.css">
  <!-- font awesome -->
  <link rel="stylesheet" href="css/all.css">
  <!-- cairo font Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;500;600;700;900&display=swap" rel="stylesheet">
  <!-- icon -->
  <link rel="icon" href="images/img.png" type="image/x-icon">
  <!-- master style sheet  -->
  <link rel="stylesheet" href="css/master.css">
  <!-- prayer_page_1 style sheet  -->
  <link rel="stylesheet" href="css/vid_library.css">
  <!-- for test -->
  <title>صلي معنا</title>
  <script type="text/javascript" src="js/vid_library.js"></script>
</head>

<body dir="rtl">
  <!-- start Menu  -->
  <?php require_once 'header.php'; ?>
  <!-- End menu -->
  <section>
    <h1 id="top">قسم الفيديوهات</h1>
    <div id="played_div1">
      <video src="media\vid1.mp4" controls stop id="played_vid1" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>كيف اتوضأ؟</h3>
    </div>
    <div id="played_div2">
      <video src="media\vid2.mp4" controls id="played_vid2" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>شروط صحة الصلاه</h3>
    </div>
    <div id="played_div3">
      <video src="media\vid3.mp4" controls id="played_vid3" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>مبطلات الصلاه</h3>
    </div>
    <div id="played_div4">
      <video src="media\vid4.mp4" controls id="played_vid4" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>السنن والرواتب</h3>
    </div>
    <div id="played_div5">
      <video src="media\vid5.mp4" controls id="played_vid5" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>اداب صلاة الجماعه</h3>
    </div>
    <div id="played_div6">
      <video src="media\vid6.mp4" controls id="played_vid6" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>تحية المسجد</h3>
    </div>
    <div id="played_div7">
      <video src="media\vid7.mp4" controls id="played_vid7" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>الجمعة فضائل وآداب</h3>
    </div>
    <div id="played_div8">
      <video src="media\vid8.mp4" controls id="played_vid8" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>صلاة المريض</h3>
    </div>
    <div id="played_div9">
      <video src="media\vid9.mp4" controls id="played_vid9" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>الصلاة في السفينة والقطار والطائرة</h3>
    </div>
    <div id="played_div0">
      <video src="media\vid0.mp4" controls id="played_vid0" onplay="playVid(this.id)">
        Your browser does not support the video tag.
      </video>
      <h3>صلاة الاستخارة</h3>
    </div>
  </section>
</body>

</html>