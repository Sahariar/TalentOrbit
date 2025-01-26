@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')
<div class="main-content">
    <div class="page-content">

        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">Candidate Grid</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex flex-wrap justify-center text-sm font-medium uppercase">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="{{ url()->previous() }}">Pages</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i>Candidate Grid</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/images/about/shape.png" alt="" class="absolute block bg-cover -bottom-0 dark:hidden">
            <img src="assets/images/about/shape-dark.png" alt="" class="absolute hidden bg-cover -bottom-0 dark:block">
        </section>

        <!-- Start grid -->
            <section class="py-20">
                <div class="container mx-auto">
                    <div class="col-span-12">
                        <div class="job-list-header">
                            <form action="#">
                                <div class="grid grid-cols-12 gap-y-3 lg:gap-3">
                                    <div class="col-span-12 xl:col-span-3">
                                        <div class="relative filler-job-form">
                                            <i class="uil uil-briefcase-alt"></i>
                                            <input type="search" class="w-full filter-job-input-box dark:text-gray-100" id="exampleFormControlInput1" placeholder="Job, company... ">
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-span-12 xl:col-span-3">
                                        <div class="relative filler-job-form">
                                            <i class="uil uil-location-point"></i>
                                            <select class="form-select" data-trigger name="choices-single-location" id="choices-single-location" aria-label="Default select example">
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
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-span-12 xl:col-span-3">
                                        <div class="relative filler-job-form">
                                            <i class="uil uil-clipboard-notes"></i>
                                            <select class="form-select " data-trigger name="choices-single-categories" id="choices-single-categories" aria-label="Default select example">
                                                <option value="4">Accounting</option>
                                                <option value="1">IT & Software</option>
                                                <option value="3">Marketing</option>
                                                <option value="5">Banking</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!--end col-->
                                    <div class="col-span-12 xl:col-span-3">
                                        <a href="javascript:void(0)" class="text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 focus:ring focus:ring-custom-500/30"><i class="uil uil-filter"></i> Fliter</a>
                                        <a href="javascript:void(0)" class="text-white bg-green-500 border-transparent btn focus:ring focus:ring-green-500/30 ltr:ml-1 rtl:mr-1"><i class="uil uil-cog"></i> Advance</a>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end grid-->
                            </form>
                        </div>
                    </div>
                    <div class="mt-5">
                        <div class="grid items-center grid-cols-12">
                            <div class="col-span-12 lg:col-span-8">
                                <h6 class="mb-0 text-gray-900 fs-16 dark:text-gray-50"> Showing {{ $candidates->firstItem() }} – {{ $candidates->lastItem() }} of {{ $candidates->total() }} results </h6>
                            </div>
                            <div class="col-span-12 lg:col-span-4">
                                <div class="grid grid-cols-12 gap-y-3 lg:gap-3">
                                    <div class="col-span-12 lg:col-span-6">
                                        <div class="mt-2 selection-widget mt-lg-0">
                                            <select class="form-select" data-trigger name="choices-single-filter-orderby" id="choices-single-filter-orderby" aria-label="Default select example">
                                                <option value="df">Default</option>
                                                <option value="ne">Newest</option>
                                                <option value="od">Oldest</option>
                                                <option value="rd">Random</option>
                                            </select>
                                        </div>
                                    </div>
{{--                                    per page section--}}
                                    <div class="col-span-12 lg:col-span-6">
                                        <div class="mt-2 selection-widget mt-lg-0">
                                            <select class="form-select" data-trigger name="choices-candidate-page" id="choices-candidate-page" aria-label="Default select example">
                                                <option value="df">All</option>
                                                <option value="ne">8 per Page</option>
                                                <option value="ne">12 per Page</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-10">
                        <div class="grid grid-cols-12 gap-y-6 lg:gap-6">

                            @foreach ($candidates as $candidate)
                            <div class="col-span-12 lg:col-span-4">
                                <div class="relative p-5 border rounded-md border-gray-100/50 dark:border-neutral-600">

                                    <div class="flex mb-4">
                                        <div class="relative shrink-0">
                                            <img src="{{ Storage::url('app/public/assets/images/featured-job/' . $candidate->image ) }}" alt="image" class="w-16 h-16 rounded">
                                            <span class="absolute h-3.5 w-3.5 rounded-full bg-green-500 border-2 border-white -top-1 -right-1 dark:border-neutral-700">
                                                <span class="hidden">active</span>
                                            </span>
                                        </div>
                                        <div class="ltr:ml-3 rtl:mr-3">
                                            <a href="candidate-details.html"><h5 class="mb-2 text-17 dark:text-white">{{$candidate->name}}</h5></a>
                                            <span class="text-13 bg-sky-500/20 text-sky-500 px-1.5 py-1 rounded">$800/month</span>
                                        </div>
                                    </div>

                                    <ul class="flex items-center justify-between">
                                        <li class="text-yellow-500 text-17">
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star"></i>
                                            <i class="mdi mdi-star-half-full"></i>
                                        </li>
                                        <li>
                                            <div class="h-8 w-8 bg-red-600 rounded text-white leading-[2.4] text-center">
                                                <a href="javascript:void(0)"><i class="text-lg uil uil-heart-alt"></i></a>
                                            </div>
                                        </li>
                                    </ul>

                                    <div class="mt-5 border rounded border-gray-100/50 dark:border-neutral-600">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-6">
                                                <div class="px-3 py-2 ltr:border-r rtl:border-l dark:border-neutral-600 border-gray-100/50">
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Exp. : 0-3 Years</p>
                                                </div>
                                            </div><!--end col-->
                                            <div class="col-span-6">
                                                <div class="px-3 py-2">
                                                    <p class="mb-0 text-gray-500 dark:text-gray-300">Freelancers</p>
                                                </div>
                                            </div><!--end col-->
                                        </div>
                                    </div>

                                    <div class="mt-4">
                                        <p class="text-gray-500 dark:text-gray-300">{{$candidate->description ?? "No discription added"}}</p>
                                    </div>

                                    <div class="mt-6">
{{--                                            hire now option disable--}}
{{--                                        <a href="#hireNow" data-bs-toggle="modal" class="w-full text-white border-transparent btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 hover:-translate-y-2"><i class="mdi mdi-account-check"></i> Hire Now</a>--}}
                                        <a href="{{route('candidate.show', $candidate)}}" class="w-full mt-2 border-transparent btn group-data-[theme-color=violet]:bg-violet-500/20 group-data-[theme-color=sky]:bg-sky-500/20 group-data-[theme-color=red]:bg-red-500/20 group-data-[theme-color=green]:bg-green-500/20 group-data-[theme-color=pink]:bg-pink-500/20 group-data-[theme-color=blue]:bg-blue-500/20 group-data-[theme-color=violet]:text-violet-500 group-data-[theme-color=sky]:text-sky-500 group-data-[theme-color=red]:text-red-500
                                            group-data-[theme-color=green]:text-green-500 group-data-[theme-color=pink]:text-pink-500 group-data-[theme-color=blue]:text-blue-500 hover:-translate-y-1 group-data-[theme-color=violet]:hover:bg-violet-500 group-data-[theme-color=violet]:hover:text-white group-data-[theme-color=sky]:hover:bg-sky-500 group-data-[theme-color=sky]:hover:text-white group-data-[theme-color=red]:hover:bg-red-500 group-data-[theme-color=red]:hover:text-white group-data-[theme-color=green]:hover:bg-green-500
                                            group-data-[theme-color=green]:hover:text-white group-data-[theme-color=pink]:hover:bg-pink-500 group-data-[theme-color=pink]:hover:text-white group-data-[theme-color=blue]:hover:bg-blue-500 group-data-[theme-color=blue]:hover:text-white hover:ring group-data-[theme-color=violet]:hover:ring-violet-500/20 group-data-[theme-color=sky]:hover:ring-sky-500/20 group-data-[theme-color=red]:hover:ring-red-500/20 group-data-[theme-color=green]:hover:ring-green-500/20 group-data-[theme-color=pink]:hover:ring-pink-500/20
                                            group-data-[theme-color=blue]:hover:ring-blue-500/20"><i class="mdi mdi-eye"></i> View Profile</a>
                                    </div>

                                    <div class="absolute px-2 text-white bg-violet-500 top-2 ltr:right-0 rtl:left-0">
                                        <span class="relative text-xs font-medium uppercase">featured</span>
                                        <div class="after:contant[] ltr:after:border-r-[11px] rtl:after:border-l-[11px] after:absolute after:border-b-[12px] ltr:after:-left-[11px] rtl:after:-right-[11.5px] after:top-0 after:border-t-[11.5px] after:border-t-transparent after:border-violet-500 after:border-b-transparent"></div>
                                    </div>

                                </div>
                            </div>

                            @endforeach

                        </div>
                    </div>

                    {{-- ------- next page link ------- --}}
                    <div class="grid grid-cols-12">
                        <div class="col-span-12">
                            <ul class="flex justify-center gap-2 mt-8">
                                @if ($candidates->onFirstPage())
                                    <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-gray-100/20">
                                        <span class="cursor-auto text-16 leading-[2.8] dark:text-white">
                                            <i class="mdi mdi-chevron-double-left"></i>
                                        </span>
                                    </li>
                                @else
                                    <li class="w-12 h-12 text-center border rounded-full border-gray-100/50 dark:border-gray-100/20">
                                        <a href="{{ $candidates->previousPageUrl() }}" class="flex items-center justify-center w-full h-full">
                                            <i class="mdi mdi-chevron-double-left text-16 leading-[2.8] dark:text-white"></i>
                                        </a>
                                    </li>
                                @endif

                                @foreach ($candidates->links()->elements as $element)
                                    @if (is_string($element))
                                        <li class="w-12 h-12 text-center text-gray-500 dark:text-gray-400">
                                            <span class="text-16 leading-[2.8]">{{ $element }}</span>
                                        </li>
                                    @endif

                                    @if (is_array($element))
                                        @foreach ($element as $page => $url)
                                            @if ($page == $candidates->currentPage())
                                                <li class="w-12 h-12 text-center text-white border border-transparent rounded-full cursor-pointer group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500">
                                                    <a class="flex items-center justify-center w-full h-full" href="javascript:void(0)">
                                                        {{ $page }}
                                                    </a>
                                                </li>
                                            @else
                                                <li class="w-12 h-12 text-center border rounded-full cursor-pointer border-gray-100/50 dark:border-gray-100/20">
                                                    <a href="{{ $url }}" class="flex items-center justify-center w-full h-full dark:text-white">
                                                        {{ $page }}
                                                    </a>
                                                </li>
                                            @endif
                                        @endforeach
                                    @endif
                                @endforeach

                                @if ($candidates->hasMorePages())
                                    <li class="w-12 h-12 text-center border rounded-full border-gray-100/50 dark:border-gray-100/20">
                                        <a href="{{ $candidates->nextPageUrl() }}" class="flex items-center justify-center w-full h-full">
                                            <i class="mdi mdi-chevron-double-right text-16 leading-[2.8] dark:text-white"></i>
                                        </a>
                                    </li>
                                @else
                                    <li class="w-12 h-12 text-center border rounded-full cursor-default border-gray-100/50 dark:border-gray-100/20">
                                            <span class="cursor-auto text-16 leading-[2.8] dark:text-white">
                                                <i class="mdi mdi-chevron-double-right"></i>
                                            </span>
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </div>
                    {{-- ------- next page link end ------- --}}

                </div>
            </section>
        <!-- End grid -->

    </div>
</div>
@endsection
