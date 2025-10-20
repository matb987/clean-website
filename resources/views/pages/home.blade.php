

<x-layouts.frontend :title="__('Homepage')">
<div class="container mx-auto py-16">
    <div class="flex flex-col items-center justify-center">
        <div class="bg-black rounded-3xl px-10 py-14 shadow-xl max-w-xl w-full border border-blue-100 flex flex-col items-center">
            <img src="/storage/images/logo.webp" alt="Spotless Solutions Logo" class="mb-8 mx-auto shadow transition-transform duration-300 hover:scale-105" />
            <h1 class="text-4xl font-extrabold mb-4 text-blue-900 text-center">Spotless Solutions</h1>
            <p class="text-lg mb-8 text-gray-700 text-center">Professional Cleaning Services for Homes & Businesses</p>
            <a href="#contact" class="bg-blue-600 text-white px-8 py-4 rounded-full shadow font-bold text-lg hover:bg-blue-700 transition inline-block mt-2">Request a Quote</a>
        </div>
    </div>
</div>

<div class="container mx-auto py-24">
    <h2 class="text-5xl font-extrabold text-center mb-16 text-transparent bg-clip-text bg-gradient-to-r from-cyan-300 via-blue-200 to-purple-400 drop-shadow-neon">Our Services</h2>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
    <div class="service-card bg-gradient-to-br from-blue-900 via-purple-700 to-cyan-500 p-8 rounded-3xl shadow-2xl flex flex-col h-full border-t-4 border-cyan-400 hover:scale-105 transition-transform duration-300 backdrop-blur-xl text-white">
            <div class="flex items-center mb-4">
                <span class="inline-block bg-blue-100 text-blue-700 rounded-full p-3 mr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2m14-2a4 4 0 014-4h.01a4 4 0 014 4v2M9 17v2a4 4 0 004 4h2a4 4 0 004-4v-2" /></svg>
                </span>
                <h3 class="text-xl font-bold">Residential Cleaning</h3>
            </div>
            <p class="mb-4 text-gray-700">Comprehensive cleaning for houses, apartments, and condos. Choose from:</p>
            <ul class="space-y-3 mb-4">
                <li class="flex items-start">

                    <x-layouts.frontend :title="__('Homepage')">
                    <div class="min-h-screen bg-black text-purple-200">
                        <div class="container mx-auto py-16">
                            <div class="flex flex-col items-center justify-center">
                                <div class="bg-black rounded-3xl px-10 py-14 shadow-xl w-full border border-purple-700 flex flex-col items-center">
                                    <img src="/storage/images/logo.webp" alt="Spotless Solutions Logo" class="h-32 w-32 mb-8 mx-auto shadow-lg rounded-full bg-black" />
                                    <h1 class="text-4xl font-extrabold mb-4 text-purple-400 text-center tracking-wide">Spotless Solutions</h1>
                                    <p class="text-lg mb-8 text-purple-200 text-center">Professional Cleaning Services for Homes & Businesses</p>
                                    <a href="#contact" class="bg-purple-700 text-white px-8 py-4 rounded-full shadow font-bold text-lg hover:bg-purple-800 transition inline-block mt-2">Request a Quote</a>
                                </div>
                            </div>
                        </div>

                        <div class="container mx-auto py-24">
                            <h2 class="text-5xl font-extrabold text-center mb-16 text-purple-400">Our Services</h2>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-12">
                                <div class="service-card bg-black p-8 rounded-3xl shadow-2xl flex flex-col h-full border border-purple-700 text-purple-200">
                                    <div class="flex items-center mb-4">
                                        <span class="inline-block bg-purple-900 text-purple-400 rounded-full p-3 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2m14-2a4 4 0 014-4h.01a4 4 0 014 4v2M9 17v2a4 4 0 004 4h2a4 4 0 004-4v-2" /></svg>
                                        </span>
                                        <h3 class="text-xl font-bold text-purple-300">Residential Cleaning</h3>
                                    </div>
                                    <p class="mb-4 text-purple-300">Comprehensive cleaning for houses, apartments, and condos. Choose from:</p>
                                    <ul class="space-y-3 mb-4">
                                        <li class="flex items-start">
                                            <span class="text-purple-400 mr-2">&#10003;</span>
                                            <span><strong>Regular Cleaning:</strong> Weekly, bi-weekly, or monthly maintenance to keep your home fresh and tidy.</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-purple-400 mr-2">&#10003;</span>
                                            <span><strong>Deep Cleaning:</strong> Intensive cleaning for kitchens, bathrooms, baseboards, and hard-to-reach areas.</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-purple-400 mr-2">&#10003;</span>
                                            <span><strong>Spring Cleaning:</strong> Seasonal refresh to eliminate dust, allergens, and clutter.</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-purple-400 mr-2">&#10003;</span>
                                            <span><strong>Move In/Move Out:</strong> Full property cleaning for new tenants or before/after moving.</span>
                                        </li>
                                        <li class="flex items-start">
                                            <span class="text-purple-400 mr-2">&#10003;</span>
                                            <span><strong>Specialty Services:</strong> Carpet cleaning, window washing, and more upon request.</span>
                                        </li>
                                    </ul>
                                    <div class="mt-auto pt-2">
                                        <span class="inline-block bg-purple-900 text-purple-300 px-3 py-1 rounded-full text-sm font-semibold">Flexible scheduling for your convenience</span>
                                    </div>
                                </div>
                                <div class="service-card bg-black p-8 rounded-3xl shadow-2xl flex flex-col h-full border border-purple-700 text-purple-200">
                                    <h3 class="text-xl font-bold mb-2 text-purple-300">Commercial Cleaning</h3>
                                    <p>Office, retail, and facility cleaning tailored to your business needs. Reliable and discreet service.</p>
                                </div>
                                <div class="service-card bg-black p-8 rounded-3xl shadow-2xl flex flex-col h-full border border-purple-700 text-purple-200">
                                    <h3 class="text-xl font-bold mb-2 text-purple-300">Move In/Out Cleaning</h3>
                                    <p>Deep cleaning for moving day. Ensure your property is spotless for new tenants or owners.</p>
                                </div>
                            </div>
                        </div>

                        <div class="py-24">
                            <div class="container mx-auto flex flex-col md:flex-row items-center justify-between">
                                <div class="mb-8 md:mb-0 md:w-1/2">
                                    <h2 class="text-4xl font-extrabold mb-8 text-purple-400">Why Choose Us?</h2>
                                    <ul class="space-y-6 text-xl text-purple-200">
                                        <li class="flex items-center"><span class="text-purple-400 mr-3">&#9733;</span>Experienced, background-checked staff</li>
                                        <li class="flex items-center"><span class="text-purple-400 mr-3">&#9733;</span>Customizable cleaning plans</li>
                                        <li class="flex items-center"><span class="text-purple-400 mr-3">&#9733;</span>100% satisfaction guarantee</li>
                                        <li class="flex items-center"><span class="text-purple-400 mr-3">&#9733;</span>Fully insured</li>
                                    </ul>
                                </div>
                                <div class="md:w-1/2 flex justify-center">
                                    <img src="/storage/images/cleaning-team.jpg" alt="Professional Cleaning Team" class="rounded-3xl shadow-2xl w-96 border-4 border-purple-700">
                                </div>
                            </div>
                        </div>

                        <div class="container mx-auto py-24" id="contact">
                            <h2 class="text-5xl font-extrabold text-center mb-12 text-purple-400">Request a Free Quote</h2>
                            @if(session('success'))
                                <div class="max-w-xl mx-auto mb-6 p-4 bg-purple-900 text-purple-200 rounded shadow text-center">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="max-w-xl mx-auto mb-6 p-4 bg-purple-900 text-purple-200 rounded shadow">
                                    <ul class="list-disc pl-5">
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form class="max-w-xl mx-auto bg-black p-12 rounded-3xl shadow-2xl border border-purple-700 text-purple-200" method="POST" action="{{ route('contact.submit') }}">
                                @csrf
                                <div class="mb-4">
                                    <label class="block mb-2 font-bold text-purple-300" for="name">Name</label>
                                    <input class="w-full border border-purple-700 bg-black text-purple-200 rounded px-3 py-2" type="text" name="name" id="name" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 font-bold text-purple-300" for="email">Email</label>
                                    <input class="w-full border border-purple-700 bg-black text-purple-200 rounded px-3 py-2" type="email" name="email" id="email" required>
                                </div>
                                <div class="mb-4">
                                    <label class="block mb-2 font-bold text-purple-300" for="service">Service</label>
                                    <select class="w-full border border-purple-700 bg-black text-purple-200 rounded px-3 py-2" name="service" id="service" required>
                                        <option value="Residential Cleaning">Residential Cleaning</option>
                                        <option value="Commercial Cleaning">Commercial Cleaning</option>
                                        <option value="Move In/Out Cleaning">Move In/Out Cleaning</option>
                                    </select>
                                </div>
                                <div class="mb-6">
                                    <label class="block mb-2 font-bold text-purple-300" for="message">Message</label>
                                    <textarea class="w-full border border-purple-700 bg-black text-purple-200 rounded px-3 py-2" name="message" id="message" rows="4"></textarea>
                                </div>
                                <button class="bg-purple-700 text-white px-10 py-4 rounded-full font-bold text-xl hover:bg-purple-800 transition w-full mt-6 focus:outline-none focus:ring-4 focus:ring-purple-400/40" type="submit">Send Request</button>
                            </form>
                        </div>

                        <div class="bg-black text-purple-400 py-10 text-center mt-24 shadow-inner border-t border-purple-700">

                        </div>
                </div>
</x-layouts.frontend>
