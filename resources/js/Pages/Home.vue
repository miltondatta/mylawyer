<template>
    <app-layout title="Home" :showLoader="showLoader">
        <template #header>
            <!-- Page Heading -->
            <!-- <div class="page-heading d-flex py-3 bg-white shadow-sm border-bottomF">
      <div class="container">
        <h2 class="h4 font-weight-bold">Dashboard</h2>
      </div>
      </div>-->

            <section class="hero position-relative overflow-hidden">
                <Carousel :settings="settings" :breakpoints="breakpoints">
                    <Slide key="1">

                        <div class="container">
                            <div class="row w-100 py-5">
                                <div class="col-lg-6 col-md-12 text-start" data-aos="fade-right" data-aos-duration="1500">
                                    <div v-if="getPageContentType('main_heading_slide_1') == 'textarea'">
                                      <div class="text-white" v-html="getPageContent('main_heading_slide_1')"> </div>
                                    </div>
                                    <div v-else-if="getPageContentType('main_heading_slide_1') == 'text'">
                                        <p> {{getPageContent('main_heading_slide_1') ?? '-'}} </p>
                                    </div>
                                    <div v-else>
                                        <h1 class="text-white display-6">
                                        <small class="d-block fs-6 text-capitalize fw-normal">{{ __( "Your Legal Solution Just A Click Away" ) }}</small>
                                        {{ __("Online Consultation") }}
                                    </h1>
                                    <p class="text-white py-3 fs-6">
                                        <span class="hero-pulse py-3">
                                            <span class="text-primary">{{ __("27/7 Video") }} </span>
                                            {{  __( "Consultations, " ) }}
                                            <span class="text-primary">{{ __("Audio") }} </span>

                                            {{
                                                __("Calls + ")
                                            }}

                                            <span class="text-primary">{{ __("Chat") }} </span>

                                            {{
                                                __("Consultation")
                                            }}
                                        </span>
                                    </p>
                                    </div>
                                    <FindLawyerBar :home="true"></FindLawyerBar>
                                    <div v-if="getPageContentType('header_content_slide_1') == 'textarea'">
                                      <div class="text-white" v-html="getPageContent('header_content_slide_1')"> </div>
                                    </div>
                                    <div v-else-if="getPageContentType('header_content_slide_1') == 'text'">
                                        <p> {{getPageContent('header_content_slide_1') ?? '-'}} </p>
                                    </div>
                                    <p v-else class="mb-0 text-white mt-3 pe-md-4">
                                        Get professional legal advice from the
                                        comfort of your home with our virtual
                                        consultations. Connect with experienced
                                        lawyers online and find the answers you
                                        need for your legal matters. Convenient,
                                        confidential, and just a click away
                                    </p>
                                </div>
                                <div class="col-lg-6 col-md-12">
                                    <div class="d-md-flex justify-content-center d-none">
                                        <img src="@/images/home/lawfirmhero1.png" alt class="img-fluid" data-aos="fade"
                                            data-aos-once="false" data-aos-duration="2000" data-aos-delay="500" />
                                    </div>

                                    <div class="d-md-flex d-none align-items-center mt-4 position-relative">
                                        <img src="@/images/home/lawfirmshero.png" alt class="img-fluid me-4" data-aos="fade"
                                            data-aos-once="false" data-aos-duration="2000" data-aos-delay="1500"
                                            style="max-width: 320px" />
                                        <img src="@/images/home/lawfirmhero4.png" alt class="img-fluid" data-aos="fade"
                                            data-aos-once="false" data-aos-duration="2000" data-aos-delay="1000" style="
                                                max-width: 194px;
                                                position: absolute;
                                                right: -20px;
                                                top: -50px;
                                            " />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </Slide>
                    <Slide key="2">
                        <div class="row py-5 align-items-center">
                            <div class="col-md-12 py-3 text-center" data-aos="fade-right" data-aos-duration="1500">
                                <div v-if="getPageContentType('header_content_slide_2') == 'textarea'">
                                      <div class="text-white" v-html="getPageContent('header_content_slide_2')"> </div>
                                    </div>
                                    <div v-else-if="getPageContentType('header_content_slide_2') == 'text'">
                                        <p> {{getPageContent('header_content_slide_2') ?? '-'}} </p>
                                    </div>
                                    <div v-else>
                                        <h1 class="text-white display-6">
                                    <small class="fw-normal fs-6 text-capitalize d-block">{{
                                        __("Trusted By Over Million Users")
                                    }}</small>
                                    {{ __("Online Law Firms ") }}
                                </h1>
                                <p class="text-white fs-6">
                                    {{
                                        __(
                                            "27/7 Video Consultations Audio Calls + Chat consultation "
                                        )
                                    }}
                                </p>
                                <div class="d-flex flex-md-row flex-column align-items-center justify-content-center mb-5">
                                    <div class="hero-pulse mb-md-0 mb-3 p-2 px-4 d-flex align-items-center me-4">
                                        <div class="circle pulse green me-4"></div>
                                        <span class="text-white" style="font-size: 11px">{{
                                            __("100+ online Law Firms")
                                        }}</span>
                                    </div>

                                    <div class="hero-pulse p-2 px-4 d-flex align-items-center">
                                        <div class="circle pulse yellow me-4"></div>
                                        <span class="text-white" style="font-size: 11px">{{
                                            __("50+ online Appointments")
                                        }}</span>
                                    </div>
                                </div>
                                    </div>


                                <FindLawFirmBar :home="true"></FindLawFirmBar>
                            </div>

                            <div class="col-12 text-center d-none d-lg-block mt-4">
                                <img src="@/images/home/lawfirmshero.png" style="max-width: 350px" alt class="img-fluid"
                                    data-aos="fade" data-aos-once="false" data-aos-duration="2000" data-aos-delay="1000" />
                            </div>

                            <div class="header-images d-none d-lg-block">
                                <img src="@/images/home/lawfirmhero1.png" alt class="img-fluid position-absolute"
                                    data-aos="fade" data-aos-once="false" data-aos-duration="2000" data-aos-delay="500" />
                                <img src="@/images/home/lawfirmhero2.png" alt class="img-fluid position-absolute"
                                    data-aos="fade" data-aos-once="false" data-aos-duration="2000" data-aos-delay="1000" />
                                <img src="@/images/home/lawfirmhero3.png" alt class="img-fluid position-absolute"
                                    data-aos="fade" data-aos-once="false" data-aos-duration="2000" data-aos-delay="1500" />
                                <img src="@/images/home/lawfirmhero4.png" alt class="img-fluid position-absolute"
                                    data-aos="fade" data-aos-once="false" data-aos-duration="2000" data-aos-delay="2000" />
                            </div>
                        </div>
                    </Slide>

                    <template #addons>
                        <!-- <Navigation /> -->
                        <Pagination class="mt-0 my-5" />
                    </template>
                </Carousel>
            </section>
        </template>

        <home-statistics-bar></home-statistics-bar>

        <home-static-cards-section></home-static-cards-section>
        <spotlight-lawyer-section></spotlight-lawyer-section>

        <!-- Find Nearest Lawyer -->
        <div class="section nearest-lawyer mt-5 pt-5">
            <div class="container">
                <div class="row py-md-5 align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0 text-center">
                        <img class="img-fluid" width="350" src="@/images/home/group3.png" alt="Image"/>
                    </div>

                    <div class="col-lg-6">
                        <div v-if="getPageContentType('find_nearest_lawyer_description') == 'textarea'">
                         <div v-html="getPageContent('find_nearest_lawyer_description')"> </div>
                      </div>
                        <div v-else-if="getPageContentType('find_nearest_lawyer_description') == 'text'">
                            <p> {{getPageContent('find_nearest_lawyer_description') ?? '-'}} </p>
                         </div>
                         <div v-else>
                            <span class="fs-3">{{ __("Find Your") }}</span>
                        <h2 class="display-6">
                            {{ __("Nearest Lawyers") }}
                        </h2>

                        <p>
                            {{ __("resonance healing energy description") }}
                        </p>
                         </div>
                        <div>
                            <a :href="route('lawyers.listing')" class="btn btn-primary">{{ getPageContent('find_nearest_lawyer_button_text') ?? __("Find Nearest Lawyers") }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Find Nearest Lawyer -->

        <lawyers-tabs-section></lawyers-tabs-section>

        <featured-lawfirm-section></featured-lawfirm-section>

          <!-- Free Online Consultation -->
        <div class="free-consulation pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="@/images/home/27718-5-business-people-hd.png" alt style="margin-top: -100px"
                            class="img-fluid" data-aos="fade-right" data-aos-once="false" data-aos-duration="1500"
                            data-aos-delay="800" />
                    </div>
                    <div class="col-md-6 d-flex align-items-center">
                        <div class="py-5 my-3 text-capitalize" data-aos="fade-left" data-aos-once="false" data-aos-duration="1500"
                            data-aos-delay="800">
                            <div class="col-12" v-if="getPageContentType('free_consultation_description') == 'textarea'">
                                      <div v-html="getPageContent('free_consultation_description')"> </div>
                                    </div>
                            <div class="col-12" v-else-if="getPageContentType('free_consultation_description') == 'text'">
                                    <p> {{getPageContent('free_consultation_description') ?? '-'}} </p>
                            </div>
                            <div v-else>
                                <h4 class="display-4 fw-bolder text-white ">
                                {{ __("Free online consultations") }}
                            </h4>
                            <p class="fs-2 fw-bolder text-white">
                                {{ __("Starting at $15/month") }}
                            </p>
                            </div>
                            <span v-if="$page.props.auth && $page.props.settings.commission_type == 'subscription_base'">
                                <a v-if="$page.props.auth.logged_in_as == 'lawyer'" :href="route('pricing', { type: 'lawyer' })" class="btn btn-primary" type="button">{{ getPageContent('free_consultation_button') ?? __("Get Membership") }}</a>
                                <a v-if="$page.props.auth.logged_in_as == 'law_firm'" :href="route('pricing', { type: 'law_firm' })" class="btn btn-primary" type="button">{{ getPageContent('free_consultation_button') ?? __("Get Membership") }}</a>
                            </span>
                            <a v-else :href="route('register', { tab: 'lawyer' })" class="btn btn-primary" type="button">{{ getPageContent('free_consultation_button') ?? __("Get Membership") }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       <!-- Free Online Consultation -->
        <featured-event-section findLawyers="true"></featured-event-section>

        <featured-testimonials-section></featured-testimonials-section>

        <!-- App Section -->
        <div class="section customer-app">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mobile-img text-end mb-4 mb-lg-0" data-aos="fade-right" data-aos-once="false"
                            data-aos-duration="1500" data-aos-delay="500">
                            <img src="@/images/home/mobile-2.png" width="450" alt class="img-fluid" />
                            <img src="@/images/home/mob-bg.png" alt class="back-shadow" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-flex justify-content-center flex-column h-100" data-aos="fade-left"
                            data-aos-once="false" data-aos-duration="1500" data-aos-delay="800">

                            <div  v-if="getPageContentType('app_section_description') == 'textarea'">
                                      <div v-html="getPageContent('app_section_description')"> </div>
                                    </div>
                                <div  v-else-if="getPageContentType('app_section_description') == 'text'">
                                    <p> {{getPageContent('app_section_description') ?? '-'}} </p>
                            </div>
                            <div v-else>
                                <span class="fs-3">{{ __("Download") }}</span>
                                    <h2 class="display-6">
                                        {{ __("Consultant App") }}
                                    </h2>
                                    <p>
                                        Our commitment to excellence extends to our
                                        commitment to integrity. We adhere to the
                                        highest ethical standards, treating each case
                                        with the utmost professionalism and
                                        confidentiality. We understand the gravity of
                                        the legal matters we handle, and we approach
                                        them with the respect and dedication they
                                        deserve.
                                    </p>

                                    <p class="fs-3">
                                        {{ __("Get the link to download the app") }}
                                    </p>
                            </div>


                            <div class="d-flex align-items-center flex-lg-row flex-column">

                            <a v-if="getPageContent('app_section_app_store_btn_text') != '' && getPageContent('app_section_app_store_btn_text') != null" href="#" class="btn btn-store d-flex rounded-pill me-4 mb-4 mb-lg-0">
                                    <i class="bi bi-apple fs-3 me-3"></i>
                                    <div  v-if="getPageContentType('app_section_app_store_btn_text') == 'textarea'">
                                      <div v-html="getPageContent('app_section_app_store_btn_text')"> </div>
                                    </div>
                                    <div  v-else-if="getPageContentType('app_section_app_store_btn_text') == 'text'">
                                        <p> {{getPageContent('app_section_app_store_btn_text') ?? '-'}} </p>
                                </div>
                                    <div v-else>
                                        <span class="btn-label">{{
                                            __("Download on the")
                                        }}</span>
                                        <span class="btn-caption">{{
                                            __("App Store")
                                        }}</span>
                                    </div>
                            </a>

                                <a href="#" v-if="getPageContent('app_section_play_btn_text') != '' && getPageContent('app_section_play_btn_text') != null"  class="btn btn-store d-flex rounded-pill">
                                    <i class="bi bi-google-play fs-3 me-3"></i>
                                    <div  v-if="getPageContentType('app_section_play_btn_text') == 'textarea'">
                                      <div v-html="getPageContent('app_section_play_btn_text')"> </div>
                                    </div>
                                    <div  v-else-if="getPageContentType('app_section_play_btn_text') == 'text'">
                                        <p> {{getPageContent('app_section_play_btn_text') ?? '-'}} </p>
                                </div>
                                    <div v-else>
                                        <span class="btn-label">{{
                                            __("Get it on")
                                        }}</span>
                                        <span class="btn-caption">{{
                                            __("Google Store")
                                        }}</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         <!-- App Section -->

        <!-- Faqs Section -->
        <div class="section faqs-section pt-0" v-if="faqs.length > 0">
            <div class="container">

                <div class="row">
                    <div class="col-12 mb-5 text-center">
                        <div  v-if="getPageContentType('faqs_section_description') == 'textarea'">
                                      <div v-html="getPageContent('faqs_section_description')"> </div>
                                    </div>
                                <div  v-else-if="getPageContentType('faqs_section_description') == 'text'">
                                    <p> {{getPageContent('faqs_section_description') ?? '-'}} </p>
                            </div>
                            <div v-else>
                                <span class="fs-3">{{ __("Find some ") }}</span>
                        <h2 class="5">{{ __("Answer Questions") }}</h2>
                        <p>
                            When you choose Elite Legal Services, you are
                            choosing a trusted partner dedicated to your
                            success. Here are some frequently asked questions by
                            some users. Feel free to add your questions
                        </p>
                            </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item" v-for="item in faqs" :key="item.id">
                                <h2 class="accordion-header" :id="`panelsStayOpen-headingOne${item.id}`">
                                    <button class="accordion-button shadow-none collapsed mb-3" type="button"
                                        data-bs-toggle="collapse" :data-bs-target="`#panelsStayOpen-collapseOne${item.id}`"
                                        aria-expanded="false" :aria-controls="`panelsStayOpen-collapseOne${item.id}`">
                                        <div
                                            class="d-flex w-100 flex-column flex-lg-row align-items-lg-center justify-content-between px-3">
                                            <div class="d-flex align-items-center">
                                                <i class="bi bi-question-circle me-3 fs-3"></i>
                                                <span>{{ item.name }}</span>
                                            </div>

                                        </div>
                                    </button>
                                </h2>
                                <div :id="`panelsStayOpen-collapseOne${item.id}`" class="accordion-collapse collapse"
                                    :aria-labelledby="`panelsStayOpen-headingOne${item.id}`">
                                    <div class="accordion-body">
                                        <div v-html="item.description"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row pt-4 justify-content-center">
                    <div class="col-md-3 d-flex justify-content-center">
                        <Link href="#" class="learn-more btn position-relative">
                        <span class="circle" aria-hidden="true">
                            <span class="icon arrow"></span>
                        </span>
                        <span class="button-text">{{
                            getPageContent('general_view_more_btn_text') ??
                            __("view more")
                        }}</span>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
        <!-- Faqs Section -->

        <!-- <featured-tags-section class="bg-light"></featured-tags-section> -->
    </app-layout>
</template>

<script>
import { defineComponent } from "vue";
import AppLayout from "@/Layouts/AppLayout.vue";
import Navbar from "@/Layouts/AppIncludes/Navbar.vue";
import FindLawyerBar from "@/Components/Lawyers/FindLawyerBar.vue";
import FindLawFirmBar from "@/Components/LawFirms/FindLawFirmBar.vue";
import FindEventBar from "@/Components/Events/FindEventBar.vue";

import SpotlightLawyerSection from "@/Components/Lawyers/SpotlightLawyerSection.vue";
import HomeStatisticsBar from "@/Components/HomeStatisticsBar.vue";
import FeaturedTagsSection from "@/Components/Shared/FeaturedTagsSection.vue";
import FeaturedEventSection from "@/Components/Events/FeaturedEventSection.vue";
import LawyersTabsSection from "@/Components/Lawyers/LawyersTabs.vue";
import FeaturedTestimonialsSection from "@/Components/Shared/FeaturedTestimonialsSection.vue";
import HomeStaticCardsSection from "@/Components/HomeStaticCardsSection.vue";
import { Head, Link } from "@inertiajs/inertia-vue3";
import Section from "@/Components/Section.vue";
import axios from "axios";
import { Carousel, Navigation, Pagination, Slide } from "vue3-carousel";
import FeaturedLawfirmSection from "@/Components/LawFirms/FeaturedLawFirmSection.vue";

export default defineComponent({
    components: {
        Head,
        Link,
        AppLayout,
        Navbar,
        FindLawyerBar,
        FindLawFirmBar,
        FindEventBar,
        HomeStatisticsBar,
        LawyersTabsSection,
        HomeStaticCardsSection,
        SpotlightLawyerSection,
        FeaturedTagsSection,
        FeaturedEventSection,
        FeaturedTestimonialsSection,
        FeaturedLawfirmSection,
        Carousel,
        Slide,
        Section,
        Pagination,
        Navigation,
    },
    created() {
        this.getFAQS();
    },
    data: () => ({
        faqs: [],
        // carousel settings
        settings: {
            itemsToShow: 1,
            snapAlign: "start",
        },
        // breakpoints are mobile first
        // any settings not specified will fallback to the carousel settings
        breakpoints: {
            // 700px and up
            700: {
                itemsToShow: 1,
                snapAlign: "start",
            },
            // 1024 and up
            1024: {
                itemsToShow: 1,
                snapAlign: "start",
            },
        },
    }),

    methods: {
        readFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "read less";
                moreText.style.display = "inline";
            }
        },
        getFAQS() {
            axios.get(this.route("getApiFaqs")).then((res) => {
                this.faqs = res.data.data;
            });
        },
    },
});
</script>
<style>
#more {
    display: none;
}

.learn-more {
    width: 11rem;
}
</style>
