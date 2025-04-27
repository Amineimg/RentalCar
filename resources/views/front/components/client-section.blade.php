<!-- Why Choose Us -->

<section class="testimonial-section fix section-padding">
    <div class="testimonial-bg-shape">
        <img src="{{ asset('assets_v2/img/testimonial/testimonial-bg.jpg') }}" alt="shape-img">
    </div>
    <div class="container">
        <div class="section-title-area">
            <div class="section-title">
                <img src="{{ asset('assets_v2/img/sub-icon.png') }}" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">our testimonials</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    What They’re Talking <br>
                    About Majdline Travel
                </h2>
            </div>
            <p class="wow fadeInUp" data-wow-delay=".5s">
                Lorem ipsum dolor sit amet nsectetur cing elituspe ndisse suscipit <br> sagitis leo sit.
            </p>
        </div>
        <div class="swiper testimonial-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-card-items">
                        <div class="testimoni-bg-shape">
                            <div class="testimonial-items-top">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    I was very impresed by the Majdoline Travel service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                </p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="client-info-items d-flex align-items-center gap-3">
                            <div class="client-img bg-cover" ></div>
                            <div class="content">
                                <h5>
                                    Jessica Brown
                                </h5>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card-items">
                        <div class="testimoni-bg-shape">
                            <div class="testimonial-items-top">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    I was very impresed by the Majdoline Travel service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                </p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="client-info-items d-flex align-items-center gap-3">
                            <div class="client-img bg-cover" ></div>
                            <div class="content">
                                <h5>
                                    Kevin Martin
                                </h5>
                                <span>Customer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-card-items">
                        <div class="testimoni-bg-shape">
                            <div class="testimonial-items-top">
                                <div class="icon">
                                    <i class="fa-solid fa-quote-left"></i>
                                </div>
                                <p>
                                    I was very impresed by the Majdoline Travel service lorem ipsum is simply free text used by copy typing refreshing. Neque porro est qui dolorem ipsum quia.
                                </p>
                                <div class="star">
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                    <i class="fa-solid fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="client-info-items d-flex align-items-center gap-3">
                            <div class="client-img bg-cover" ></div>
                            <div class="content">
                                <h5>
                                    Jessica Brown
                                </h5>
                                <span>Customer</span>
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


<!-- /FAQ -->
<!-- Gallery Section Start -->



<!-- Blog Section -->
@if (isset($posts) && count($posts) > 0)

    <section class="news-section section-padding fix">
        <div class="container">
            <div class="section-title text-center">
                <img src="{{ asset('assets_v2/img/sub-icon.png') }}" alt="icon-img" class="wow fadeInUp">
                <span class="wow fadeInUp" data-wow-delay=".2s">{{ __('website.blogs_description') }}</span>
                <h2 class="wow fadeInUp" data-wow-delay=".4s">
                    {{ __('website.blogs_title') }}
                </h2>
            </div>
            <section class="news-section section-padding fix">
                <div class="container">
                    <div class="row g-4">
                        @forelse ($posts as $post)
                            <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                                <div class="news-card-items mt-0">
                                    <div class="news-image">
                                        <img src="{{ URL::asset($post->image) }}" alt="news-img">
                                        <div class="post-date">
                                            <h6>
                                                {{ \Carbon\Carbon::parse($post->created_at)->format('d') }} <br>
                                                {{ \Carbon\Carbon::parse($post->created_at)->format('M') }}
                                            </h6>
                                        </div>
                                    </div>
                                    <div class="news-content">
                                        <div class="post-client">
                                            {{-- <img src="{{ asset('assets/img/news/client.png') }}" alt="img"> --}}
                                        </div>
                                        <div class="news-cont">
                                            <span>by {{ $post->author_name ?? 'Admin' }}</span>
                                            <h3>
                                                <a href="{{ route('single-post', ['alias' => $post->alias]) }}">
                                                    {{ Helpers::getAttributeFromTranslate('title', 2, Helpers::getDefaultLanguage('id'), $post) }}
                                                </a>
                                            </h3>
                                            <p>
                                                {!! Str::limit(
                                                    Helpers::getAttributeFromTranslate('content', 2, Helpers::getDefaultLanguage('id'), $post),
                                                    150,
                                                    '...',
                                                ) !!}
                                            </p>
                                        </div>
                                        <ul>
                                            <li>
                                                <i class="fa-solid fa-comments"></i>
                                                {{ $post->comments_count ?? 2 }} Comments
                                            </li>
                                            <li>
                                                <a href="{{ route('single-post', ['alias' => $post->alias]) }}">
                                                    <i class="fa-solid fa-arrow-right-long"></i>
                                                    {{ __('website.read_more') }}
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <p class="text-center">{{ __('No posts available.') }}</p>
                        @endforelse
                    </div>

                    {{-- Pagination --}}

                </div>
            </section>
        </div>
    </section>
@endif



