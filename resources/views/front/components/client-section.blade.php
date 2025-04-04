<!-- Why Choose Us -->
<section class="section why-choose popular-explore">
    <div class="choose-left">
        <img src="{{ URL::asset('/front/build/img/bg/choose-left.png') }}" class="img-fluid" alt="Why Choose Us">
    </div>
    <div class="container">
        <!-- Heading title-->
        <div class="row">
            <div class="col-lg-4 mx-auto">
                <div class="section-heading" data-aos="fade-down">
                    <h2>Why Choose Us</h2>
                    <p>We are innovative and passionate about the work we do. </p>
                </div>
            </div>
        </div>
        <!-- /Heading title -->
        <div class="why-choose-group">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-black">
                                <img src="{{ URL::asset('/front/build/img/icons/bx-selection.svg') }}" alt="Icon">
                            </div>
                            <div class="choose-content">
                                <h4>{{ __('website.why_choose_us_title_step_1') }}</h4>
                                <p>{{ __('website.why_choose_us_description_step_1') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-secondary">
                                <img src="{{ URL::asset('/front/build/img/icons/bx-crown.svg') }}" alt="Icon">
                            </div>
                            <div class="choose-content">
                                <h4>{{ __('website.why_choose_us_title_step_2') }}</h4>
                                <p>{{ __('website.why_choose_us_description_step_2') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12 d-flex" data-aos="fade-down">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="choose-img choose-primary">
                                <img src="{{ URL::asset('/front/build/img/icons/bx-user-check.svg') }}" alt="Icon">
                            </div>
                            <div class="choose-content">
                                <h4>{{ __('website.why_choose_us_title_step_3') }}</h4>
                                <p>{{ __('website.why_choose_us_description_step_3') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Why Choose Us -->

<!-- About us Testimonials -->
{{-- <section class="section about-testimonial testimonials-section">
    <div class="container">
        <!-- Heading title-->
        <div class="section-heading" data-aos="fade-down">
            <h2 class="title text-white">{{ __('website.reviews_title') }}</h2>
            <p class="description text-white">{{ __('website.reviews_description') }}</p>
        </div>
        <!-- /Heading title -->
        <div class="owl-carousel about-testimonials testimonial-group mb-0 owl-theme">
            @forelse (__("website.reviews") as $review)
                <!-- Carousel Item -->
                <div class="testimonial-item d-flex">
                    <div class="card flex-fill">
                        <div class="card-body">
                            <div class="quotes-head"></div>
                            <div class="review-box">
                                <div class="review-profile">
                                    <div class="review-img">
                                        <img src="{{ URL::asset('/front/build/img/profiles/avatar-02.jpg') }}"
                                            class="img-fluid" alt="img">
                                    </div>
                                </div>
                                <div class="review-details">
                                    <h6>{{ isset($review['name']) ? $review['name'] : '' }}</h6>
                                    <p>{{ isset($review['from_where']) ? $review['from_where'] : '' }}</p>
                                </div>
                            </div>
                            <p>{{ isset($review['description']) ? $review['description'] : '' }}</p>
                            <div class="list-rating">
                                <div class="list-rating-star">
                                    <i class="fas fa-star filled"></i>
                                    @for ($i = 1; $i <= $review['rating'] ?? 5; $i++)
                                        <i class="fas fa-star filled"></i>
                                    @endfor

                                </div>
                                <p><span>({{ $review['rating'] ?? 5 }}.0)</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /Carousel Item  -->
            @empty

            @endforelse


        </div>
    </div>
</section> --}}
<!-- About us Testimonials -->

<!-- FAQ  -->
<section id="faq_section" class="section faq-section bg-light-primary">
    <div class="container">
        <!-- Heading title-->
        <div class="section-heading" data-aos="fade-down">
            <h2>{{ __('website.faq_title') }}</h2>
            <p>{{ __('website.faq_description') }}</p>
        </div>
        <!-- /Heading title -->
        <div class="faq-info">
            @forelse (__("website.faqs") as $key => $faq)
                <div class="faq-card bg-white" data-aos="fade-down">
                    <h4 class="faq-title">
                        <a class="collapseds" data-bs-toggle="collapse" href="#faq_{{ $key }}"
                            aria-expanded="true">{{ $faq['question'] ?? '' }}</a>
                    </h4>
                    <div id="faq_{{ $key }}" class="card-collapse collapse show">
                        <p>{{ $faq['answer'] ?? '' }}</p>
                    </div>
                </div>
            @empty
            @endforelse


        </div>
    </div>
</section>
<!-- /FAQ -->




<!-- Blog Section -->
@if (isset($posts) && count($posts) > 0)
    <section class="blog-section news-section pt-0">
        <div class="container">
            <!-- Heading title-->
            <div class="section-heading" data-aos="fade-down">
                <h2>{{ __('website.blogs_title') }}</h2>
                <p>{{ __('website.blogs_description') }}</p>
            </div>
            <!-- /Heading title -->

            <div class="row">

                @forelse ($posts as $post)
                    <div class="col-lg-4 col-md-6 d-lg-flex">
                        <div class="blog grid-blog">
                            <div class="blog-image">
                                <a href="{{ route('single-post', ['alias' => $post->alias]) }}"><img class="img-fluid"
                                        src="{{ url('/') . $post->image }}" alt="Post Image"></a>
                            </div>
                            <div class="blog-content">
                                {{-- <p class="blog-category">
                                    <a href="javascript:void(0)"><span>Updates</span></a>
                                </p> --}}
                                <h3 class="blog-title"><a
                                        href="{{ route('single-post', ['alias' => $post->alias]) }}">{{ $post->contentload ? $post->contentload->title : '' }}</a>
                                </h3>
                                <p class="blog-description"> {!! Str::limit($post->contentload ? $post->contentload->content : '', 120, '...') !!}</p>
                                <ul class="meta-item mb-0">
                                    <li>
                                        <div class="post-author">
                                            <div class="post-author-img">
                                                {{-- <img src="{{ URL::asset('/front/build/img/profiles/avatar-13.jpg') }}"
                                                    alt="author"> --}}
                                            </div>
                                            <a href="javascript:void(0)"> <span> {{ $post->user->username }}
                                                </span></a>
                                        </div>
                                    </li>
                                    <li class="date-icon"><i class="fa-solid fa-calendar-days"></i>
                                        <span>{{ Carbon::parse($post->created_at)->Format('Y-m-d') }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @empty
                @endforelse

            </div>
            <div class="view-all text-center aos-init aos-animate" data-aos="fade-down">
                <a href="{{ route('blogs') }}"
                    class="btn btn-view d-inline-flex align-items-center">{{ __('website.show_all') }}
                    <span><i class="feather-arrow-right ms-2"></i></span></a>
            </div>

        </div>
    </section>
@endif

<!-- /Blog Section -->
