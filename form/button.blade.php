<div class="mt-6">
    <button type="{{$type ?? 'submit'}}" class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm leading-5 font-medium rounded-md text-white bg-{{$color ?? 'indigo'}}-600 hover:bg-{{$color ?? 'indigo'}}-500 focus:outline-none focus:border-{{$color ?? 'indigo'}}-700 focus:shadow-outline-{{$color ?? 'indigo'}} active:bg-{{$color ?? 'indigo'}}-700 transition duration-150 ease-in-out">
        {{$slot}}
    </button>
</div>
