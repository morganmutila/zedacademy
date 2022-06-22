@props(['shot' => $shot])

<div class="col mb-md-4 mb-3"> 
	<div class="card h-100 border-0 position-relative">
		<a class="shot-thumb" href="\shots\{{ $shot->slug }}" style="background-image: url({{ $shot->image }}); background-color: #444242;">							
		</a>
		<div class="card-body px-0 pt-1 d-flex flex-column justify-content-between ">						
			
			<h2 class="shot-title position-absolute text-wrap">{{ $shot->title }}</h2>

			<div class="d-flex justify-content-between align-items-center">
				<a href="#">
					<img src="https://i.pravatar.cc/34?u={{ $shot->user->id }}" alt="" class="rounded-circle me-2" style="width:25px;height:25px;">				
					<h6 class="m-0 fw-bold d-inline-block text-capitalize" href="#">{{ $shot->user->username }}</h6>
				</a>
				<div style="color:#9e9ea7;">					
					<svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
					  <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
					</svg>
					<span class="small fw-bold me-1">35</span>
				
					<svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
					  <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
					  <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
					</svg>
					<span class="small fw-bold">453</span>
				</div>
			</div>
		</div>	
	</div>
</div>