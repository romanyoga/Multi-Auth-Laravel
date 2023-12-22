<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">

<head>
    <base href="/public">
    @include('admin.header')
</head>

<body>
    <div class="wrapper">
        @include('admin.sidebar')
        <div class="main">
            @include('admin.navbar')

            @include('admin.body')

            @include('admin.footer')
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>