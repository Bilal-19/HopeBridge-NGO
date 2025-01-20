<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap"
        rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row">

            <nav class="navbar navbar-expand-lg bg-dark-green">
                <div class="container-fluid d-flex justify-content-center align-items-center">
                    <a class="navbar-brand" href="{{ route('Home') }}">
                        <img src="{{ asset('assets/images/ngo_logo.png') }}" alt="Bootstrap"
                            class="img-fluid object-fit-cover" height="150" width="300">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link nav-link-transition text-light active" aria-current="page"
                                    href="{{ route('Home') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-transition text-light active" aria-current="page"
                                    href="{{ route('About') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-transition text-light active" aria-current="page"
                                    href="{{ route('Our.Projects') }}">Our Projects</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-transition text-light active" aria-current="page"
                                    href="{{ route('Our.Partners') }}">Our Partners</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-transition text-light active" aria-current="page"
                                    href="{{ route('Home.News') }}">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link nav-link-transition text-light active" aria-current="page"
                                    href="{{ route('Contact.Us') }}">Contacts</a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <a class="donate-btn text-decoration-none" href="{{ route('Donation') }}"><i
                                    class="fa-solid fa-hand-holding-dollar"></i> Donate</a>
                        </form>
                    </div>
                </div>
            </nav>

        </div>
    </div>
