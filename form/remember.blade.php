<div class="mt-6 flex items-center justify-between">
    <div class="flex items-center">
        <input id="remember" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" {{ old('remember') ? 'checked' : '' }}/>
        <label for="remember" class="ml-2 block text-sm leading-5 text-gray-900">
            Remember me
        </label>
    </div>

    {{$slot}}
</div>
