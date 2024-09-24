@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <div class="pages">

        <div class="hero-pages">
            <div class="d-flex align-items-center justify-content-center flex-column sub-hero" data-aos="fade-up" data-aos-delay="100">
                <h1 class="display-3 fw-bold" data-aos="zoom-out">Our Services</h1>
                <p data-aos="fade-up" data-aos-delay="200">Web design and development services are our area of expertise at ONLINE CODEX.</p>
                <p data-aos="fade-up" data-aos-delay="300">Our team loves building stunning, user-friendly websites, and we have years of experience in the sector.</p>
                <p data-aos="fade-up" data-aos-delay="400">Some of the services we provide are as follows:</p>
            </div>
        </div>

        <section class="services-section-1 section-overlap-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card border-0 bg-transparent" data-aos="fade-up" data-aos-delay="300">
                            <img class="card-img" src="{{asset('./codex-assets/services/service-1.jpg')}}" alt="Web Development">
                            <div class="card-body">
                                <div class="content shadow-sm">
                                    <h5>Web Development</h5>
                                    <div class="d-flex justify-content-center my-4">
                                        <i class='bx bxl-html5 bx-lg'></i>
                                        <i class='bx bxl-javascript bx-lg'></i>
                                        <i class='bx bxl-wordpress bx-lg'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 bg-transparent" data-aos="fade-up" data-aos-delay="400">
                            <img class="card-img" src="{{asset('./codex-assets/services/service-2.jpg')}}" alt="Web Development">
                            <div class="card-body">
                                <div class="content shadow-sm">
                                    <h5>Web Design</h5>
                                    <div class="d-flex justify-content-center my-4">
                                        <i class='bx bxs-message-square-edit bx-lg'></i>
                                        <i class='bx bxs-color bx-lg'></i>
                                        <i class='bx bxl-figma bx-lg'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 bg-transparent" data-aos="fade-up" data-aos-delay="400">
                            <img class="card-img" src="{{asset('./codex-assets/services/service-3.jpg')}}" alt="Web Development">
                            <div class="card-body">
                                <div class="content shadow-sm">
                                    <h5>SEO</h5>
                                    <div class="d-flex justify-content-center my-4">
                                        <i class='bx bxl-google bx-lg'></i>
                                        <i class='bx bx-stats bx-lg'></i>
                                        <i class='bx bxs-calendar-star bx-lg'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="card border-0 bg-transparent" data-aos="fade-up" data-aos-delay="300">
                            <img class="card-img" src="{{asset('./codex-assets/services/service-4.jpg')}}" alt="Web Development">
                            <div class="card-body">
                                <div class="content shadow-sm">
                                    <h5>SMM</h5>
                                    <div class="d-flex justify-content-center my-4">
                                        <i class='bx bxl-facebook-circle bx-lg'></i>
                                        <i class='bx bxl-instagram bx-lg'></i>
                                        <i class='bx bxl-linkedin-square bx-lg'></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-primary my-4 pages-section-title">Web Development</h2>
                        <p>A website is built through a process called web development (A collection of Web Pages). Web design, content development, and coding are a few of the components that go into this process. Our staff has experience building websites, and we'll work hard to make sure your site lives up to your standards.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <h2 class="text-primary my-4 pages-section-title">Web Design</h2>
                        <p>The process of creating the structure and visual appeal of a website is called web design. Both beauty and utility are involved in this. As they collaborate with you, our web designers will create a site that best represents your brand and is optimized for different browsers and devices.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <h2 class="text-primary my-4 pages-section-title">Search Engine Optimization</h2>
                        <p>The practice of improving a website for search engines like Google and Bing is known as search engine optimization (SEO). A variety of tactics are used in SEO, such as keyword research, link building, content production, etc. We will collaborate with you to create a unique SEO strategy that will improve the visibility of your website and make sure that as many potential clients as possible can see it.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <h2 class="text-primary my-4 pages-section-title">Social Media Management</h2>
                        <p>The management of a company's presence on various social media platforms, such as Facebook, Twitter, Instagram, Snapchat, etc., is known as social media marketing. We have years of experience using social media marketing, and we are passionate about assisting our clients in utilizing these channels to expand their customer base. We'll collaborate with you to create a plan that will market your goods and services to your target market and raise brand awareness.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-section-3">
            <div class="container">
                <div class="text-center my-4">
                    <h5 class="section-title mb-3" data-aos="fade-up">Workflow</h5>
                    <h1 class="text-primary" data-aos="fade-up">Project Workflow</h1>
                </div>
                <div class="services">
                        <div class="services-row">
                            <div class="services-time" data-aos="fade-up">
                                <small>Progress 1</small>
                            </div>
                            <div class="services-content shadow-sm" data-aos="fade-right">
                                <h4>Onboarding</h4>
                                <p>We will go over the objectives, and set expectations, rules, and project milestones during the kickoff meeting. You'll be receiving access to all the designs and content folders through Google Drive for easy navigation and access. We will require you to provide access to all the applicable platforms for us to avoid any roadblocks during the making of the website.</p>
                                <div class="thumbs">
                                    <i class='bx bxs-right-down-arrow-circle bx-lg text-primary' ></i>
                                </div>
                            </div>
                        </div>
                
                        <div class="services-row">
                            <div class="services-time" data-aos="fade-up">
                                <small>Progress 2</small>
                            </div>
                            <div class="services-content shadow-sm" data-aos="fade-left">
                                <h4>Planning & Research</h4>
                                <p>Careful planning for the website includes developing wireframe and sitemap. The sitemap is a crucial component of planning because it will serve as the framework for your website. The sitemap gives the developer a general idea of how the website will be organized, what pages it will have, and how those pages will relate to one another. This is advantageous for both the planning process and the user experience.</p>
                                <div class="thumbs">
                                    <i class='bx bxs-left-down-arrow-circle bx-lg text-primary' ></i>
                                </div>
                            </div>
                        </div>
                
                        <div class="services-row">
                            <div class="services-time" data-aos="fade-up">
                                <small>Progress 3</small>
                            </div>
                            <div class="services-content shadow-sm" data-aos="fade-right">
                                <h4>Content Gathering & Creation</h4>
                                <p>A website needs to have strong content that will appeal to the target audience and perform well on search engines in addition to having an appealing look and functionality.</p>
                                <div class="thumbs">
                                    <i class='bx bxs-right-down-arrow-circle bx-lg text-primary' ></i>
                                </div>
                            </div>
                        </div>
                
                        <div class="services-row">
                            <div class="services-time" data-aos="fade-up">
                                <small>Progress 4</small>
                            </div>
                            <div class="services-content shadow-sm" data-aos="fade-left">
                                <h4>Design</h4>
                                <p>Making the design is a significant portion of the project. Wireframes of the design will be created by us in order to choose the website layout that will work best for your business. Once it has been approved, we will move on to building the mockup design, where we will use our combined expertise in UI and UX to further enhance the look and feel of the website.</p>
                                <div class="thumbs">
                                    <i class='bx bxs-left-down-arrow-circle bx-lg text-primary' ></i>
                                </div>
                            </div>
                        </div>

                        <div class="services-row">
                            <div class="services-time" data-aos="fade-up">
                            <small>Progress 5</small>
                            </div>
                            <div class="services-content shadow-sm" data-aos="fade-right">
                                <h4>Build - Development & Functionality</h4>
                                <p>The real website development process may start once the design has been approved and all the information is prepared for placement. Despite the client's minimal to nonexistent engagement at this point, it nevertheless consumes a sizable amount of the project's total duration.</p>
                                <div class="thumbs">
                                    <i class='bx bxs-right-down-arrow-circle bx-lg text-primary' ></i>
                                </div>
                            </div>
                        </div>

                        <div class="services-row">
                            <div class="services-time" data-aos="fade-up">
                                <small>Progress 6</small>
                            </div>
                            <div class="services-content shadow-sm" data-aos="fade-left">
                                <h4>Beta Testing</h4>
                                <p>Before going live, your website must undergo testing when all of its development is finished and it is completely functioning. The following goals should be attained throughout the beta testing period, which lasts between two and six weeks.</p>
                                <div class="thumbs">
                                    <i class='bx bxs-left-down-arrow-circle bx-lg text-primary' ></i>
                                </div>
                            </div>
                        </div>

                        <div class="services-row">
                            <div class="services-time" data-aos="fade-up">
                            <small>Progress 7</small>
                            </div>
                            <div class="services-content shadow-sm" data-aos="fade-right">
                                <h4>Launch</h4>
                                <p>The website is prepared for its formal launch after all beta testing criteria have been met. This huge accomplishment should be straightforward and quick, lasting no more than one day, since all of the testing and development work has already been completed. If the website is quite complicated and contains many different programs and components, it can take a little longer.</p>
                                <div class="thumbs">
                                    <i class='bx bxs-right-down-arrow-circle bx-lg text-primary' ></i>
                                </div>
                            </div>
                        </div>

                        <div class="services-row">
                            <div class="services-time" data-aos="fade-up">
                                <small>Progress 8</small>
                            </div>
                            <div class="services-content shadow-sm" data-aos="fade-left">
                                <h4>Maintenance Plan</h4>
                                <p>A successful website's development does not end with launch. The client has several options to improve the website by doing upkeep and offering updates. New material should be updated often to maintain relevancy in search engine results. Over time, a website may also gain from design changes that keep the site's look up to date with quickly evolving internet trends.</p>
                                <div class="thumbs">
                                    <i class='bx bxs-left-down-arrow-circle bx-lg text-primary' ></i>
                                </div>
                            </div>
                        </div>

                        <div class="services-row">
                            <div class="services-time" data-aos="fade-up">
                            <small>Progress 9</small>
                            </div>
                            <div class="services-content shadow-sm" data-aos="fade-right">
                                <h4>Website Turn Over</h4>
                                <p>These will be the final steps where we need to settle all the payments and fix any adjustments we need to do on the website before we can turn it over. You will have a ZIP file of the website, all the approved designs made for the website, and including the contents.</p>
                                <div class="thumbs">
                                    <i class='bx bxs-plane-take-off bx-lg text-primary'></i>
                                </div>
                            </div>
                        </div>
                
                    </div>
                </div>
        </section>
    </div>
@endsection