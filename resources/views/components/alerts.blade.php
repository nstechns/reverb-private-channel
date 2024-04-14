@if(isset($errors) && $errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error!</strong>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(Session::has('error_message'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Error!</strong>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1 1 0 1 1-1.697 1.104l-3.651-3.95-3.65 3.95a1 1 0 1 1-1.496-1.307l3.858-4.183-3.858-4.183a1 1 0 1 1 1.496-1.307l3.65 3.95 3.651-3.95a1 1 0 1 1 1.697 1.104l-3.858 4.183 3.858 4.183z"/></svg>
        </span>
        {{ Session::get('error_message') }}
    </div>
@endif

@if(Session::has('success_message'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Success!</strong>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1 1 0 1 1-1.697 1.104l-3.651-3.95-3.65 3.95a1 1 0 1 1-1.496-1.307l3.858-4.183-3.858-4.183a1 1 0 1 1 1.496-1.307l3.65 3.95 3.651-3.95a1 1 0 1 1 1.697 1.104l-3.858 4.183 3.858 4.183z"/></svg>
        </span>
        {{ Session::get('success_message') }}
    </div>
@endif

@if(Session::has('warning_message'))
    <div class="bg-yellow-100 border border-yellow-400 text-yellow-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold">Warning!</strong>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-yellow-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1 1 0 1 1-1.697 1.104l-3.651-3.95-3.65 3.95a1 1 0 1 1-1.496-1.307l3.858-4.183-3.858-4.183a1 1 0 1 1 1.496-1.307l3.65 3.95 3.651-3.95a1 1 0 1 1 1.697 1.104l-3.858 4.183 3.858 4.183z"/></svg>
        </span>
        {{ Session::get('warning_message') }}
    </div>
@endif

@if(Session::has('custom_messages'))
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative" role="alert">
        <strong class="font-bold" style="font-size: 16px;">Please correct the following errors before continuing!</strong>
        <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
            <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1 1 0 1 1-1.697 1.104l-3.651-3.95-3.65 3.95a1 1 0 1 1-1.496-1.307l3.858-4.183-3.858-4.183a1 1 0 1 1 1.496-1.307l3.65 3.95 3.651-3.95a1 1 0 1 1 1.697 1.104l-3.858 4.183 3.858 4.183z"/></svg>
        </span>
        <br>
        <ul>
            {!! Session::get('custom_messages') !!}
        </ul>
    </div>
@endif
