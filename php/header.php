<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>header</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script>
    function confirmSignOut() {
      return confirm("Are you sure you want to sign out?");
    }
  </script>
</head>
<body>
  <header style="background-color: #f0f0f0; padding: 10px 20px;">
    <div class="logo">
      <img src="logo.png" width="8%" height="60px" alt="Website Logo" style="border-radius: 40px;">
      <h2>Shuleshire@hosp.com 
        <div style="margin-left: 80%; padding-left: 10%;" class="btn-group ">
          <a href="index.html" style="margin-left: 99%; padding-left: 10%;" title="this sign out" class="btn btn-secondary" onclick="return confirmSignOut()">Sign out</a>
        </div>
      </h2>
    </div>
  </header>
</body>
</html>