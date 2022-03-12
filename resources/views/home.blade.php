@extends('components.main')
@section('title', 'Code Challenge with Laravel')
@section('content')

    <main class="flex flex-col w-screen h-screen">
        <div class="divContainer h-full">
            <div id="firstDiv" class="firstDiv h-1/4 w-1/4 bg-cover bg-no-repeat" style="background-image:url( {{ $cover_image }} )"> {{-- initial state: 75% --}}
                &nbsp;
            </div>

            <div id="secondDiv" class="secondDiv h-1/4 w-9/12 bg-orange-700">
                <div id="secondDiv_imgContainer">
                    &nbsp;
                </div>
            </div>

            <div id="thirdDiv" class="thirdDiv h-1/4 w-6/12 bg-blue-400">
                &nbsp;
            </div>

            <div id="fourthDiv" class="fourthDiv h-1/4 w-[90%] bg-yellow-300">
                <div id="fourthDiv_numberArray" class="flex flex-row justify-center align-center">
                    @for($i = 1; $i < 11; $i+=2)
                        {{ $i }}
                    @endfor
                    7 5 3 1
                </div>
            </div>

        </div>
    </main>
@endsection
@section('js')
    <script defer>
        let divs = document.querySelector('.divContainer').children
        let arr = [];
        for (d of divs)
        {
            arr.push(d)
        }
        arr.forEach(x => console.log(x))
        function divEventCb(arg1) {
            if (arg1.classList.contains('firstDiv')) {
                let firstDiv = document.querySelector('#firstDiv')
                firstDiv.classList.toggle('w-1/4')
                firstDiv.classList.toggle('w-full')
            }

            if (arg1.classList.contains('secondDiv')) {
                let secondDiv = document.querySelector('#secondDiv')
                secondDiv.classList.toggle('w-9/12')
                secondDiv.classList.toggle('w-full')
            }

            if (arg1.classList.contains('thirdDiv')) {
                let thirdDiv = document.querySelector('#thirdDiv')
                thirdDiv.classList.toggle('w-9/12')
                thirdDiv.classList.toggle('w-full')
            }

            if (arg1.classList.contains('fourthDiv')) {
                let fourthDiv = document.querySelector('#fourthDiv')
                fourthDiv.classList.toggle('w-9/12')
                fourthDiv.classList.toggle('w-full')
            }
        }

        arr.forEach(div => div.addEventListener('click', function() {
            divEventCb(div);
        }));

    </script>
@endsection
