<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <title>Tour_Pointing_System</title>
</head>
<body class="vh-100 d-flex align-items-center justify-content-center" style="background-color: #8C1007;">

    <div class="container" style="max-width: 900px; height: 500px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); border-radius: 12px; overflow: hidden;">
        <div class="row h-100">
            <!-- Left Column -->
            <div class="col-md-6 d-flex justify-content-center align-items-center" style="background-color: #541212;">
                <img src="{{ asset('image/ccs.png') }}" alt="Logo" class="logo img-fluid" style="max-height: 200px;">
            </div>
            <!-- Right Column -->
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column" style="background-color: #f8f9fa;">
                <h2>Welcome</h2>
                <p>This is the Tour Pointing System.</p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
