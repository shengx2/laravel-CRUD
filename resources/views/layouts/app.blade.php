<!-- app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        @yield('content')
    </div>
    <script>
        console.log('test')
    $(document).on('submit', 'form', function(e) {
        if ($(this).find('button[type="submit"]').hasClass('btn-danger')) {
            if (!confirm('Are you sure you want to delete this user?')) {
                e.preventDefault();
            }
        }
    });
</script>
</body>
</html>