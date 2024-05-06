<footer class="px-4 divide-y dark:bg-gray-100 dark:text-gray-800">
	<div class="container flex flex-col justify-between py-10 mx-auto space-y-8 lg:flex-row lg:space-y-0">
		<div class="lg:w-1/3">
			<a rel="noopener noreferrer" href="#" class="flex justify-center space-x-3 lg:justify-start">
				<div class="flex items-center justify-center w-12 h-12 rounded-full">
					<x-application-logo class="block h-9 w-auto fill-current text-gray-800" />
				</div>
				<span class="self-center text-2xl font-semibold">The Siblings Catering Services</span>
			</a>
		</div>
		<div class="grid grid-cols-2 text-sm gap-x-3 gap-y-8 lg:w-2/3 sm:grid-cols-4">
			<div class="space-y-3">
				<h3 class="tracking-wide uppercase dark:text-gray-900">Site Map</h3>
				<ul class="space-y-1">
					<li>
						<a rel="noopener noreferrer" href="{{route('dashboard')}}">Dashboard</a>
					</li>
					<li>
						<a rel="noopener noreferrer" href="{{route('events')}}">Events</a>
					</li>
                    <li>
						<a rel="noopener noreferrer" href="{{route('aboutus')}}">About us</a>
					</li>
					<li>
						<a rel="noopener noreferrer" href="{{route('faqs')}}">FAQS</a>
					</li>
					<li>
						<a rel="noopener noreferrer" href="{{route('reviews')}}">Reviews</a>
					</li>
				</ul>
			</div>
			<div class="space-y-3">
				<h3 class="tracking-wide uppercase dark:text-gray-900">Company</h3>
				<ul class="space-y-1">
					<li>
						<a rel="noopener noreferrer" href="#">Privacy</a>
					</li>
					<li>
						<a rel="noopener noreferrer" href="#">Terms of Service</a>
					</li>
				</ul>
			</div>
			<div class="space-y-3">
				<h3 class="uppercase dark:text-gray-900">Developers</h3>
				<ul class="space-y-1">
					<li>
						<a rel="noopener noreferrer" href="#">Public API</a>
					</li>
					<li>
						<a rel="noopener noreferrer" href="#">Documentation</a>
					</li>
					<li>
						<a rel="noopener noreferrer" href="#">Guides</a>
					</li>
				</ul>
			</div>
			<div class="space-y-3">
				<div class="uppercase dark:text-gray-900">Social media</div>
				<div class="flex justify-start space-x-3">
					<a rel="noopener noreferrer" href="#" title="Facebook" class="flex items-center p-1 hover:scale-110 duration-300">
						<i class="fa-brands fa-facebook text-xl"></i>
					</a>
					<a rel="noopener noreferrer" href="#" title="Twitter" class="flex items-center p-1 hover:scale-110 duration-300">
						<i class="fa-brands fa-tiktok text-xl"></i>
					</a>
					<a rel="noopener noreferrer" href="#" title="Instagram" class="flex items-center p-1 hover:scale-110 duration-300">
						<i class="fa-brands fa-instagram text-xl"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
	<div class="py-6 text-sm text-center dark:text-gray-600">© 2024 The Siblings Catering Services. All rights reserved.</div>
</footer>