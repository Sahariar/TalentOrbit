@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
{{--@section('one.section')--}}
{{--    <link rel="stylesheet" href="{{ asset('css/one_section.css?v=1.0') }}">--}}
{{--    <link rel="stylesheet" href="{{ asset('css/animate.min.css') }}" />--}}
{{--@endsection--}}
@section('content')
        <div class="main-content">
            <div class="page-content">
                <!-- start home -->
                    <section class="relative bg-sky-500/20  py-20 ">
                            <div class="container mx-auto">
                                <div class="grid items-center grid-cols-12 gap-10">
                                    <div class="col-span-12 lg:col-span-7">
                                        <div class="mb-3 ltr:mr-14 rtl:ml-14">
                                            <h6 class="mb-3 text-sm text-gray-900 uppercase dark:text-gray-50">We have 150,000+ live jobs</h6>
                                            <h1 class="mb-3 text-5xl font-semibold leading-tight text-gray-900 dark:text-gray-50">Find your dream jobs <br> with <span class="font-bold group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">TalentOrbit</span></h1>
                                            <p class="text-lg font-light text-gray-500 whitespace-pre-line dark:text-gray-300">Find jobs, create trackable resumes and enrich your
                                                 applications.Carefully crafted after analyzing the needs of different
                                                 industries.</p>
                                        </div>
                                        <form action="{{ route('find-jobs') }}" method="GET">
                                            <div class="registration-form">
                                                <div class="grid grid-cols-12">
                                                    <div class="col-span-12 xl:col-span-4">
                                                        <div class="mt-3 rounded-l filter-search-form filter-border mt-md-0">
                                                            <i class="uil uil-briefcase-alt"></i>
                                                            <input type="search" name="name" id="job-title" class="md:w-full filter-input-box placeholder:text-gray-100 placeholder:text-13 dark:text-gray-100" placeholder="Job, Company name...">
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-12 xl:col-span-4">
                                                        <div class="mt-3 filter-search-form mt-md-0">
                                                            <i class="uil uil-map-marker"></i>
                                                            <input type="search" name="location" id="job-location" class="md:w-full filter-input-box placeholder:text-gray-100 placeholder:text-13 dark:text-gray-100" placeholder="Location...">
                                                            {{-- <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AX">&Aring;land Islands</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AQ">Antarctica</option>
                                                                <option value="AG">Antigua and Barbuda</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="BE">Belgium</option>
                                                                <option value="BZ">Belize</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermuda</option>
                                                                <option value="BT">Bhutan</option>
                                                                <option value="BO">Bolivia, Plurinational State of</option>
                                                                <option value="BA">Bosnia and Herzegovina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory</option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">C&ocirc;te d'Ivoire</option>
                                                                <option value="HR">Croatia</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CY">Cyprus</option>
                                                                <option value="CZ">Czech Republic</option>
                                                                <option value="DK">Denmark</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="DO">Dominican Republic</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="GQ">Equatorial Guinea</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Ethiopia</option>
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="FI">Finland</option>
                                                                <option value="FR">France</option>
                                                                <option value="GF">French Guiana</option>
                                                                <option value="PF">French Polynesia</option>
                                                                <option value="TF">French Southern Territories</option>
                                                                <option value="GA">Gabon</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GR">Greece</option>
                                                                <option value="GL">Greenland</option>
                                                                <option value="GD">Grenada</option>
                                                                <option value="GP">Guadeloupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GG">Guernsey</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="GY">Guyana</option>
                                                                <option value="HT">Haiti</option>
                                                                <option value="HM">Heard Island and McDonald Islands</option>
                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran, Islamic Republic of</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IM">Isle of Man</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="JE">Jersey</option>
                                                                <option value="JO">Jordan</option>
                                                                <option value="KZ">Kazakhstan</option>
                                                                <option value="KE">Kenya</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macao</option>
                                                                <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="ML">Mali</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="MQ">Martinique</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="MU">Mauritius</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="FM">Micronesia, Federated States of</option>
                                                                <option value="MD">Moldova, Republic of</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="MN">Mongolia</option>
                                                                <option value="ME">Montenegro</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MA">Morocco</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="MM">Myanmar</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NL">Netherlands</option>
                                                                <option value="AN">Netherlands Antilles</option>
                                                                <option value="NC">New Caledonia</option>
                                                                <option value="NZ">New Zealand</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Niger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                                <option value="OM">Oman</option>
                                                                <option value="PK">Pakistan</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PS">Palestinian Territory, Occupied</option>
                                                                <option value="PA">Panama</option>
                                                                <option value="PG">Papua New Guinea</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Peru</option>
                                                                <option value="PH">Philippines</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PL">Poland</option>
                                                                <option value="PT">Portugal</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="RE">R&eacute;union</option>
                                                                <option value="RO">Romania</option>
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="BL">Saint Barth&eacute;lemy</option>
                                                                <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint Lucia</option>
                                                                <option value="MF">Saint Martin (French part)</option>
                                                                <option value="PM">Saint Pierre and Miquelon</option>
                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="RS">Serbia</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SK">Slovakia</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen</option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan, Province of China</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TL">Timor-Leste</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="US">United States</option>
                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela, Bolivarian Republic of</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands, British</option>
                                                                <option value="VI">Virgin Islands, U.S.</option>
                                                                <option value="WF">Wallis and Futuna</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select> --}}
                                                        </div>
                                                    </div><!--end col-->
                                                    <div class="col-span-12 xl:col-span-4">
                                                        <div class="h-full mt-3">
                                                            <button class="btn bg-sky-900 border rounded-lg border-transparent ltr:xl:rounded-l-none rtl:xl:rounded-r-none w-full py-[18px] text-white" type="submit"><i class="uil uil-search me-1"></i> Find Job</button>
                                                        </div>
                                                    </div><!--end col-->
                                                </div><!--end row-->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-span-12 lg:col-span-5">
                                        <div class="relative mt-5 mt-lg-0 ms-xl-5">
                                            <div>
                                                <div class="absolute z-20 text-white text-8xl -top-12 -left-12">
                                                    <i class="mdi mdi-format-quote-open"></i>
                                                </div>
                                                <div class="text-8xl absolute -top-[3.2rem] -left-[3.2rem] z-30 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">
                                                    <i class="mdi mdi-format-quote-open "></i>
                                                </div>
                                            </div>
                                            <div class="swiper homeslider">
                                                <div class="swiper-wrapper">
                                                    <div class="swiper-slide">
                                                        <div class="text-center home-slide-box">
                                                            <img src="{{ asset('storage/images/home/img-02.png') }}" alt="" class="max-w-full rounded-3">
                                                            <div class="bg-overlay"></div>
                                                            <div class="absolute bottom-0 p-4">
                                                                <h2 class="text-white font-secound fw-normal">" It looks perfect on all major browsers, tablets,
                                                                    and mobile devices."</h2>
                                                                <h6 class="text-white">- MichaeL Drake</h6>
                                                            </div>
                                                        </div>
                                                    </div><!--swiper-slide-->
                                                    <div class="swiper-slide">
                                                        <div class="text-center home-slide-box">
                                                            <img src="{{ asset('storage/images/home/img-03.png') }}" alt="" class="max-w-full rounded-3">
                                                            <div class="bg-overlay"></div>
                                                            <div class="absolute bottom-0 p-4">
                                                                <h2 class="text-white font-secound fw-normal">" This template is well organized and very easy to
                                                                    customize. "</h2>
                                                                <h6 class="text-white">- Charles Dickens</h6>
                                                            </div>
                                                        </div>
                                                    </div><!--swiper-slide-->
                                                    <div class="swiper-slide">
                                                        <div class="text-center home-slide-box">
                                                            <img src="{{ asset('storage/images/home/img-04.png') }}" alt="" class="max-w-full rounded-3">
                                                            <div class="bg-overlay"></div>
                                                            <div class="absolute bottom-0 p-4">
                                                                <h2 class="text-white font-secound fw-normal">" All your client websites if you are an agency or
                                                                    freelancer. "</h2>
                                                                <h6 class="text-white">- Rebecca Swartz</h6>
                                                            </div>
                                                        </div>
                                                    </div><!--swiper-slide-->
                                                </div><!--end sw-->
                                            </div><!--end swiper-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </section>
                <!-- end home -->

                <!-- start category -->
                   {{-- <section class="py-20 dark:bg-neutral-800">
                       <div class="container mx-auto">
                           <div class="grid grid-cols-1 gap-5">
                               <div class="text-center">
                                   <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Browse Jobs Categories</h3>
                                   <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the
                                           right freelancers.</p>
                               </div>
                           </div>
                           <div class="grid grid-cols-12 gap-5">


                                @foreach ($categories as $category)
                                <div class="col-span-12 md:col-span-6 lg:col-span-3">
                                    <div class="mt-4">
                                        <div class="px-6 py-5 transition-all duration-500 ease-in-out cursor-pointer lg:py-10 hover:-translate-y-2">
                                            <div class="job-categorie h-16 w-16 group-data-[theme-color=violet]:bg-violet-500/20 bg-sky-500/20 rounded-lg text-center leading-[4.4] mx-auto">
                                                <i class="uim uim-layers-alt"></i>
                                            </div>
                                            <div class="mt-4 text-center">
                                                <a href="{{ route('category.jobs',$category->id) }}" class="text-gray-900">
                                                    <h5 class="text-lg dark:text-gray-50">{{$category->name}}</h5>
                                                </a>
                                                <p class="mt-1 font-medium text-gray-500 dark:text-gray-300">{{$category->job_posts_count}} Jobs</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                           </div>
                           <div class="grid grid-cols-1">
                               <div class="mt-5 text-center">
                                   <a href="{{route('category')}}" class="text-white border-transparent btn hover:-translate-y-2 bg-sky-900">Browse All Categories <i class="uil uil-arrow-right ms-1"></i></a>
                               </div>
                           </div>
                       </div>
                   </section> --}}
                <!-- end category -->

                <!-- start job list -->
                    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
                        <div class="container mx-auto">
                            <div class="grid grid-cols-1 gap-5">
                                <div class="mb-5 text-center">
                                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Recent Jobs</h3>
                                    <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right <br> freelancers.</p>
                                </div>
                            </div>
                            <div class="nav-tabs chart-tabpill">
                                <div class="tab-content">
                                    <div class="block w-full tab-pane" id="recent-job">
                                        <div class="pt-8 ">
                                            <div class="space-y-8">

                                                @foreach($recentJobs as $job)
                                                <div class="relative mt-4 overflow-hidden transition-all duration-500 ease-in-out bg-white border rounded-md border-gray-100/50 group/jobs group-data-[theme-color=violet]:hover:border-violet-500 group-data-[theme-color=sky]:hover:border-sky-500 group-data-[theme-color=red]:hover:border-red-500 group-data-[theme-color=green]:hover:border-green-500 group-data-[theme-color=pink]:hover:border-pink-500 group-data-[theme-color=blue]:hover:border-blue-500 hover:-translate-y-2 dark:bg-neutral-900 dark:border-neutral-600 ">
                                                        <div class="w-48 absolute -top-[5px] -left-20 -rotate-45 group-data-[theme-color=violet]:bg-violet-500/20 bg-sky-500/20 group-data-[theme-color=violet]:group-hover/jobs:bg-violet-500 group-data-[theme-color=sky]:group-hover/jobs:bg-sky-500 group-data-[theme-color=red]:group-hover/jobs:bg-red-500 group-data-[theme-color=green]:group-hover/jobs:bg-green-500 group-data-[theme-color=pink]:group-hover/jobs:bg-pink-500 group-data-[theme-color=blue]:group-hover/jobs:bg-blue-500 transition-all duration-500 ease-in-out p-[6px] text-center dark:bg-violet-500/20">
                                                            <a href="javascript:void(0)" class="text-2xl text-white align-middle"><i class="mdi mdi-star"></i></a>
                                                        </div>
                                                        <div class="p-4">
                                                            <div class="grid items-center grid-cols-12">
                                                                <div class="col-span-12 lg:col-span-2">
                                                                    <div class="mb-4 text-center mb-md-0">
                                                                        <a href="company-details.html">
                                                                            <img src="{{ asset('storage/images/featured-job/img-01.png') }}" alt="" class="mx-auto img-fluid rounded-3"></a>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-span-12 lg:col-span-3">
                                                                    <div class="mb-2 mb-md-0">
                                                                        <h5 class="mb-1 fs-18"><a href="jobs/{{$job->id}}" class="text-gray-900 dark:text-gray-50">{{$job->title}}</a>
                                                                        </h5>
                                                                        <p class="mb-0 text-gray-500 fs-14 dark:text-gray-300">{{$job->company_profile->name}}</p>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-span-12 lg:col-span-3">
                                                                    <div class="mb-2 lg:flex">
                                                                        <div class="flex-shrink-0">
                                                                            <i class="mr-1 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 mdi mdi-map-marker"></i>
                                                                        </div>
                                                                        <p class="mb-0 text-gray-500 dark:text-gray-300">{{$job->location}}</p>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-span-12 lg:col-span-2">
                                                                    <div>
                                                                        <p class="mb-2 text-gray-500 dark:text-gray-300"><span class="group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">$</span>1000-1200/m</p>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                        <div class="p-3 bg-gray-50 dark:bg-neutral-700">
                                                            <div class="grid grid-cols-12">
                                                                <div class="col-span-12 lg:col-span-4">
                                                                    <div>
                                                                        <p class="mb-0 text-gray-500 dark:text-gray-300"><span class="text-gray-900 dark:text-gray-50">Experience :</span> 1
                                                                            - 2 years</p>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-span-12 lg:col-span-6">

                                                                </div>
                                                                <!--end col-->
                                                                <div class="col-span-3 lg:col-span-2">
                                                                    <div class="text-start text-md-end dark:text-gray-50">
                                                                        <a href="{{$job->apply_link}}" data-bs-toggle="modal">Apply Now <i class="mdi mdi-chevron-double-right"></i></a>
                                                                    </div>
                                                                </div>
                                                                <!--end col-->
                                                            </div>
                                                            <!--end row-->
                                                        </div>
                                                </div>
                                                @endforeach

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="grid grid-cols-1">
                                    <div class="text-center">
                                        <a href="{{ route('jobs') }}" class="text-white border-transparent group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 btn focus:ring focus:ring-custom-500/20">View More  <i class="uil uil-arrow-right ms-1"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- end job list -->

                <!-- start process -->
{{--                <section class="section-box mt-90 mb-80">--}}
{{--                    <div class="container">--}}
{{--                        <div class="block-job-bg block-job-bg-homepage-2">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-lg-6 col-md-12 col-sm-12 col-12 d-none d-md-block">--}}
{{--                                    <div class="box-image-findjob findjob-homepage-2 ml-0 wow animate__animated animate__fadeIn">--}}
{{--                                        <figure><img alt="jobhub" src="{{ asset('storage/images/home/img-findjob.png') }}" /></figure>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-lg-6 col-md-12 col-sm-12 col-12">--}}
{{--                                    <div class="box-info-job pl-90 pt-30 pr-90">--}}
{{--                                        <span class="text-blue wow animate__animated animate__fadeInUp">Find jobs</span>--}}
{{--                                        <h5 class="heading-36 mb-30 mt-30 wow animate__animated animate__fadeInUp">Create free count and start apply your dream job today</h5>--}}
{{--                                        <p class="text-lg wow animate__animated animate__fadeInUp">--}}
{{--                                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is--}}
{{--                                            simply dummy.--}}
{{--                                        </p>--}}
{{--                                        <div class="box-button-shadow mt-30 wow animate__animated animate__fadeInUp">--}}
{{--                                            <a href="{{route('jobs')}}" class="btn btn-default">Explore more</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </section>--}}
                <!-- end process -->

                <!-- start cta -->
                    <section class="py-20 bg-gray-50 dark:bg-neutral-700">
                        <div class="container mx-auto">
                            <div class="nav-tabs round-pill">
                                <div class="grid items-center grid-cols-12 gap-5">
                                    <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                                        <div class="text-center">
                                            <h2 class="mb-5 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500 group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500">Browse Our <span class="text-yellow-500 fw-bold">5,000+</span> Latest
                                                Jobs</h2>
                                            <p class="text-gray-500 dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with
                                                the right freelancers.</p>
                                            <div class="pt-2 mt-5">
                                                <a href="{{route('jobs')}}" class="text-white border-transparent btn hover:-translate-y-2 bg-sky-900">Started Now <i class="align-middle uil uil-rocket ms-1"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- end cta -->

                <!-- start testimonial -->
                    <section class="py-20 dark:bg-neutral-800">
                        <div class="container mx-auto">
                            <div class="grid grid-cols-1 gap-5">
                                <div class="mb-5 text-center">
                                    <h3 class="mb-3 text-3xl text-gray-900 dark:text-gray-50">Happy Candidates</h3>
                                    <p class="mb-5 text-gray-500 whitespace-pre-line dark:text-gray-300">Post a job to tell us about your project. We'll quickly match you with the right <br> freelancers.</p>
                                </div>
                            </div>
                            <div class="grid grid-cols-12 mt-8">
                                <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                                    <div class="pb-5 swiper testimonialSlider">
                                        <div class="mb-12 swiper-wrapper">
                                            <div class="swiper-slide">
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <img src="{{ asset('storage/images/logo/mailchimp.svg') }}" class="h-12 mx-auto" alt="" />
                                                    </div>
                                                    <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                                        Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                        shortcuts. Even if the client is being careless. "</p>
                                                    <h5 class="mb-0 dark:text-gray-50">Jeffrey Montgomery</h5>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Product Manager</p>
                                                </div>
                                            </div>
                                            <!--end swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <img src="{{ asset('storage/images/logo/wordpress.svg') }}" class="h-12 mx-auto" alt="" />
                                                    </div>
                                                    <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                                        Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                        shortcuts. Even if the client is being careless. "</p>
                                                    <h5 class="mb-0 dark:text-gray-50">Rebecca Swartz</h5>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Creative Designer</p>
                                                </div>
                                            </div>
                                            <!--end swiper-slide-->
                                            <div class="swiper-slide">
                                                <div class="text-center">
                                                    <div class="mb-4">
                                                        <img src="{{ asset('storage/images/logo/instagram.svg') }}" class="h-12 mx-auto" alt="" />
                                                    </div>
                                                    <p class="mb-4 text-lg font-thin text-gray-500 dark:text-gray-200">" Very well thought out and articulate communication.
                                                        Clear milestones, deadlines and fast work. Patience. Infinite patience. No
                                                        shortcuts. Even if the client is being careless. "</p>
                                                    <h5 class="mb-0 dark:text-gray-50">Charles Dickens</h5>
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Store Assistant</p>
                                                </div>
                                            </div>
                                            <!--end swiper-slide-->
                                        </div>
                                        <!--end swiper-wrapper-->
                                        <div class="swiper-pagination"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                <!-- end testimonial -->

                <!-- start client -->
                    <section class="py-10 dark:bg-neutral-800">
                        <div class="container mx-auto">
                            <div class="grid grid-cols-12 gap-5">
                               <div class="col-span-12 lg:col-span-2">
                                    <img src="{{ asset('storage/images/logo/logo-01.png') }}" alt="" class="mx-auto cursor-pointer h-9 lg:h-6 xl:h-9" data-tooltip-target="tooltip-default">
                                    <div id="tooltip-default" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                                        Tooltip content
                                        <div class="tooltip-arrow" data-popper-arrow></div>
                                    </div>
                               </div>
                               <div class="col-span-12 lg:col-span-2">
                                    <img src="{{ asset('storage/images/logo/logo-02.png') }}" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                               </div>
                               <div class="col-span-12 lg:col-span-2">
                                    <img src="{{ asset('storage/images/logo/logo-03.png') }}" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                               </div>
                               <div class="col-span-12 lg:col-span-2">
                                    <img src="{{ asset('storage/images/logo/logo-04.png') }}" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                               </div>
                               <div class="col-span-12 lg:col-span-2">
                                    <img src="{{ asset('storage/images/logo/logo-05.png') }}" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                               </div>
                               <div class="col-span-12 lg:col-span-2">
                                    <img src="{{ asset('storage/images/logo/logo-06.png') }}" alt="" class="mx-auto cursor-pointer h-9 lg:h-7 xl:h-9">
                               </div>
                            </div>
                        </div>
                    </section>
                <!-- end client -->

            </div>
        </div>
        <!-- start subscribe -->
        <section class="relative py-16 overflow-hidden bg-zinc-700 dark:bg-neutral-900">
            <div class="container mx-auto">
                <div class="grid items-center grid-cols-12 gap-5">
                    <div class="col-span-12 lg:col-span-7">
                        <div class="text-center lg:text-start">
                            <h4 class="text-white">Get New Jobs Notification!</h4>
                            <p class="mt-1 mb-0 text-white/50 dark:text-gray-300">Subscribe &amp; get all related jobs notification.</p>
                        </div>
                    </div>
                    <div class="z-40 col-span-12 lg:col-span-5">
                        <form class="flex" action="#">
                            <input
                                type="text" class="w-full text-gray-100 bg-transparent rounded-md border-gray-50/30 ltr:border-r-0 rtl:border-l-0 ltr:rounded-r-none rtl:rounded-l-none placeholder:text-13 placeholder:text-gray-100 dark:text-gray-100 dark:bg-white/5 dark:border-neutral-600 focus:ring-0 focus:ring-offset-0"
                                id="subscribe" placeholder="Enter your email" >
                            <button class="text-white border-transparent btn   bg-sky-900  focus:ring focus:ring-custom-500/30" type="button" id="subscribebtn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="absolute right-0 -top-10 -z-0 opacity-20">
                <img src="{{ asset('storage/images/subscribe.png') }}" alt="" class="img-fluid">
            </div>
        </section>
        <!-- end subscribe -->

        @endsection
