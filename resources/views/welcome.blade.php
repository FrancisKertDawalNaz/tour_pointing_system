<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/mainpage.css') }}">
    <title>TourPay</title>
</head>

<body class="vh-100 d-flex align-items-center justify-content-center" style="background-color: #8C1007;">

    <div class="container" style="max-width: 950px; height: 500px; box-shadow: 0 4px 15px rgba(0,0,0,0.2); border-radius: 12px; overflow: hidden;">
        <div class="row h-100">
            <!-- Left Column -->
            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center text-center p-4" style="background-color: #541212; color: #fff;">
                <img src="{{ asset('image/ccs.png') }}" alt="Logo" class="logo img-fluid mb-3" style="max-height: 200px;">
                <h1 style="font-size: 30px;" class=" mb-4">Student Tour Billing System</h1>
                <p style="max-width: 500px; font-size: 16px;">
                    Securely monitor student tour payments and ensure accurate records by verifying who has completed their payment.
                </p>
            </div>

            <!-- Right Column -->
            <div class="col-md-6 d-flex justify-content-center align-items-center flex-column p-4" style="background-color: #FFFCFB;">
                <h2 class="mb-2 text-center" style="color: #541212;">Welcome Admin</h2>
                <p class="mb-4">Enter your credentials to access the system</p>
                <form method="POST" action="{{ route('admin.login.submit') }}" style="width: 100%; max-width: 350px;">
                    @csrf

                    <!-- Email -->
                    <div class="form-floating mb-3">
                        <input type="email" name="email" class="form-control" id="emailInput" placeholder="Email" required>
                        <label for="emailInput">Email address</label>
                    </div>

                    <!-- Password -->
                    <div class="input-group mb-3">
                        <div class="form-floating flex-grow-1">
                            <input type="password" name="password" class="form-control" id="passwordInput" placeholder="Password" required>
                            <label for="passwordInput">Password</label>
                        </div>
                        <span class="input-group-text bg-white">
                            <i class="fas fa-lock" id="togglePassword" style="cursor: pointer;"></i>
                        </span>
                    </div>

                    <!-- Submit -->
                    <button type="submit" class="btn w-100 text-white mb-5"
                        style="background-color: #3E0703; border: none; transition: 0.3s;"
                        onmouseover="this.style.backgroundColor='#660B05'"
                        onmouseout="this.style.backgroundColor='#3E0703'">
                        <i class="fas fa-right-to-bracket me-2"></i> Login
                    </button>


                    <p style="font-size: 12px; color: #541212;" class="text-center">Having trouble? Contact IT support at franciskert.naz@lspu.edu.ph</p>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        const togglePassword = document.getElementById('togglePassword');
        const passwordInput = document.getElementById('passwordInput');

        togglePassword.addEventListener('click', function() {
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);

            // Change icon class
            this.classList.toggle('fa-lock');
            this.classList.toggle('fa-unlock');
        });

        setTimeout(() => {
            document.querySelectorAll('.alert').forEach(alert => {
                alert.style.display = 'none';
            });
        }, 6000);
    </script>
</body>

</html>