<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0">
        {{ $title }}
    </h1>
    @if(isset($url))
    <a href="{{ $url }}" class="d-none d-sm-inline-block btn btn-sm btn-_primary shadow-sm">
        <i class="fas fa-plus fa-sm"></i> {{ $name }}
    </a>
    @endif
</div>
