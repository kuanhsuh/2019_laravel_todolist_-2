<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hello Bulma!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <style>
        .is-hidden {
            display: none;
        }

    </style>
</head>

<body>
    <section class="section">
        @yield('content')
    </section>
    <script>
        $(document).on('click', '.notification > button.delete', function () {
            $(this).parent().addClass('is-hidden');
            return false;
        });

    </script>
</body>

</html>
