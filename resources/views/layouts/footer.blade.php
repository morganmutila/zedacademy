<footer class="footer-container mt-5 text-bg-light">
	<div class="container">
		<div class="row pb-md-5">
			<div class="col-md-6 mb-3 d-none d-md-block">
				<x-logo-alt-w/>
				<p class="mt-3 fs-8 w-75">The online education platform based<br> on the Zambian school syllabus.</p>
			</div>
             <div class="col-6 col-md-2 mb-3 footer-column">
                <div class="footer-heading">Company</div>
                <a class="footer-link" href="/about">About Us</a>
                <a class="footer-link" href="/careers">Careers</a>
                <a class="footer-link" href="/contact">Support</a>
                <a class="footer-link" href="/terms">Terms of service</a>
                <a class="footer-link" href="/privacy">Privacy policy</a>
            </div>
            <div class="col-6 col-md-2 mb-3 footer-column">
                <div class="footer-heading">Products</div>
                <a class="footer-link" href="#">Our Plans</a>
                <a class="footer-link" href="#">Free Trial</a>
                <a class="footer-link" href="#">Academic Solutions</a>
                <a class="footer-link" href="#">Business Solutions</a>
                <a class="footer-link" href="#">Government Solutions</a>                            
            </div>
           
            <div class="col-6 col-md-2 mb-3 footer-column">
                <div class="footer-heading">instructors</div>
                <a class="footer-link" href="/directories/jobs">Design jobs</a>
                <a class="footer-link" href="/directories/designers">Designers for hire</a>
                <a class="footer-link" href="/tags">Tags</a>
                <a class="footer-link" href="/places">Places</a>
            </div>
        </div>
    </div>
        
	<div class="footer-bottom pb-4 pb-md-1">	
		<div class="container py-3 py-md-4">
            <div class="small text-center text-md-start">© {{  date('Y', time())  }} {{ config('app.name') }}. All rights reserved. Trademark of Mostek LLC.</div>
            <div class="text-center py-2 d-none">
                <x-logoc height="100px" width="100px"/>
            </div>
        </div>
	</div>
</footer>