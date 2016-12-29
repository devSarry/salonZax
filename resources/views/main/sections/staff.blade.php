<section class="wrapper {{ $staff_section->section->color }} special">
    <div class="inner">
        <header class="major">
            <h2>{{ $staff_section->section->title }}</h2>
            <p>{{ $staff_section->section->body }}</p>
        </header>
        @foreach($staff->chunk(3) as $chunk)
        <div class="row">
            @foreach($chunk as $staff)
            <div class="col-md-6 col-sm-12">
                <span class="image fit">
                    @laravelImage($staff->image->upload_dir , $staff->image->image, 580, 580,[
                                            'fit' => 'contain'])
                </span>
                <h3>{{ $staff->title }}</h3>
                <p>{{ $staff->body }}</p>
            </div>
            @endforeach
        </div>
        @endforeach
    </div>
</section>