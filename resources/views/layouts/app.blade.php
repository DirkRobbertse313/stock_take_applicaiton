<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta 
        name="viewport" 
        content="width=device-width, initial-scale=1.0"
    >

    <link 
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" 
        crossorigin="anonymous"
    >

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div 
                class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark vh-100" 
                style="width: 280px;"
            >
                <a 
                    href="/" 
                    class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none"
                >
                    <svg 
                        class="bi me-2" 
                        width="40" 
                        height="32"
                    >
                        <use xlink:href="#bootstrap" />
                    </svg>
                    <span 
                        class="fs-4"
                    >
                        Stock Take
                    </span>
                </a>
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    <li 
                        class="nav-item">
                        <a 
                            href="{{route('product.index')}}" 
                            class="nav-link"
                        >
                            <svg 
                                class="bi me-2" 
                                width="16" 
                                height="16">
                                <use xlink:href="#home" 
                                />
                            </svg>
                            Product
                        </a>
                    </li>
                    <li>
                        <a 
                            href="#" 
                            class="nav-link"
                        >
                            <svg 
                                class="bi me-2" 
                                width="16" 
                                height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            Stock on Hand
                        </a>
                    </li>
                </ul>
                <hr>
            </div>
            </nav>
            <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>

</html>