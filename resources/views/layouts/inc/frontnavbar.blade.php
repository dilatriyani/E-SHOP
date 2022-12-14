<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ url('/') }}">E-Shop</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('category')}}">Category</a>
            </li>

            </li>
            <li class="nav-item">
                <a href="/login" class="nav-link" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
            </li>
            <li class="nav-item">
                <a href="/register" class="nav-link" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
            </li>
            </ul>
        </div>
        </div>
    </nav>
