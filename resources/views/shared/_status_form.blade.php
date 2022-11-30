<form action="{{ route('statuses.store') }}" method="POST">
    @include('shared._errors')
    {{ csrf_field() }}
    <textarea class="form-control" rows="3" placeholder="聊點新鮮事..." name="content">{{ old('content') }}</textarea>
    <div class="text-end">
        <button type="submit" class="btn btn-primary mt-3">發布</button>
    </div>
</form>
