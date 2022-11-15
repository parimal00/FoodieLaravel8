@extends('voyager::master')
<link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet">

@section('content')
    <div class="p-5">

        @if ($notifications->count())
            <div class="flex ">
                <form action="{{ route('admin.notifications.markAllAsRead') }}" method="POST">
                    @csrf
                    <button class="py-2 px-4 mr-3 rounded-md bg-green-500 text-white">Mark all as Read</button>
                </form>

                <form action="{{ route('admin.notifications.index') }}" method="GET">
                    <select name="type" class="py-2 px-4 rounded-md bg-green-500 text-white" onchange="this.form.submit()">
                        <option value="unread" {{ request('type') == 'uread' ? 'selected' : '' }}>UnRead</option>
                        <option value="read" {{ request('type') == 'read' ? 'selected' : '' }}>Read</option>
                        <option value="all" {{ request('type') == 'all' ? 'selected' : '' }}>All</option>
                    </select>
                </form>
            </div>
        @endif
        @forelse ($notifications as $notification)
            <a href="{{ route('admin.orders.show', [$notification->data['order_id']]) }}">
                @if ($notification->read_at == null)
                    <div class="w-full bg-green-300 p-3 m-2 rounded-md">
                    @else
                        <div class="w-full bg-gray-200 p-3 m-2 rounded-md">
                @endif
                <p class="text-black">
                    {{ $notification->data['email'] }}has a new order.</p>
                <span class="text-sm text-gray-700">{{Carbon\Carbon::parse($notification->created_at)->diffForHumans(now())}}</span>
            </a>
    </div>
@empty
    <div class="mt-4 w-full border border-red-400 py-3 text-center text-red-800"> no notification </div>
    @endforelse
    </div>
@endsection
