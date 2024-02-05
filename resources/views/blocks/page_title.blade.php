<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">{{$block->title}}</h3>
                    <ul>
                        <li><a href="/{{app()->getLocale()}}">{{ __('home') }}</a></li>
                        <li>{{$block->title}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
