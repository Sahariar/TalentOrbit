@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')

    <!-- Main Content -->
    <main class="bg-white shadow-2xl rounded-2xl p-8 lg:p-12 mt-12">
        <h2 class="text-3xl font-bold bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent mb-8">Privacy Policy</h2>
        <p class="text-lg text-gray-700 mb-8">At TalentOrbit, we are committed to protecting your privacy. This Privacy Policy explains how we collect, use, and safeguard your information when you visit our website.</p>

        <!-- Sections -->
        <div class="space-y-8">
            <!-- Section 1 -->
            <section>
                <div class="flex items-center mb-4">
                    <i class="fas fa-info-circle text-2xl text-blue-600 mr-3"></i>
                    <h3 class="text-2xl font-semibold text-blue-600">1. Information We Collect</h3>
                </div>
                <p class="text-gray-700 mb-4">We may collect the following types of information:</p>
                <ul class="list-disc list-inside ml-6 text-gray-700">
                    <li>Personal Information: Name, email address, phone number, etc.</li>
                    <li>Professional Information: Resume, work experience, skills, etc.</li>
                    <li>Usage Data: IP address, browser type, pages visited, etc.</li>
                </ul>
            </section>

            <!-- Section 2 -->
            <section>
                <div class="flex items-center mb-4">
                    <i class="fas fa-cogs text-2xl text-purple-600 mr-3"></i>
                    <h3 class="text-2xl font-semibold text-purple-600">2. How We Use Your Information</h3>
                </div>
                <p class="text-gray-700 mb-4">We use the information we collect for the following purposes:</p>
                <ul class="list-disc list-inside ml-6 text-gray-700">
                    <li>To provide and improve our services.</li>
                    <li>To match job seekers with employers.</li>
                    <li>To communicate with you about updates, offers, and promotions.</li>
                    <li>To analyze website usage and improve user experience.</li>
                </ul>
            </section>

            <!-- Section 3 -->
            <section>
                <div class="flex items-center mb-4">
                    <i class="fas fa-share-alt text-2xl text-blue-600 mr-3"></i>
                    <h3 class="text-2xl font-semibold text-blue-600">3. Sharing Your Information</h3>
                </div>
                <p class="text-gray-700 mb-4">We do not sell or rent your personal information to third parties. However, we may share your information with:</p>
                <ul class="list-disc list-inside ml-6 text-gray-700">
                    <li>Employers and recruiters for job matching purposes.</li>
                    <li>Service providers who assist us in operating our website.</li>
                    <li>Legal authorities if required by law.</li>
                </ul>
            </section>

            <!-- Section 4 -->
            <section>
                <div class="flex items-center mb-4">
                    <i class="fas fa-shield-alt text-2xl text-purple-600 mr-3"></i>
                    <h3 class="text-2xl font-semibold text-purple-600">4. Data Security</h3>
                </div>
                <p class="text-gray-700">We implement industry-standard security measures to protect your information from unauthorized access, alteration, or disclosure.</p>
            </section>

            <!-- Section 5 -->
            <section>
                <div class="flex items-center mb-4">
                    <i class="fas fa-user-check text-2xl text-blue-600 mr-3"></i>
                    <h3 class="text-2xl font-semibold text-blue-600">5. Your Rights</h3>
                </div>
                <p class="text-gray-700 mb-4">You have the right to:</p>
                <ul class="list-disc list-inside ml-6 text-gray-700">
                    <li>Access, update, or delete your personal information.</li>
                    <li>Opt-out of receiving marketing communications.</li>
                    <li>Request a copy of the data we hold about you.</li>
                </ul>
            </section>

            <!-- Section 6 -->
            <section>
                <div class="flex items-center mb-4">
                    <i class="fas fa-sync-alt text-2xl text-purple-600 mr-3"></i>
                    <h3 class="text-2xl font-semibold text-purple-600">6. Changes to This Privacy Policy</h3>
                </div>
                <p class="text-gray-700">We may update this Privacy Policy from time to time. Any changes will be posted on this page, and we encourage you to review it periodically.</p>
            </section>

            <!-- Section 7 -->
            <section>
                <div class="flex items-center mb-4">
                    <i class="fas fa-envelope text-2xl text-blue-600 mr-3"></i>
                    <h3 class="text-2xl font-semibold text-blue-600">7. Contact Us</h3>
                </div>
                <p class="text-gray-700">If you have any questions about this Privacy Policy, please contact us at:</p>
                <p class="text-blue-600 font-semibold mt-2">Email: <a href="mailto:privacy@talentorbit.com" class="underline hover:text-purple-600">privacy@talentorbit.com</a></p>
            </section>
        </div>
    </main>


@endsection
