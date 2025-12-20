<?php 
$pageTitle = "FAQ Wireless Automation Solutions | FORBIX SEMICON® ";
$pageDescription = "FAQ on wireless nurse call, panic alarm, attendant call bell, token display, queue management soluitions, long range communicationa and many more.";
$additionalHeadTags = '
<link rel="canonical" href="https://www.forbixindia.com/faq.php" />
<meta property="og:url" content="https://www.forbixindia.com/faq.php" />
';
include __DIR__ . '/includes/header.php'; 
?>

<link rel="stylesheet" href="assets/css/support.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<script defer src="assets/js/support.js"></script>

<main>
    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-background"></div>
        <div class="container">
            <div class="hero-content">
                <div style="font-size: 4rem; margin-bottom: 1rem;">
                    <span class="material-icons" style="font-size: inherit; color: var(--primary);">help_outline</span>
                </div>
                <h1>FAQ & Technical Support</h1>
                <p class="hero-subtitle">
                    Find answers to common questions about our wireless electronic automation systems and services
                </p>
                <div class="flex flex-center gap-2" style="margin-top: 2rem;">
                    <span class="btn btn-primary">
                        <span class="material-icons">support</span>
                        Expert Support Available
                    </span>
                </div>
            </div>
        </div>
    </section>

    <div class="container">

        <!-- FAQ Accordion -->
        <section class="section">
            <h2 class="text-center mb-4">
                <span class="material-icons" style="color: var(--primary); vertical-align: middle; margin-right: 0.5rem;">quiz</span>
                Frequently Asked Questions
            </h2>
            
            <div class="grid grid-3 gap-3">
                <!-- Company Formation -->
                <div class="card shadow-lg border" style="border-color: var(--primary); transition: all 0.3s ease; border-width: 2px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #1e3a8a) 100%); color: white; cursor: pointer; padding: 1.25rem; border-radius: 0.5rem 0.5rem 0 0;" onclick="toggleAccordion('faq-1')">
                        <div class="flex flex-between flex-center">
                            <div class="flex flex-center gap-2">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                    <span class="material-icons" style="font-size: 1.25rem; color: white;">business</span>
                                </div>
                                <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem; font-weight: 600; letter-spacing: 0.025em;">
                                    When was the company formed?
                                </h3>
                            </div>
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.25rem; display: flex; align-items: center; justify-content: center;">
                                <span class="material-icons" id="icon-faq-1" style="transition: transform 0.3s ease; color: white; font-size: 1.5rem;">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content" id="faq-1" style="display: none; padding-top: 0;">
                        <div class="mt-3">
                            <div class="flex gap-2 mb-3">
                                <span class="material-icons" style="color: var(--success); margin-top: 0.25rem;">timeline</span>
                                <p>Established in <strong style="color: var(--primary);">2009</strong> as FORBIX SEMICON, we began our journey with a passion for innovation and a commitment to excellence. In our early days, our dedicated team of designers played a pivotal role in creating prototypes and sample units for various products, laying the foundation for our expertise in design and development.</p>
                            </div>
                            <div class="flex gap-2 mb-3">
                                <span class="material-icons" style="color: var(--primary); margin-top: 0.25rem;">trending_up</span>
                                <p>Through relentless effort and a focus on quality, we achieved a significant milestone in <strong style="color: var(--primary);">2016</strong> by acquiring a significant number of customers, marking a new chapter in our growth story. The following year, in <strong style="color: var(--primary);">2017</strong>, we evolved into FORBIX SEMICON INDIA PVT LTD, reflecting our expanded capabilities and vision for the future.</p>
                            </div>
                            <div class="flex gap-2">
                                <span class="material-icons" style="color: var(--accent); margin-top: 0.25rem;">transform</span>
                                <p>In <strong style="color: var(--primary);">2022</strong>, we underwent a transformation phase with changes in leadership, the introduction of a new design and production team, and the formation of a new entity, <strong>FORBIX SEMICON TECHNOLOGIES PVT LTD</strong>, following a technology transfer. This restructuring has enabled us to embrace cutting-edge technologies, enhance our product offerings, and strengthen our position as a leader in the industry.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Products and Customers -->
                <div class="card shadow-lg border" style="border-color: var(--primary); transition: all 0.3s ease; border-width: 2px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #1e3a8a) 100%); color: white; cursor: pointer; padding: 1.25rem; border-radius: 0.5rem 0.5rem 0 0;" onclick="toggleAccordion('faq-2')">
                        <div class="flex flex-between flex-center">
                            <div class="flex flex-center gap-2">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                    <span class="material-icons" style="font-size: 1.25rem; color: white;">inventory</span>
                                </div>
                                <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem; font-weight: 600; letter-spacing: 0.025em;">
                                    What products you make and who are your customers?
                                </h3>
                            </div>
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.25rem; display: flex; align-items: center; justify-content: center;">
                                <span class="material-icons" id="icon-faq-2" style="transition: transform 0.3s ease; color: white; font-size: 1.5rem;">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content" id="faq-2" style="display: none; padding-top: 0;">
                        <div class="mt-3">
                            <p style="font-size: 1.125rem; margin-bottom: 1.5rem;">We design and manufacture a wide range of innovative products tailored to meet diverse needs across industries. Our solutions include:</p>
                            <div class="grid grid-2 gap-2">
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--primary);">local_hospital</span>
                                    <span><strong>Nurse Call Systems</strong> for hospitals</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--primary);">confirmation_number</span>
                                    <span><strong>Token Display & Queue Management</strong> for banks, dispensaries</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--error);">crisis_alert</span>
                                    <span><strong>Panic Alarm Systems</strong> for offices, commercial buildings</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--warning);">wifi_tethering</span>
                                    <span><strong>Long-Range Alarm Systems</strong> for defence, airports</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--accent);">notifications</span>
                                    <span><strong>Peon Call Bells</strong> for offices, restaurants</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--secondary);">precision_manufacturing</span>
                                    <span><strong>Industrial Automation</strong> wireless solutions</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--success);">air</span>
                                    <span><strong>Air Quality Monitors</strong> for indoor monitoring</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--primary);">water_drop</span>
                                    <span><strong>Wireless Pump Controllers</strong> for irrigation</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--warning);">traffic</span>
                                    <span><strong>Wireless Traffic Light</strong> for junctions, railways</span>
                                </div>
                            </div>
                            <div class="card mt-3" style="background-color: var(--success-light); border-color: var(--success);">
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--success);">groups</span>
                                    <p style="margin: 0;"><strong>Global Reach:</strong> Our products cater to a global customer base, with over <strong>50,000+</strong> satisfied customers worldwide.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wireless Benefits -->
                <div class="card shadow-lg border" style="border-color: var(--secondary); transition: all 0.3s ease; border-width: 2px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #374151) 100%); color: white; cursor: pointer; padding: 1.25rem; border-radius: 0.5rem 0.5rem 0 0;" onclick="toggleAccordion('faq-3')">
                        <div class="flex flex-between flex-center">
                            <div class="flex flex-center gap-2">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                    <span class="material-icons" style="font-size: 1.25rem; color: white;">wifi</span>
                                </div>
                                <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem; font-weight: 600; letter-spacing: 0.025em;">
                                    Benefits of Wireless solution over its wired counterparts?
                                </h3>
                            </div>
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.25rem; display: flex; align-items: center; justify-content: center;">
                                <span class="material-icons" id="icon-faq-3" style="transition: transform 0.3s ease; color: white; font-size: 1.5rem;">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content" id="faq-3" style="display: none; padding-top: 0;">
                        <div class="mt-3">
                            <div class="grid grid-2 gap-3">
                                <div class="card border" style="border-color: var(--success);">
                                    <div class="card-header" style="background-color: var(--success); color: white;">
                                        <h4 style="color: white; margin: 0;">
                                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">construction</span>
                                            Installation Benefits
                                        </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="grid gap-1">
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">check</span><span>No wiring required</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">check</span><span>No complex installation</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">check</span><span>No need to analyze floor plans</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">check</span><span>Quick and easy setup</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border" style="border-color: var(--primary);">
                                    <div class="card-header" style="background-color: var(--primary); color: white;">
                                        <h4 style="color: white; margin: 0;">
                                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">schedule</span>
                                            Long-term Benefits
                                        </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="grid gap-1">
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--primary);">check</span><span>No future maintenance</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--primary);">check</span><span>Modular and scalable</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--primary);">check</span><span>Cost-effective solution</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--primary);">check</span><span>Aesthetic appeal</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border" style="border-color: var(--warning);">
                                    <div class="card-header" style="background-color: var(--warning); color: white;">
                                        <h4 style="color: white; margin: 0;">
                                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">settings</span>
                                            Operational Benefits
                                        </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="grid gap-1">
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--warning);">check</span><span>Portability and flexibility</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--warning);">check</span><span>Future-proof technology</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--warning);">check</span><span>Easy expansion capability</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--warning);">check</span><span>Reduced downtime</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border" style="border-color: var(--accent);">
                                    <div class="card-header" style="background-color: var(--accent); color: white;">
                                        <h4 style="color: white; margin: 0;">
                                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">eco</span>
                                            Environmental Benefits
                                        </h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="grid gap-1">
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--accent);">check</span><span>Eco-friendly approach</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--accent);">check</span><span>Minimal material waste</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--accent);">check</span><span>Reduced environmental impact</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--accent);">check</span><span>Sustainable technology</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Overseas Shipping -->
                <div class="card shadow-lg border" style="border-color: var(--primary); transition: all 0.3s ease; border-width: 2px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #1e3a8a) 100%); color: white; cursor: pointer; padding: 1.25rem; border-radius: 0.5rem 0.5rem 0 0;" onclick="toggleAccordion('faq-4')">
                        <div class="flex flex-between flex-center">
                            <div class="flex flex-center gap-2">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                    <span class="material-icons" style="font-size: 1.25rem; color: white;">public</span>
                                </div>
                                <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem; font-weight: 600; letter-spacing: 0.025em;">
                                    Do you ship to overseas addresses?
                                </h3>
                            </div>
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.25rem; display: flex; align-items: center; justify-content: center;">
                                <span class="material-icons" id="icon-faq-4" style="transition: transform 0.3s ease; color: white; font-size: 1.5rem;">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content" id="faq-4" style="display: none; padding-top: 0;">
                        <div class="mt-3">
                            <div class="flex gap-2 mb-3">
                                <span class="material-icons" style="color: var(--success); margin-top: 0.25rem;">flight_takeoff</span>
                                <p>Yes, we ship worldwide to any address that can accept deliveries. We have partnered with leading international courier services including <strong>DHL, FedEx, and Aramex</strong> to ensure reliable global delivery.</p>
                            </div>
                            <div class="card" style="background-color: var(--primary-light); border-color: var(--primary);">
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--primary);">verified</span>
                                    <p style="margin: 0;">As a matter of fact, we regularly supply to over <strong>20,000+</strong> customers worldwide, making us a trusted global supplier of wireless electronic solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- After Sale Service -->
                <div class="card shadow-lg border" style="border-color: var(--secondary); transition: all 0.3s ease; border-width: 2px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #374151) 100%); color: white; cursor: pointer; padding: 1.25rem; border-radius: 0.5rem 0.5rem 0 0;" onclick="toggleAccordion('faq-5')">
                        <div class="flex flex-between flex-center">
                            <div class="flex flex-center gap-2">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                    <span class="material-icons" style="font-size: 1.25rem; color: white;">support_agent</span>
                                </div>
                                <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem; font-weight: 600; letter-spacing: 0.025em;">
                                    Do you have after sale service?
                                </h3>
                            </div>
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.25rem; display: flex; align-items: center; justify-content: center;">
                                <span class="material-icons" id="icon-faq-5" style="transition: transform 0.3s ease; color: white; font-size: 1.5rem;">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content" id="faq-5" style="display: none; padding-top: 0;">
                        <div class="mt-3">
                            <p style="font-size: 1.125rem; margin-bottom: 1.5rem;">Yes, we provide comprehensive after-sales service and support:</p>
                            <div class="grid gap-2">
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">verified</span><span>We stand by the devices we supply, even beyond the warranty period</span></div>
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">factory</span><span>All our products are manufactured at our facility in Bangalore</span></div>
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">local_shipping</span><span>In case of any issues, you can send non-functioning devices to our office address</span></div>
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">build</span><span>Our team will rectify or replace damaged parts/components as per warranty terms</span></div>
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">security</span><span>We take full responsibility for the devices we manufacture</span></div>
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">thumb_up</span><span>Committed to ensuring your complete satisfaction</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Warranty Terms -->
                <div class="card shadow-lg border" style="border-color: var(--primary); transition: all 0.3s ease; border-width: 2px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #1e3a8a) 100%); color: white; cursor: pointer; padding: 1.25rem; border-radius: 0.5rem 0.5rem 0 0;" onclick="toggleAccordion('faq-6')">
                        <div class="flex flex-between flex-center">
                            <div class="flex flex-center gap-2">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                    <span class="material-icons" style="font-size: 1.25rem; color: white;">gpp_good</span>
                                </div>
                                <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem; font-weight: 600; letter-spacing: 0.025em;">
                                    What's your warranty terms and return policy?
                                </h3>
                            </div>
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.25rem; display: flex; align-items: center; justify-content: center;">
                                <span class="material-icons" id="icon-faq-6" style="transition: transform 0.3s ease; color: white; font-size: 1.5rem;">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content" id="faq-6" style="display: none; padding-top: 0;">
                        <div class="mt-3">
                            <div class="card" style="background-color: var(--success-light); border-color: var(--success); margin-bottom: 1rem;">
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--success);">schedule</span>
                                    <p style="margin: 0;">Warranty for all our devices is <strong style="color: var(--primary);">1 year (365 days)</strong> from the date the invoice is generated from our factory.</p>
                                </div>
                            </div>
                            <div class="flex gap-2">
                                <span class="material-icons" style="color: var(--primary); margin-top: 0.25rem;">description</span>
                                <p>For detailed warranty terms and conditions, please refer to our comprehensive warranty document available on our website.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Signal Range -->
                <div class="card shadow-lg border" style="border-color: var(--secondary); transition: all 0.3s ease; border-width: 2px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #374151) 100%); color: white; cursor: pointer; padding: 1.25rem; border-radius: 0.5rem 0.5rem 0 0;" onclick="toggleAccordion('faq-7')">
                        <div class="flex flex-between flex-center">
                            <div class="flex flex-center gap-2">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                    <span class="material-icons" style="font-size: 1.25rem; color: white;">wifi_tethering</span>
                                </div>
                                <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem; font-weight: 600; letter-spacing: 0.025em;">
                                    What is the signal range of the devices?
                                </h3>
                            </div>
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.25rem; display: flex; align-items: center; justify-content: center;">
                                <span class="material-icons" id="icon-faq-7" style="transition: transform 0.3s ease; color: white; font-size: 1.5rem;">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content" id="faq-7" style="display: none; padding-top: 0;">
                        <div class="mt-3">
                            <p style="font-size: 1.125rem; margin-bottom: 1.5rem;">We manufacture two main types of radio devices:</p>
                            <div class="grid grid-2 gap-3">
                                <div class="card border" style="border-color: var(--primary);">
                                    <div class="card-header" style="background-color: var(--primary); color: white;">
                                        <h4 style="color: white; margin: 0;">5xx Series</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="grid gap-1">
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--primary);">home</span><span>30-40 meters indoors</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--primary);">landscape</span><span>Over 200 meters outdoors</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--primary);">visibility</span><span>Line of sight operation</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card border" style="border-color: var(--success);">
                                    <div class="card-header" style="background-color: var(--success); color: white;">
                                        <h4 style="color: white; margin: 0;">7xx Series</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="grid gap-1">
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">location_city</span><span>2-3 Kms in urban areas</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">terrain</span><span>Over 6-8 Km in open fields</span></div>
                                            <div class="flex gap-2"><span class="material-icons" style="color: var(--success);">explore</span><span>Desert and terrain coverage</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Range Enhancement -->
                <div class="card shadow-lg border" style="border-color: var(--primary); transition: all 0.3s ease; border-width: 2px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #1e3a8a) 100%); color: white; cursor: pointer; padding: 1.25rem; border-radius: 0.5rem 0.5rem 0 0;" onclick="toggleAccordion('faq-8')">
                        <div class="flex flex-between flex-center">
                            <div class="flex flex-center gap-2">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                    <span class="material-icons" style="font-size: 1.25rem; color: white;">signal_cellular_4_bar</span>
                                </div>
                                <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem; font-weight: 600; letter-spacing: 0.025em;">
                                    Can we increase the range of communication?
                                </h3>
                            </div>
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.25rem; display: flex; align-items: center; justify-content: center;">
                                <span class="material-icons" id="icon-faq-8" style="transition: transform 0.3s ease; color: white; font-size: 1.5rem;">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content" id="faq-8" style="display: none; padding-top: 0;">
                        <div class="mt-3">
                            <div class="flex gap-2 mb-3">
                                <span class="material-icons" style="color: var(--success); margin-top: 0.25rem;">repeat</span>
                                <p>Yes, it is possible to increase the signal range using signal boosters and range enhancer repeaters. With these repeaters deployed, signal range can be increased many folds.</p>
                            </div>
                            <p><strong>Key features of range enhancement:</strong></p>
                            <div class="grid gap-2">
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--accent);">hub</span><span>Multiple repeaters can be used in a network</span></div>
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--accent);">apartment</span><span>Covers complex multi-floor huge buildings</span></div>
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--accent);">settings_input_antenna</span><span>Available in both 5xx and 7xx series</span></div>
                                <div class="flex gap-2"><span class="material-icons" style="color: var(--accent);">height</span><span>For 7xx series, mount transmitter and antenna at maximum height</span></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Residential Solutions -->
                <div class="card shadow-lg border" style="border-color: var(--secondary); transition: all 0.3s ease; border-width: 2px;" onmouseover="this.style.transform='translateY(-2px)'; this.style.boxShadow='0 8px 25px rgba(0,0,0,0.15)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow=''">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #374151) 100%); color: white; cursor: pointer; padding: 1.25rem; border-radius: 0.5rem 0.5rem 0 0;" onclick="toggleAccordion('faq-9')">
                        <div class="flex flex-between flex-center">
                            <div class="flex flex-center gap-2">
                                <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.5rem; display: flex; align-items: center; justify-content: center;">
                                    <span class="material-icons" style="font-size: 1.25rem; color: white;">home</span>
                                </div>
                                <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem; font-weight: 600; letter-spacing: 0.025em;">
                                    My requirement is for residence. Any product?
                                </h3>
                            </div>
                            <div style="background: rgba(255,255,255,0.2); border-radius: 50%; padding: 0.25rem; display: flex; align-items: center; justify-content: center;">
                                <span class="material-icons" id="icon-faq-9" style="transition: transform 0.3s ease; color: white; font-size: 1.5rem;">expand_more</span>
                            </div>
                        </div>
                    </div>
                    <div class="card-content" id="faq-9" style="display: none; padding-top: 0;">
                        <div class="mt-3">
                            <p style="font-size: 1.125rem; margin-bottom: 1.5rem;">Yes, we have residential solutions for various needs:</p>
                            <div class="grid gap-2">
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--primary);">elderly</span>
                                    <span><strong>1-2 remote calling system</strong> for elderly people</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--success);">villa</span>
                                    <span><strong>5-6 button call bell</strong> for mansions, villas, houses, and pantries</span>
                                </div>
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--warning);">security</span>
                                    <span><strong>8-10 call alert system</strong> for apartment security</span>
                                </div>
                            </div>
                            <div class="card mt-3" style="background-color: var(--accent-light); border-color: var(--accent);">
                                <div class="flex gap-2">
                                    <span class="material-icons" style="color: var(--accent);">tune</span>
                                    <p style="margin: 0;">We also have lower capacity solutions for <strong>1-9 remotes</strong>, perfect for smaller residential applications.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section class="section text-center">
            <h2 style="color: var(--primary); margin-bottom: 1rem;">
                <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">contact_support</span>
                Have More Questions?
            </h2>
            <p style="font-size: 1.125rem; margin-bottom: 2rem;">
                Can't find the answer you're looking for? Our technical team is here to help.
            </p>
            <div class="mb-4">
                <a href="contact.php" class="btn btn-primary" style="font-size: 1.125rem; padding: 1rem 2rem;">
                    <span class="material-icons">email</span>
                    Contact Our Technical Team
                </a>
            </div>
            <div class="card" style="background-color: var(--success-light); border-color: var(--success);">
                <div class="flex flex-center gap-2">
                    <span class="material-icons" style="color: var(--success);">schedule</span>
                    <span>Expert support available - we're here to help with all your wireless automation needs</span>
                </div>
            </div>
        </section>
    </div>
</main>

<script>
// Accordion functionality for FAQ
function toggleAccordion(faqId) {
    const content = document.getElementById(faqId);
    const icon = document.getElementById('icon-' + faqId);
    
    if (content.style.display === 'none' || content.style.display === '') {
        content.style.display = 'block';
        icon.style.transform = 'rotate(180deg)';
    } else {
        content.style.display = 'none';
        icon.style.transform = 'rotate(0deg)';
    }
}

// Optional: Close other accordions when one is opened (accordion behavior)
function toggleAccordionExclusive(faqId) {
    // Close all other accordions
    for (let i = 1; i <= 9; i++) {
        const otherId = 'faq-' + i;
        const otherIcon = 'icon-faq-' + i;
        
        if (otherId !== faqId) {
            const otherContent = document.getElementById(otherId);
            const otherIconEl = document.getElementById(otherIcon);
            if (otherContent) {
                otherContent.style.display = 'none';
                if (otherIconEl) otherIconEl.style.transform = 'rotate(0deg)';
            }
        }
    }
    
    // Toggle the clicked one
    toggleAccordion(faqId);
}
</script>

<?php include __DIR__ . '/includes/footer.php'; ?>