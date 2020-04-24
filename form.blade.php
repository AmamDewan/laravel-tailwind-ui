<div class="{{$height ?? 'min-h-screen'}} flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
    <div class="max-w-md w-full">
        <div>
            <h2 class="mt-6 text-center text-3xl leading-9 font-extrabold text-gray-900">
                {{$heading}}
            </h2>
            @if (isset($sub_heading))
                <p class="mt-2 text-center text-sm leading-5 text-gray-600">

                    {{$sub_heading}}
                </p>
            @else

            @endif
            <form class="mt-8 rounded-md shadow-sm bg-white p-10 shadow-md" action="{{$action ?? '#'}}" method="{{$method ?? 'POST'}}">
                {{$slot}}
            </form>
        </div>
    </div>
</div>
