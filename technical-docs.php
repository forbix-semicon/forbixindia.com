<?php 
$pageTitle = "Technical Documentation & Product Manuals | FORBIX SEMICON®";
$pageDescription = "Comprehensive technical documentation, product specifications, wiring diagrams, datasheets and installation manuals for FORBIX SEMICON wireless products. Download PDFs, wiring diagrams and certification details for nurse call, panic alarm, token display and long-range systems.";
$additionalHeadTags = '
    <link rel="canonical" href="https://www.forbixindia.com/technical-docs.php" />
    <meta property="og:url" content="https://www.forbixindia.com/technical-docs.php" />
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
                    <span class="material-icons" style="font-size: inherit; color: var(--primary);">description</span>
                </div>
                <h1>Technical Documentation & Product Manuals</h1>
                <p class="hero-subtitle">
                    Comprehensive technical documentation, specifications, and datasheets for all our wireless electronic products. 
                    Access detailed information to help you understand and implement our solutions effectively.
                </p>
            </div>
        </div>
    </section>

    <div class="container">
        <!-- Quick Access Categories -->
        <section class="section">
            <h2 class="text-center mb-4">
                <span class="material-icons" style="color: var(--primary); vertical-align: middle; margin-right: 0.5rem;">folder_open</span>
                Document Categories
            </h2>
            
            <div class="grid grid-2 gap-4 mb-6">
                <!-- Product Catalog Section -->
                <div class="card shadow-lg border" style="border-color: var(--primary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #1e3a8a) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">menu_book</span>
                            Product Catalogs
                        </h3>
                    </div>
                    <div class="card-content">
                        <div class="grid gap-2">
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Product Brochure and Catalog</span></span>
                                <a href="/docs/Product-brochure.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Brochure 2024</span></span>
                                <a href="/docs/Brochure-2024-FORBIX-SEMICON.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Call Bell Catalog</span></span>
                                <a href="/docs/Catalog-wireless-call-bell-FORBIX-SEMICON.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Air Quality Monitors Catalog</span></span>
                                <a href="/docs/Catalog-Air-Quality-Monitors.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Alarm Systems Catalog</span></span>
                                <a href="/docs/Catalog-Wireless-Alarm-Systems.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Panic Alarm System Catalog</span></span>
                                <a href="/docs/catalog-panic-alarm-system.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Motor Controller Catalog</span></span>
                                <a href="/docs/catalog-motor-controller.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Calling System Catalog</span></span>
                                <a href="/docs/catalog-wireless-calling-system.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Calling Systems - Full</span></span>
                                <a href="/docs/Catalog-Wireless-Calling-Systems.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Peon Calling System Catalog</span></span>
                                <a href="/docs/catalog-wireless-peon-calling-system.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Water Pump Controllers Catalog</span></span>
                                <a href="/docs/Water-Pump_controllers-FORBIX-SEMICON.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--primary); font-size: 1rem;">picture_as_pdf</span><span>Wireless Panic Alarm Catalog</span></span>
                                <a href="/docs/Product-catalog-wireless-panic-alarm.pdf" target="_blank" class="btn btn-sm btn-primary"><span class="material-icons">download</span></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Policy & Warranty Section -->
                <div class="card shadow-lg border" style="border-color: var(--secondary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #374151) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">gavel</span>
                            Policy & Warranty
                        </h3>
                    </div>
                    <div class="card-content">
                        <div class="grid gap-2">
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">eco</span><span>Paperless goGREEN Policy</span></span>
                                <a href="/docs/Paperless-goGreen-Policy.pdf" target="_blank" class="btn btn-sm btn-secondary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">verified</span><span>Declaration of Conformity-1</span></span>
                                <a href="/docs/Declaration-of-Conformity-1.pdf" target="_blank" class="btn btn-sm btn-secondary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">verified</span><span>Declaration of Conformity-2</span></span>
                                <a href="/docs/Declaration-of-Conformity-2.pdf" target="_blank" class="btn btn-sm btn-secondary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between border-b" style="border-color: var(--border); padding-bottom: 0.5rem;">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">gpp_good</span><span>Warranty Terms</span></span>
                                <a href="/docs/WarrantyTerms.pdf" target="_blank" class="btn btn-sm btn-secondary"><span class="material-icons">download</span></a>
                            </div>
                            <div class="flex flex-between">
                                <span class="flex gap-2"><span class="material-icons" style="color: var(--secondary); font-size: 1rem;">assignment</span><span>Vendor Registration Form</span></span>
                                <a href="/docs/Vendor-registration-form.pdf" target="_blank" class="btn btn-sm btn-secondary"><span class="material-icons">download</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Product Categories -->
        <section class="section">
            <h2 class="text-center mb-4">
                <span class="material-icons" style="color: var(--primary); vertical-align: middle; margin-right: 0.5rem;">category</span>
                Product Documentation Categories
            </h2>
            
            <div class="grid grid-3 gap-6 mb-8">
                <!-- Nurse Call Systems -->
                <div class="card shadow-lg border" style="border-color: var(--primary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #1e3a8a) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">local_hospital</span>
                            Nurse Call Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Technical Doc - Wireless Nurse Calling System</span>
                                <a href="/docs/Technical-Doc-Wireless-Nurse-Calling-System.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Wireless Nurse Call System Solutions</span>
                                <a href="/docs/Wireless-Nurse-Call-System-Solutions-FORBIX-SEMICON.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>WNCS LCD Monitor</span>
                                <a href="/docs/WNCS-LCD-Monitor.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX521 - Patient Call Button Remote</span>
                                <a href="/docs/FBX521-spec-remote-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX525 - Patient Call Bell (discontinued)</span>
                                <a href="/docs/FBX525-spec-patient-call-bell.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX528 - Wall Mount Pull Chord (IP65)</span>
                                <a href="/docs/FBX528-wall-mount-pull-chord-IP65.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX545 - Wall Mount Call Button (IP65)</span>
                                <a href="/docs/FBX545-wall-mount-call-button-IP65.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX528A - Wall Mount Pull Chord</span>
                                <a href="/docs/FBX528A-wall-mount-pull-chord.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSL02A - 2-digit Nurse Station</span>
                                <a href="/docs/FBXCSL02A-spec-nurse-station-2-digit.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSL03A - 3-digit Nurse Station</span>
                                <a href="/docs/FBXCSL03A-spec-nurse-station-3-digit.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSL04A - 4-digit Nurse Station</span>
                                <a href="/docs/FBXCSL04A-spec-nurse-station-4-digit.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSI20A - 20-indicator Nurse Station</span>
                                <a href="/docs/FBXCSI20-20-indicator-receiver.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCI20 - 20-indicator Wired</span>
                                <a href="/docs/FBXCI20-20-indicator-wired.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX623 - Wall Mount Call Button (IP65)</span>
                                <a href="/docs/FBX623-wall-mount-call-button.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXRM01/02/03/04 - Room Indicator Module</span>
                                <a href="/docs/FBXRM01-02-03-04-room-module-indicator.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXDM01 - Door Indicator Module</span>
                                <a href="/docs/FBXDM01-spec-door-indicator-module.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXDM01 - Door Indicator Module (Alt)</span>
                                <a href="/docs/FBXDM01-spec-door-indicator-module..pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCB01 - Code Blue Revolving Light</span>
                                <a href="/docs/FBXCB01-code-blue-revolving-light.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCM30 - Corridor Module</span>
                                <a href="/docs/FBXCM30-corridor-module-indicator.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXDL04 - Datalogger Receiver</span>
                                <a href="/docs/FBXDL04-data-logger.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSRPT01-02 - Repeater Booster</span>
                                <a href="/docs/FBXCSRPT01-02-spec-repeater-booster.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSRPT01C - Repeater Booster IP65</span>
                                <a href="/docs/FBXCSRPT01C-spec-repeater-booster.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXRR01R5 - 1-port Wireless Relay Receiver</span>
                                <a href="/docs/FBXRR01R5-1-port-wireless-relay-receiver.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXRM01 - Room Indicator Module Spec</span>
                                <a href="/docs/FBXRM01-spec-room-indicator-module.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWCCS02 - Single Caller 3 Attendant</span>
                                <a href="/docs/FBXWCCS02-single-caller-3-attendant-call-bell.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWCCS03 - Dual Wireless Staff Call</span>
                                <a href="/docs/FBXWCCS03-single-remote-dual-wireless-staff-call.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWCCS04 - Staff Call with Acknowledgement</span>
                                <a href="/docs/FBXWCCS04-single-point-wirless-staff-call-with-acknowledgement.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>FBXWCCS05 - Dual Point Staff Call</span>
                                <a href="/docs/FBXWCCS05-dual-point-wirless-staff-call-with-acknowledgement.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Panic Alarm Systems -->
                <div class="card shadow-lg border" style="border-color: var(--secondary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #a00847ff) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">warning</span>
                            Panic Alarm Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWAS01R - 1 Remote Panic Alarm (108db)</span>
                                <a href="/docs/FBXWAS01-spec-1remote-1siren.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWAS01 - 1 Remote Panic Alarm Bookbox</span>
                                <a href="/docs/FBXWAS01-spec-1remote-1siren-bookbox.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWAS02R - 2 Remote Wireless Siren (108db)</span>
                                <a href="/docs/FBXWAS02R-spec-2-remote-panic-alarm.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWAS04R - 4 Remote Wireless Siren (108db)</span>
                                <a href="/docs/FBXWAS04R-spec-4-remote-panic-alarm.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWAS06R - 6 Remote Wireless Siren (new design)</span>
                                <a href="/docs/FBXWAS06R-spec-6-remote-panic-alarm.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXSB20 - 20 Remote Wireless Siren (108db)</span>
                                <a href="/docs/FBXSB20-spec-indicator-siren-alarm.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXSB01 - Siren</span>
                                <a href="/docs/FBXSB01-siren.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX625 - Remote Controller</span>
                                <a href="/docs/FBX625-spec-remote_controller.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX521A - Panic Alarm Button Transmitter</span>
                                <a href="/docs/FBX521A-spec-panic-alarm-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX521B - Panic Alarm Button Transmitter</span>
                                <a href="/docs/FBX521B-spec-panic-alarm-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXS01 - Indoors/Outdoors 108 Decibel Siren</span>
                                <a href="/docs/FBXS01-spec-wireless-siren-108db.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXS02 - 118 Decibel Siren</span>
                                <a href="/docs/FBXS02-spec-wireless-siren-118db.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXS03 - 130 dB Wireless Alarm</span>
                                <a href="/docs/FBXS03-spec-wireless-siren-130db.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSCR - Code RED Revolving Light Beacon</span>
                                <a href="/docs/FBXCSCR-wireless-revolving-light-beacon.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>FBXCSBR - 2 Beacon Revolving Light (RED + BLUE)</span>
                                <a href="/docs/FBXCSBR-2-revolving-lights-receiver.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Long Range Systems -->
                <div class="card shadow-lg border" style="border-color: var(--success);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--success) 0%, var(--success-dark, #654316ff) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">satellite_alt</span>
                            Long Range Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX701A - Long Range Panic Button</span>
                                <a href="/docs/FBX701A-spec-long-range-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX701AS - Siren Transmitter</span>
                                <a href="/docs/FBX701AS-spec-siren-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX701B - Panic Alarm Transmitter</span>
                                <a href="/docs/FBX701B-spec-panic-alarm-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7S01M/FBX7S05M - Receiver Sirens</span>
                                <a href="/docs/FBX7S05M-FBX7S01M-spec-long-range-receiver-118db-108db-siren.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7RPT03 - Long Range Repeater</span>
                                <a href="/docs/FBX7RPT03-spec-long-range-repeater.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7RXR01R30M - Long Range 1-port Relay</span>
                                <a href="/docs/FBX7RXR01R30M-1-port-wireless-relay-receiver.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7RX - Long Range 1-port Relay</span>
                                <a href="/docs/FBX7RX-1-port-wireless-relay-receiver.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7R01R5 - 1-port Wireless Relay Receiver</span>
                                <a href="/docs/FBX7R01R5-1-port-wireless-relay-receiver.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7L02R - Receiver Display</span>
                                <a href="/docs/FBX7L02R-spec-receiver-display.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7L02FM - 2-digit Display Receiver</span>
                                <a href="/docs/FBX7L02FM-2-digit-console-display-long-range-receiver.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX721 - Remote Control</span>
                                <a href="/docs/FBX721-spec-remote-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX722 - Remote Control</span>
                                <a href="/docs/FBX722-spec-remote-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7R32I - 32-indicator Long Range Receiver</span>
                                <a href="/docs/FBX7R32I-32-indicator-long-range-receiver.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXS07 - Wireless Hooter</span>
                                <a href="/docs/FBXS07-wireless-hooter.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX711A - 11 Channel Transmitter</span>
                                <a href="/docs/FBX711A-spec-11-channel-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX701A + FBXB01C - Combo Spec</span>
                                <a href="/docs/FBX701A-FBXB01C-spec-panic-alarm-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX701A + FBXB01C - Wiring Diagram</span>
                                <a href="/docs/FBX701A-FBXB01C-wiring-diagram.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX701B - Transmitter with Remote</span>
                                <a href="/docs/FBX701B-spec-transmitter-with-remote.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7L02S05M - Receiver Siren Display</span>
                                <a href="/docs/FBX7L02S05M-receiver-siren-display.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXB01C - Beacon Spec</span>
                                <a href="/docs/FBXB01C-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXRC12/FBX7R11R5 - Remote Control Receiver</span>
                                <a href="/docs/FBXRC12-FBX7R11R5-remote-control-receiver.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Long Range Alarm Configurations</span>
                                <a href="/docs/long-range-alarm-system-configurations.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Long Range Security System Proposal</span>
                                <a href="/docs/Long-range-security-system-proposal.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXTX01 - Long Range Transmitter</span>
                                <a href="/docs/long-range-transmitter-FBXTX01-specification.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXTX01A - User Manual</span>
                                <a href="/docs/UM-FBXTX01A.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Outdoor Motion Sensor - Long Range</span>
                                <a href="/docs/Outdoor-MotionSensor-LongRange.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Handheld Long Range TX/RX (Legacy)</span>
                                <a href="/docs/handheld-long-range-transmitter-receiver-old-model.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>FBX701B + FBX521A - Combo Spec</span>
                                <a href="/docs/FBX701B-FBX521A-spec-panic-alarm-transmitter.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-3 gap-6 mb-8">
                <!-- Water Pump Controllers -->
                <div class="card shadow-lg border" style="border-color: var(--primary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--primary) 0%, var(--primary-dark, #07e2f1ff) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">water_pump</span>
                            Water Pump Controllers
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXG1 - GSM Manual Water Pump Controller</span>
                                <a href="/docs/FBXG1-GSM-manual-water-pump-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXPC01A - Remote Motor Pump Controller</span>
                                <a href="/docs/FBXPC01A-remote-motor-pump-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXPC02A - Remote Motor Pump Controller</span>
                                <a href="/docs/FBXPC02A-remote-motor-pump-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXPC02D - Remote Motor Pump Controller</span>
                                <a href="/docs/FBXPC02D-remote-motor-pump-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXPC03 - Wireless Pump Controller</span>
                                <a href="/docs/FBXPC03-spec-wireless-pump-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXPC03A - Remote Motor Pump Controller</span>
                                <a href="/docs/FBXPC03A-remote-motor-pump-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXPC03D - Remote Motor Pump Controller</span>
                                <a href="/docs/FBXPC03D-remote-motor-pump-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXPC05A - Automatic Water Level Controller</span>
                                <a href="/docs/FBXPC05A-automatic-water-level-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Automatic Water Level Controller</span>
                                <a href="/docs/automatic-water-level-controller.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>FBXPS01 - Solar Battery Power Supply</span>
                                <a href="/docs/FBXPS01-spec-Solar-Battery-PowerSupply.pdf" target="_blank" class="material-icons" style="color: var(--primary); font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Air Quality Monitors -->
                <div class="card shadow-lg border" style="border-color: var(--secondary);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--secondary) 0%, var(--secondary-dark, #eaee08ff) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">air</span>
                            Air Quality Monitors
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXYF3DL - YellowFox-3 VOC Formaldehyde Monitor Datalogger</span>
                                <a href="/docs/FBXYF3DL-YellowFox3-VOC-Formaldehyde-monitor-datalogger.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXYF3DL - VOC User Manual</span>
                                <a href="/docs/FBXYF3DL-VOC-User-Manual.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span style="opacity: 0.7;">FBXYF2T - CO2 Monitor, Temperature, Humidity (discontinued)</span>
                                <a href="/docs/YellowFox-2T-CO2-monitor-tabletop.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span style="opacity: 0.7;">FBXYF1T - Dust Monitor PM1/PM2.5/PM10 (discontinued)</span>
                                <a href="/docs/YellowFox-1T-air-monitor-tabletop.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span style="opacity: 0.7;">FBXYF1DL - Dust Monitor PM1/PM2.5/PM10 Datalogger (discontinued)</span>
                                <a href="/docs/FBXYF1DL-YellowFox1-dust-monitor-datalogger.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span style="opacity: 0.7;">FBXYF3T - VOC Formaldehyde Monitor Tabletop (discontinued)</span>
                                <a href="/docs/YellowFox-3T-VOC-Formaldehyde-monitor.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span style="opacity: 0.7;">FBXDQML - Dust PM1.0/PM2.5/PM10.0 Monitor (discontinued)</span>
                                <a href="/docs/FBXDQML-spec-dust-monitor-laser.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span style="opacity: 0.7;">FBXTHM - Total Hydrocarbon Monitor (discontinued)</span>
                                <a href="/docs/FBXTHM-VOC-monitor.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span style="opacity: 0.7;">FBXLPG01/02/03 - LPG Leakage Detector Alarm (discontinued)</span>
                                <a href="/docs/FBXLPG01-02-03-spec-LPG-detector-alarm.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXTHCO2G - CO2 Temp Humidity Monitor</span>
                                <a href="/docs/CO2-Temp-Hum-Monitor-FBXTHCO2G.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXTHCO2W - CO2 Temp Humidity Monitor</span>
                                <a href="/docs/CO2-Temp-Hum-Monitor-FBXTHCO2W.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXDTHCO2 - Dust CO2 Temp Humidity</span>
                                <a href="/docs/Dust-CO2-Temp-Hum-Monitor-FBXDTHCO2.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXDTHCO2 - CO2 Dust Temp Humidity Spec</span>
                                <a href="/docs/FBXDTHCO2-spec-co2-dust_temp-humidity-monitor.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXDQM - Dust Monitor Spec</span>
                                <a href="/docs/FBXDQM-spec-dust-monitor.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXFQM - Formaldehyde Monitor</span>
                                <a href="/docs/FBXFQM-spec-Formaldehyde-monitor.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXTHCA - Total Hydrocarbon Analyser</span>
                                <a href="/docs/FBXTHCA-spec-total-hydrocarbon-analyser.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>PM2.5 Air Monitor - FBXDQMG</span>
                                <a href="/docs/PM2.5-Air-Monitor-FBXDQMG.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>PM2.5 Air Monitor - FBXDQMW</span>
                                <a href="/docs/PM2.5-Air-Monitor-FBXDQMW.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXFQM01G - Formaldehyde Monitor</span>
                                <a href="/docs/Formaldehyde-Monitor-FBXFQM01G.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>YellowFox-1 Dust Monitor</span>
                                <a href="/docs/YellowFox-1-dust-monitor.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>YellowFox-2 VOC CO2 Handheld</span>
                                <a href="/docs/YellowFox2-VOC-CO2-monitor-handheld.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>YellowFox-3 VOC Handheld</span>
                                <a href="/docs/YellowFox3-VOC-Formaldehyde-monitor-handheld.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>YellowFox3 VOC Monitor Brochure</span>
                                <a href="/docs/Forbix-Semicon-YellowFox3-VOC-Formaldehyde-monitor.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>DQM User Manual</span>
                                <a href="/docs/UM-DQM.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Why VOC Monitors Are Needed</span>
                                <a href="/docs/Why-VOC-monitors-needed-FORBIX-SEMICON.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>VOC Test Certificate</span>
                                <a href="/docs/VOC-Test-Certificate.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Formaldehyde Monitor Test Certificate</span>
                                <a href="/docs/Formaldehyde-Monitor-Test-Certificate.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>DTHCO2 Monitor Test Certificate</span>
                                <a href="/docs/DTHCO2-Monitor-Test-Certificate.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>Test Report - Formaldehyde FBXYF3</span>
                                <a href="/docs/Test-report-Formaldehyde-FBXYF3.pdf" target="_blank" class="material-icons" style="color: var(--secondary); font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Peon Call Systems -->
                <div class="card shadow-lg border" style="border-color: var(--success);">
                    <div class="card-header" style="background: linear-gradient(135deg, var(--success) 0%, var(--success-dark, #166534) 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">notifications</span>
                            Peon Call Systems (1-32 Remote)
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS32 - 32 Remote Calling System</span>
                                <a href="/docs/FBXWACS32-32remote-wireless-calling-system.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS20 - 20 Indicator Receiver</span>
                                <a href="/docs/FBXWACS20-20-indicator-receiver.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS12 - 12 Remote Calling System</span>
                                <a href="/docs/FBXWACS12-12remote-wireless-calling-system.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS12C - 12 Remote + Cancellation</span>
                                <a href="/docs/FBXWACS12C-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS11 - 11 Remote Calling System</span>
                                <a href="/docs/FBXWACS11-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS10 - 10 Remote Calling System</span>
                                <a href="/docs/FBXWACS10-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS09 - 9 Remote Calling System</span>
                                <a href="/docs/FBXWACS09-9-button-peon-call.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS08 - 8 Remote Call Bell</span>
                                <a href="/docs/FBXWACS08-8-remote-calling-system.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS06 - 6 Remote Call Bell</span>
                                <a href="/docs/FBXWACS06-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS06C - 6 Remote + Cancellation</span>
                                <a href="/docs/FBXWACS06C-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS05 - 5 Remote Call Bell</span>
                                <a href="/docs/FBXWACS05-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS04 - 4 Remote Call Bell</span>
                                <a href="/docs/FBXWACS04-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS03 - 3 Remote Call Bell</span>
                                <a href="/docs/FBXWACS03-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS02 - 2 Remote Call Bell</span>
                                <a href="/docs/FBXWACS02-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS01 - 1 Remote Call Bell</span>
                                <a href="/docs/FBXWACS01-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS03C - 3 Remote + Cancellation</span>
                                <a href="/docs/FBXWACS03C-spec.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS06E - 6 Remote Enhanced</span>
                                <a href="/docs/FBXWACS06E-6-remote-and-cancellation-receiver.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS09C - 9 Remote + Cancellation</span>
                                <a href="/docs/FBXWACS09C-spec-9-button-peon-call-and-cancellation.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS10B - 10 Remote 2 Indicator</span>
                                <a href="/docs/FBXWACS10B-spec-10remote-2indicator-calling-system.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS04Z - 4 Remote (Customized)</span>
                                <a href="/docs/FBXWACS04Z-spec-customized-without-remote-cancel.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS08Z - 8 Remote (Customized)</span>
                                <a href="/docs/FBXWACS08Z-spec-customized-without-remote-cancel.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS06 - 6 Remote (Detailed)</span>
                                <a href="/docs/FBXWACS06-6-remote-calling-system.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWACS06 - 6 Remote Peon Calling</span>
                                <a href="/docs/FBXWACS06-spec-6remote-peon-calling-system.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXWP06 - 6 Remote Wireless Pager</span>
                                <a href="/docs/FBXWP06-spec-6-remote-wireless-pager.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>WACS02 - 2 Remote Spec</span>
                                <a href="/docs/WACS02.pdf" target="_blank" class="material-icons" style="color: var(--success); font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- New Sections Row -->
            <div class="grid grid-3 gap-6 mb-8">
                <!-- Traffic Light Systems -->
                <div class="card shadow-lg border" style="border-color: #dc2626;">
                    <div class="card-header" style="background: linear-gradient(135deg, #dc2626 0%, #f59e0b 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">traffic</span>
                            Traffic Light Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXTLC01 - Traffic Light Controller</span>
                                <a href="/docs/FBXTLC01-spec-traffic-light-controller.pdf" target="_blank" class="material-icons" style="color: #dc2626; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Wireless Automatic Traffic Light Controller</span>
                                <a href="/docs/Wireless-Automatic-Traffic-Light-Controller.pdf" target="_blank" class="material-icons" style="color: #dc2626; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Traffic Light Scheme - Common Way</span>
                                <a href="/docs/traffic-light-scheme-for-common-way.pdf" target="_blank" class="material-icons" style="color: #dc2626; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>Pedestrian Crossing Traffic Light</span>
                                <a href="/docs/pedestrian-crossing-traffic-light-system.pdf" target="_blank" class="material-icons" style="color: #dc2626; font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Customized Automation Solutions -->
                <div class="card shadow-lg border" style="border-color: #7c3aed;">
                    <div class="card-header" style="background: linear-gradient(135deg, #7c3aed 0%, #4f46e5 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">precision_manufacturing</span>
                            Customized Automation
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Car Parking - Customized Solution</span>
                                <a href="/docs/car-parking-customized.pdf" target="_blank" class="material-icons" style="color: #7c3aed; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Vehicle Movement System</span>
                                <a href="/docs/customised-vehicle-movement.pdf" target="_blank" class="material-icons" style="color: #7c3aed; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Train Detection Alarm System</span>
                                <a href="/docs/train-detection-alarm-system.pdf" target="_blank" class="material-icons" style="color: #7c3aed; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Unmanned Railway Crossing Alert</span>
                                <a href="/docs/unmanned-railway-crossing-train-detection-alarm.pdf" target="_blank" class="material-icons" style="color: #7c3aed; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Wagon Sensor System</span>
                                <a href="/docs/Wagon-Sensor.pdf" target="_blank" class="material-icons" style="color: #7c3aed; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>Firing Target System</span>
                                <a href="/docs/Firing-Target.pdf" target="_blank" class="material-icons" style="color: #7c3aed; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>FBXTFT01 - Wireless Remote Calling</span>
                                <a href="/docs/FBXTFT01-spec-wireless-remote-calling-system.pdf" target="_blank" class="material-icons" style="color: #7c3aed; font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Token/Counter Display Systems -->
                <div class="card shadow-lg border" style="border-color: #db2777;">
                    <div class="card-header" style="background: linear-gradient(135deg, #db2777 0%, #ec4899 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">display_settings</span>
                            Token/Counter Display
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXTCS02 - Token Control System</span>
                                <a href="/docs/FBXTCS02-spec-Token-Control-System.pdf" target="_blank" class="material-icons" style="color: #db2777; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXTD02A - 2-digit Counter System</span>
                                <a href="/docs/FBXTD02A-counter-system.pdf" target="_blank" class="material-icons" style="color: #db2777; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXTD03A - 3-digit Counter System</span>
                                <a href="/docs/FBXTD03A-counter-system.pdf" target="_blank" class="material-icons" style="color: #db2777; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>FBXTMR01 - Timer Display</span>
                                <a href="/docs/FBXTMR01-spec-timer.pdf" target="_blank" class="material-icons" style="color: #db2777; font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Relay Receivers Section -->
            <div class="grid grid-2 gap-6 mb-8">
                <!-- Relay Receivers & Remote Control -->
                <div class="card shadow-lg border" style="border-color: #0d9488;">
                    <div class="card-header" style="background: linear-gradient(135deg, #0d9488 0%, #14b8a6 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">electrical_services</span>
                            Relay Receivers & Remote Control
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXRR01R5 - 1-port Relay Receiver (5A)</span>
                                <a href="/docs/FBXRR01R5-1-port-wireless-relay-receiver.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX3T/FBX3R05 - 3-port TX/RX Set</span>
                                <a href="/docs/FBX3T-FBX3R05-3-port-transmitter-receiver.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX521/FBX5XR1 - 1-Remote TX/RX</span>
                                <a href="/docs/FBX521-FBX5XR1-spec-1remote-transmitter-receiver.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX5XT4/FBX5XR4 - 4-Channel TX/RX</span>
                                <a href="/docs/FBX5XT4-FBX5XR4-spec-4channel-transmitter-receiver.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSR01R5 - Relay Receiver 5 Amps</span>
                                <a href="/docs/FBXCSR01R5-spec-relay-receiver-5Amps.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSR01R30 - Relay Receiver 30 Amps</span>
                                <a href="/docs/FBXCSR01R30-spec-relay-receiver-30Amps.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSR01RM30 - Wireless Relay Receiver</span>
                                <a href="/docs/FBXCSR01RM30-wireless-relay-receiver.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXCSR03R30C - Up/Down Movement</span>
                                <a href="/docs/FBXCSR03R30C-spec-up-down-moverment.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7RXR01R30M - Long Range Relay 30A</span>
                                <a href="/docs/FBX7RXR01R30M-1-port-wireless-relay-receiver.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7RX - Long Range 1-port Relay</span>
                                <a href="/docs/FBX7RX-1-port-wireless-relay-receiver.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX7R01R5 - Long Range Relay 5A</span>
                                <a href="/docs/FBX7R01R5-1-port-wireless-relay-receiver.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>8-Port Relay Receiver</span>
                                <a href="/docs/relay-receiver-8port.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>10-Port Relay Receiver</span>
                                <a href="/docs/relay-receiver-10port.pdf" target="_blank" class="material-icons" style="color: #0d9488; font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- GSM & Keypad Systems -->
                <div class="card shadow-lg border" style="border-color: #0891b2;">
                    <div class="card-header" style="background: linear-gradient(135deg, #0891b2 0%, #06b6d4 100%); color: white;">
                        <h3 class="card-title" style="color: white; margin: 0; font-size: 1rem;">
                            <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">dialpad</span>
                            GSM & Keypad Systems
                        </h3>
                    </div>
                    <div class="card-content" style="max-height: 400px; overflow-y: auto;">
                        <div class="grid gap-1" style="font-size: 0.8rem;">
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXAD01 - GSM Automatic Dialer</span>
                                <a href="/docs/FBXAD01-spec-GSM-automatic-dialer.pdf" target="_blank" class="material-icons" style="color: #0891b2; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXKPD01 - Keypad Dialer</span>
                                <a href="/docs/FBXKPD01-spec-keypad-dialer.pdf" target="_blank" class="material-icons" style="color: #0891b2; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBXKT34 - Keypad Transmitter</span>
                                <a href="/docs/FBXKT34-spec-Keypad-Transmitter.pdf" target="_blank" class="material-icons" style="color: #0891b2; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1 border-b" style="border-color: var(--border);">
                                <span>FBX622 - Remote Controller</span>
                                <a href="/docs/FBX622-spec-remote_controller.pdf" target="_blank" class="material-icons" style="color: #0891b2; font-size: 1rem;">download</a>
                            </div>
                            <div class="flex flex-between py-1">
                                <span>FBXG1 - GSM Manual Water Pump Controller</span>
                                <a href="/docs/FBXG1-GSM-manual-water-pump-controller.pdf" target="_blank" class="material-icons" style="color: #0891b2; font-size: 1rem;">download</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Request Documentation Section -->
        <section class="section text-center">
            <div class="card shadow-lg">
                <div class="card-content">
                    <h2 style="color: var(--primary); margin-bottom: 1rem;">
                        <span class="material-icons" style="vertical-align: middle; margin-right: 0.5rem;">help_outline</span>
                        Need Specific Documentation?
                    </h2>
                    <p style="font-size: 1.125rem; margin-bottom: 2rem;">
                        Can't find the documentation you're looking for? Our technical team maintains comprehensive documentation 
                        for over <strong>150+ products</strong> including detailed specifications, wiring diagrams, and installation manuals.
                    </p>
                    
                    <div class="grid grid-3 gap-3 mb-4">
                        <div class="card border" style="border-color: var(--primary);">
                            <div class="flex gap-2">
                                <span class="material-icons" style="color: var(--primary);">folder</span>
                                <div>
                                    <strong>150+ Documents</strong><br>
                                    <span style="font-size: 0.9rem;">Complete technical library</span>
                                </div>
                            </div>
                        </div>
                        <div class="card border" style="border-color: var(--secondary);">
                            <div class="flex gap-2">
                                <span class="material-icons" style="color: var(--secondary);">update</span>
                                <div>
                                    <strong>Weekly Updates</strong><br>
                                    <span style="font-size: 0.9rem;">Latest revisions & new products</span>
                                </div>
                            </div>
                        </div>
                        <div class="card border" style="border-color: var(--success);">
                            <div class="flex gap-2">
                                <span class="material-icons" style="color: var(--success);">support</span>
                                <div>
                                    <strong>Expert Support</strong><br>
                                    <span style="font-size: 0.9rem;">Technical assistance available</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-center gap-3">
                        <a href="contact.php" class="btn btn-primary" style="font-size: 1.125rem; padding: 1rem 2rem;">
                            <span class="material-icons">email</span>
                            Request Specific Documents
                        </a>
                        <a href="products.php" class="btn btn-secondary" style="font-size: 1.125rem; padding: 1rem 2rem;">
                            <span class="material-icons">inventory</span>
                            Browse Products
                        </a>
                    </div>

                    <div class="card mt-4" style="background-color: var(--success-light); border-color: var(--success);">
                        <div class="flex flex-center gap-2">
                            <span class="material-icons" style="color: var(--success);">schedule</span>
                            <span>All documentation is available for immediate download. Technical support available for implementation assistance.</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>