@extends('layouts.' . ($layout ?? 'app'))  <!-- Default to 'app' layout -->
@section('content')

<div class="main-content">
    <div class="page-content">

        <section class="pt-28 lg:pt-44 pb-28 group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 dark:bg-neutral-900 bg-[url('../images/home/page-title.png')] bg-center bg-cover relative" >
            <div class="container mx-auto">
                <div class="grid">
                    <div class="col-span-12">
                        <div class="text-center text-white">
                            <h3 class="mb-4 text-[26px]">FAQ'S</h3>
                            <div class="page-next">
                                <nav class="inline-block" aria-label="breadcrumb text-center">
                                    <ol class="flex justify-center text-sm font-medium uppercase">
                                        <li><a href="index.html">Home</a></li>
                                        <li><i class="bx bxs-chevron-right align-middle px-2.5"></i><a href="javascript:void(0)">Company</a></li>
                                        <li class="active" aria-current="page"><i class="bx bxs-chevron-right align-middle px-2.5"></i> Faq's </li>
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
        
        <!-- Start faqs -->
            <section class="py-20">
                <div class="container mx-auto">
                    <div class="nav-tabs line-tab">
                        <div class="grid grid-cols-12">
                            <div class="col-span-12 lg:col-span-8 lg:col-start-3">
                                <ul class="items-center text-sm font-medium text-center text-gray-700 nav-pill md:flex">
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="recent-job" class="inline-block w-full text-16 py-4 px-[18px] active" aria-current="page">Recent Jobs</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="featured-jobs-tab" class="inline-block w-full text-16 py-4 px-[18px]">Featured Jobs</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="freelancer-tab" class="inline-block w-full text-16 py-4 px-[18px]">Freelancer</a>
                                    </li>
                                    <li class="w-full">
                                        <a href="javascript:void(0);" data-tw-toggle="tab" data-tw-target="part-time-tab" class="inline-block w-full text-16 py-4 px-[18px]">Part Time</a>
                                    </li>
                                </ul>
                            </div> 
                        </div>
                        <div class="grid grid-cols-1">
                            <div class="tab-content">
                                <div class="block w-full tab-pane" id="recent-job">
                                    <div class="pt-14">
                                        <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                                            <div class="col-span-12 xl:col-span-6">
                                                <div>
                                                    <div data-tw-accordion="collapse">
                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group active ">
                                                                    <span class="group-data-[theme-color=violet]:group-[.active]:text-violet-500">Where does it come from ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180 group-data-[theme-color=violet]:group-[.active]:text-violet-500"></i>
                                                                </button>
                                                            </h6>
                        
                                                            <div class="block accordion-body">
                                                                <div class="p-5 font-light">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">Is there a Figma file available?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light ">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">What are the differences between Flowbite and Tailwind UI?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light dark:border-gray-700">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-span-12 xl:col-span-6">
                                                <div>
                                                    <div data-tw-accordion="collapse">
                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group active ">
                                                                    <span class="group-data-[theme-color=violet]:group-[.active]:text-violet-500">Where To Place A FAQ Page</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180 group-data-[theme-color=violet]:group-[.active]:text-violet-500"></i>
                                                                </button>
                                                            </h6>
                        
                                                            <div class="block accordion-body">
                                                                <div class="p-5 font-light">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">Just as the name suggests, a FAQ page is all about simple questions and answers. Gather common questions your customers have asked from your support team and include them in the FAQ, Use categories to organize questions related to specific topics.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">Why do we use it ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light ">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15"> Where can I get some ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light dark:border-gray-700">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-400">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>   
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden w-full tab-pane" id="featured-jobs-tab">
                                    <div class="pt-14">
                                        <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                                            <div class="col-span-12 xl:col-span-6">
                                                <div>
                                                    <div data-tw-accordion="collapse">
                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group active ">
                                                                    <span class="group-data-[theme-color=violet]:group-[.active]:text-violet-500">Where does it come from ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180 group-data-[theme-color=violet]:group-[.active]:text-violet-500"></i>
                                                                </button>
                                                            </h6>
                        
                                                            <div class="block accordion-body">
                                                                <div class="p-5 font-light">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">Is there a Figma file available?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light ">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">What are the differences between Flowbite and Tailwind UI?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light dark:border-gray-700">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-span-12 xl:col-span-6">
                                                <div>
                                                    <div data-tw-accordion="collapse">
                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group active ">
                                                                    <span class="group-data-[theme-color=violet]:group-[.active]:text-violet-500">Where To Place A FAQ Page</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180 group-data-[theme-color=violet]:group-[.active]:text-violet-500"></i>
                                                                </button>
                                                            </h6>
                        
                                                            <div class="block accordion-body">
                                                                <div class="p-5 font-light">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">Just as the name suggests, a FAQ page is all about simple questions and answers. Gather common questions your customers have asked from your support team and include them in the FAQ, Use categories to organize questions related to specific topics.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">Why do we use it ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light ">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15"> Where can I get some ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light dark:border-gray-700">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-400">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden w-full tab-pane" id="freelancer-tab">
                                    <div class="pt-14">
                                        <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                                            <div class="col-span-12 xl:col-span-6">
                                                <div>
                                                    <div data-tw-accordion="collapse">
                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group active ">
                                                                    <span class="group-data-[theme-color=violet]:group-[.active]:text-violet-500">Where does it come from ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180 group-data-[theme-color=violet]:group-[.active]:text-violet-500"></i>
                                                                </button>
                                                            </h6>
                        
                                                            <div class="block accordion-body">
                                                                <div class="p-5 font-light">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">Is there a Figma file available?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light ">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">What are the differences between Flowbite and Tailwind UI?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light dark:border-gray-700">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-span-12 xl:col-span-6">
                                                <div>
                                                    <div data-tw-accordion="collapse">
                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group active ">
                                                                    <span class="group-data-[theme-color=violet]:group-[.active]:text-violet-500">Where To Place A FAQ Page</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180 group-data-[theme-color=violet]:group-[.active]:text-violet-500"></i>
                                                                </button>
                                                            </h6>
                        
                                                            <div class="block accordion-body">
                                                                <div class="p-5 font-light">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">Just as the name suggests, a FAQ page is all about simple questions and answers. Gather common questions your customers have asked from your support team and include them in the FAQ, Use categories to organize questions related to specific topics.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">Why do we use it ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light ">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15"> Where can I get some ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light dark:border-gray-700">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-400">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>      
                                        </div>
                                    </div>
                                </div>
                                <div class="hidden w-full tab-pane" id="part-time-tab">
                                    <div class="pt-14">
                                        <div class="grid grid-cols-12 gap-y-10 lg:gap-10">
                                            <div class="col-span-12 xl:col-span-6">
                                                <div>
                                                    <div data-tw-accordion="collapse">
                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group active ">
                                                                    <span class="group-data-[theme-color=violet]:group-[.active]:text-violet-500">Where does it come from ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180 group-data-[theme-color=violet]:group-[.active]:text-violet-500"></i>
                                                                </button>
                                                            </h6>
                        
                                                            <div class="block accordion-body">
                                                                <div class="p-5 font-light">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">If several languages coalesce, the grammar of the resulting language is more simple and regular than that of the individual languages. The new common language will be more simple and regular than the existing European languages.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">Is there a Figma file available?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light ">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">What are the differences between Flowbite and Tailwind UI?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light dark:border-gray-700">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-400">Everyone realizes why a new common language would be desirable: one could refuse to pay expensive translators. To achieve this, it would be necessary to have uniform grammar, pronunciation and more common words.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="col-span-12 xl:col-span-6">
                                                <div>
                                                    <div data-tw-accordion="collapse">
                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group active ">
                                                                    <span class="group-data-[theme-color=violet]:group-[.active]:text-violet-500">Where To Place A FAQ Page</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180 group-data-[theme-color=violet]:group-[.active]:text-violet-500"></i>
                                                                </button>
                                                            </h6>
                        
                                                            <div class="block accordion-body">
                                                                <div class="p-5 font-light">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">Just as the name suggests, a FAQ page is all about simple questions and answers. Gather common questions your customers have asked from your support team and include them in the FAQ, Use categories to organize questions related to specific topics.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15">Why do we use it ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light ">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-300">It will be as simple as Occidental; in fact, it will be Occidental. To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental.</p>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="text-gray-700 accordion-item dark:text-gray-300">
                                                            <h6>
                                                                <button type="button" class="flex items-center justify-between w-full px-4 py-2 font-medium text-left accordion-header group">
                                                                    <span class="text-15"> Where can I get some ?</span>
                                                                    <i class="mdi mdi-chevron-down text-2xl group-[.active]:rotate-180"></i>
                                                                </button>
                                                            </h6>
                                                            <div class="hidden accordion-body">
                                                                <div class="p-5 font-light dark:border-gray-700">
                                                                    <p class="mb-2 text-gray-500 dark:text-gray-400">To an English person, it will seem like simplified English, as a skeptical Cambridge friend of mine told me what Occidental is. The European languages are members of the same family. Their separate existence is a myth.</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>     
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-5">
                            <div class="grid grid-cols-1">
                                <div class="mt-5 text-center">
                                    <a href="contact.html" class="btn group-data-[theme-color=violet]:bg-violet-500 group-data-[theme-color=sky]:bg-sky-500 group-data-[theme-color=red]:bg-red-500 group-data-[theme-color=green]:bg-green-500 group-data-[theme-color=pink]:bg-pink-500 group-data-[theme-color=blue]:bg-blue-500 border-transparent text-white hover:-translate-y-1.5 transition-all duration-500 ease-in-out mt-2"><i class="uil uil-phone"></i> Contact Us</a>
                                    <a href="javascript:void(0)" class="btn bg-yellow-500 border-transparent text-white hover:-translate-y-1.5 transition-all duration-500 ease-in-out mt-2 ltr:ml-2 rtl:mr-2"><i class="uil uil-envelope"></i> Email Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        <!-- End faqs -->
     
    </div>
</div>

@endsection