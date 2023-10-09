@extends('front-end.template')
@section('template')


<!-- Start of breadcrumb section
	============================================= -->
	<section id="in-breadcrumb" class="in-breadcrumb-section" style="background-color: #198754">
		<div class="in-breadcrumb-content position-relative"  data-background="{{ $postingan_terbaru->image }}">
			<div class="background_overlay"></div>
			<div class="container">
				<div class="in-breadcrumb-title-content position-relative headline ul-li">
					<h2>{{ $postingan_terbaru->title }} </h2>
					<ul class="col-sm-4">
						<p >{{ $postingan_terbaru->excerpt }}</p>
						<li><a href="#">Read More</a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>
<!-- End of breadcrumb section
	============================================= -->

<!-- Start of Blog Grid section
	============================================= -->
	<section id="in-blog-grid" class="in-blog-grid-section">
		<div class="container">
			<div class="blog-grid-content">
				<div class="row justify-content-center">
                    @foreach ($postingan_all as $row)  
					<div class="col-lg-4 col-md-6">
						<div class="in-blog-item">
							<div class="blog-title headline">
								<h3><a href="#" tabindex="0">{{ $row->title }}</a></h3>
							</div>
							<div class="blog-img">
								<img src="{{ $row->image }}" alt="">
							</div>
							<div class="blog-meta-text">
								<div class="in-meta">
									<a href="#" tabindex="0"><i class="far fa-calendar-check"></i> {{ date('d M Y', strtotime($row->created_at)) }}</a>
									<a href="#" tabindex="0"><i class="far fa-file-alt"></i> Business</a>
								</div>
								<div class="in-blog-text">
									{{ $row->excerpt }}
								</div>
                                <ul style="list-style:none; color:blue ">
                                    <li><a href="#">Read More...</a></li>
                                </ul>
							</div>
						</div>
					</div>
                    @endforeach
					
				</div>
				
			</div>
		</div>
	</section>
<!-- End of Blog Grid section
	============================================= -->	

	

@endsection