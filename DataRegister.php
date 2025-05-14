<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>عرض البيانات</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  <div class="container mt-5">
    <div class="card">
      <div class="card-header bg-primary text-white">
        البيانات المُدخلة
      </div>
 <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
  <div class="card-body">
      <p><strong>البريد الإلكتروني:</strong> <?php echo htmlspecialchars($_POST["email"]); ?></p>
      <p><strong>الاسم:</strong> <?php echo htmlspecialchars($_POST["name"]); ?></p>
      <p class="text-center d-flex gap-2"><strong>كلمة المرور:</strong> <?php 
      $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
      
      echo htmlspecialchars(  $password); ?></p>
      <p><strong>رقم الهاتف:</strong> <?php echo htmlspecialchars($_POST["phone"]); ?></p>
  </div>
<?php endif; ?>

    </div>
  </div>

</body>
</html>
