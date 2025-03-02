<x-layout title="Contact Us">
    <x-header />
    <div class="container mt-5 pt-5 pb-5 mb-5">
        <!-- Form di contatto -->
        <div class="row align-items-center">
            <div class="col-lg-6">
                <form action="{{ route('submit') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="userName" class="form-label text-purple">Name</label>
                        <input type="text" class="form-control custom-search-input" id="userName" name="name" placeholder="Enter your name">
                    </div>
                    <div class="mb-3">
                        <label for="userEmail" class="form-label text-purple">Email address</label>
                        <input type="email" class="form-control custom-search-input" id="userEmail" name="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="userMessage" class="form-label text-purple">Message</label>
                        <textarea class="form-control custom-textarea" id="userMessage" name="mess" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-light">Submit</button>
                </form>
            </div>

            <!-- Mappa -->
            <div class="col-lg-6 align-items-end d-flex justify-content-end flex-column">
                <h2 class="text-purple">Our Location</h2>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24365.81262864251!2d4.902982718047551!3d52.374199089473785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c60a8fdab2686f%3A0x81b8a847f6a47c72!2sDam%20Square!5e0!3m2!1sen!2sus!4v1586257016152!5m2!1sen!2sus" allowfullscreen="" loading="lazy"></iframe>
                </div>

                <h2 class="text-purple">Address </h2>

                <li class="text-white">SMA Editorial Department (Tokyo office)</li>

                <li class="text-white">Anime Online Inc.</li>

                <li class="text-white">Kichijoji ZIZO bldg. 3F</li>

                <li class="text-white">1-9-9 Kichijoji Minami-cho, Musashino city, Tokyo</li>

            </div>
        </div>
    </div>
</x-layout>