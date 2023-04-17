@extends('layout.layout')

@section('isi')
<div class="container my-auto mb-5" style="height:160px;">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://i2-prod.somersetlive.co.uk/incoming/article6469743.ece/ALTERNATES/s1200c/0_Chris-Banable.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Butchery</h5>
                            <p class="card-text">Find the nearest slaughterhouse or contact the landlord directly to rent.</p>
                            <a href="/butchery-detail" class="btn btn-primary">See More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-3" style="max-width: 100%;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://static.boredpanda.com/blog/wp-content/uploads/2017/03/farm-animal-portraits-rob-macinnis-20.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Livestock Land</h5>
                            <p class="card-text">Find the nearest farm to rent or contact the owner directly to rent.</p>
                            <a href="/land-detail" class="btn btn-primary">See More</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection