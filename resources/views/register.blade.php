<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @livewireScripts
</head>
<body class="antialiased">
    <div class="flex">
        <div class="w-2/4">
                <livewire:register-form/>
        </div>
        <div class="w-2/4">
                <livewire:users-list/>
        </div>
        
    </div>
       
@livewireStyles
</body>
</html>
