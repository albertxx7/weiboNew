@if ($feed_items->count() > 0)
    <ul class="list-unstyled">
        @foreach ($feed_items as $status)
            @include('statuses._status', ['user' => $status->user])
        @endforeach
    </ul>
    <div class="mt-5">
        {!! $feed_items->render() !!}
    </div>
@else
    <p>沒有更多貼文了！</p>
@endif
