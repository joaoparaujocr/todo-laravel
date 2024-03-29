<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/assets/css/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500&display=swap" rel="stylesheet">
    <title>{{ $page ?? 'TodoApp' }}</title>
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <img src="/assets/images/logo.png" alt="logo" width="100%">
        </div>
        <div class="content">
            <header>
                <nav>
                    {{ $btn ?? null }}
                </nav>
            </header>
            <main>
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
