@if (session ('success'))
<span class="text-success">{{ session ('success') }}</span>
@else
<span class="text-danger">{{ session ('error') }}</span>
@endif