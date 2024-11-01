@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en"> 

<head> 
    <meta charset="UTF-8"> 
    <title>Animated Login Form using Html &amp; CSS Only</title> 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Quicksand', sans-serif;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: #000;
        }

        section {
            position: absolute;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2px;
            flex-wrap: wrap;
            overflow: hidden;
        }

        section::before {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: linear-gradient(#000,#07CCC2FF,#000);
            animation: animate 5s linear infinite;
        }

        @keyframes animate {
            0% {
                transform: translateY(-100%);
            }
            100% {
                transform: translateY(100%);
            }
        }

        section span {
            position: relative;
            display: block;
            width: calc(6.25vw - 2px);
            height: calc(6.25vw - 2px);
            background: #181818;
            z-index: 2;
            transition: 1.5s;
        }

        section span:hover {
            background: #07CCC2FF;
            transition: 0s;
        }

        .signin {
            position: absolute;
            width: 400px;
            background: #222;  
            z-index: 1000;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            border-radius: 4px;
            box-shadow: 0 15px 35px rgba(0,0,0,0.9);
        }

        .signin .content {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 40px;
        }

        .signin .content h2 {
            font-size: 2em;
            color: #07CCC2FF;
            text-transform: uppercase;
        }

        .signin .content .form {
            width: 100%;
            display: flex;
            flex-direction: column;
            gap: 25px;
        }

        .signin .content .form .inputBox {
            position: relative;
            width: 100%;
        }

        .signin .content .form .inputBox input {
            position: relative;
            width: 100%;
            background: #333;
            border: none;
            outline: none;
            padding: 25px 10px 7.5px;
            border-radius: 4px;
            color: #fff;
            font-weight: 500;
            font-size: 1em;
        }

        .signin .content .form .inputBox i {
            position: absolute;
            left: 0;
            padding: 15px 10px;
            font-style: normal;
            color: #aaa;
            transition: 0.5s;
            pointer-events: none;
        }

        .signin .content .form .inputBox input:focus ~ i,
        .signin .content .form .inputBox input:valid ~ i {
            transform: translateY(-7.5px);
            font-size: 0.8em;
            color: #fff;
        }

        .signin .content .form .links {
            position: relative;
            width: 100%;
            display: flex;
            justify-content: space-between;
        }

        .signin .content .form .links a {
            color: #fff;
            text-decoration: none;
        }

        .signin .content .form .links a:nth-child(2) {
            color: #07CCC2FF;
            font-weight: 600;
        }

        .signin .content .form .inputBox input[type="submit"] {
            padding: 10px;
            background: #07CCC2FF;
            color: #000;
            font-weight: 600;
            font-size: 1.35em;
            letter-spacing: 0.05em;
            cursor: pointer;
        }

        input[type="submit"]:active {
            opacity: 0.6;
        }

        @media (max-width: 900px) {
            section span {
                width: calc(10vw - 2px);
                height: calc(10vw - 2px);
            }
        }

        @media (max-width: 600px) {
            section span {
                width: calc(20vw - 2px);
                height: calc(20vw - 2px);
            }
        } 
    </style>
</head> 

<body> 
    <section> 
        @for ($i = 0; $i < 144; $i++)
            <span></span>
        @endfor

        <div class="signin"> 
            <div class="content"> 
                <h2>{{ __('Se connecter') }}</h2> 
                <form method="POST" action="{{ route('login') }}" class="form">
                    @csrf
                    <div class="inputBox"> 
                        <input id="email" type="email" name="email" required autofocus value="{{ old('email') }}">
                        <i>{{ __('Email Address') }}</i>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="inputBox"> 
                        <input id="password" type="password" name="password" required>
                        <i>{{ __('Password') }}</i>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div> 

                    <div class="links"> 
                    </div> 

                    <div class="inputBox"> 
                        <input type="submit" value="{{ __('Login') }}"> 
                    </div> 
                </form>
            </div> 
        </div> 
    </section> 
</body>
</html>
@endsection
